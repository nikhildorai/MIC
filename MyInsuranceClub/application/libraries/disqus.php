<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Disqus
 * A Simple Library to Manage interacting with the Disqus API
 * 
 * Requires the cURL library by Philip Sturgeon [http://github.com/philsturgeon]
 * See the official API documentation for methods and response formats: http://wiki.disqus.net/API
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	API Interaction
 * @author		Tony Dewan <tonydewan.com/contact>	
 * @version		1.00
 * @license		http://www.opensource.org/licenses/bsd-license.php BSD licensed.
 *
 * @todo		Finish writing testing controller
 */
class disqus {
	
	public $forum_id  = '';
	public $forum_shortname = '';
	public $user_api_key  = NULL;
	public $forum_api_key = NULL;
	public $config = array();
	public $js_params = array();
	
	protected $api_base = 'http://disqus.com/api/';
	
	protected $CI;
	protected $loaded = array();
	
    function __construct()
    {
		$this->CI =& get_instance();
		$dis =& get_instance();
		log_message('debug', 'Disqus: Library initialized.');
		
		if( $this->CI->config->load('disqus', TRUE, TRUE) ){
		
			log_message('debug', 'Disqus: config loaded from config file.');
			
			$disqus_config = $dis->disqus;
			$this->config($disqus_config);
		}
    }	
	
	/** 
	* Load Config
	* @access	public
	* @param	Array of config variables.
	* @return   Void
	*/	
	public function config($config)
	{
		foreach ($config as $key => $value)
		{
			$this->$key = $value;
		}

		log_message('debug', 'Disqus: library configured.');
	}

	// display methods
	// ------------------------------------------------------------
	
	/** 
	* Display the thread (via the standard Disqus JS integration)
	* @access	public
	* @param	array of params (will overwrite values from config value)
	* @return   String of comment count on success
	*/	
	public function display_thread($container = NULL)
	{

		$id = ($container) ? $container : ( isset($this->js_params['disqus_container_id']) ? $this->js_params['disqus_container_id'] : 'disqus_thread ' );
		$out = '<div id="'.$id.'"></div>';
		$out .= '<script type="text/javascript" src="http://disqus.com/forums/'.$this->forum_shortname.'/embed.js"></script>';
		$out .= '<noscript><a href="http://disqus.com/forums/'.$this->forum_shortname.'/?url=ref">View the discussion thread.</a></noscript>';
		
		return $out;
	}


	/** 
	* Display a script block with JS params
	* @access	public
	* @param	array of params (will overwrite values from config value)
	* @return   String of comment count on success
	*/	
	public function js_params($params = NULL)
	{
		if($params){
			$this->js_params = array_merge($this->js_params, $params);
		}

		if( !empty($this->js_params) ){
			
			$out = '<script type="text/javascript">';
			foreach ($this->js_params as $key => $value)
			{
				$out .= "var $key = '$value';";
			}
			return $out . '</script>';
			
		}
		
	}
	
	// Simple Methods
	// ------------------------------------------------------------


	/** 
	* Get Post Count by Indentifier (Note that due to how the API is written, this will create a new thread if the identifier is new)
	* @access	public
	* @param	identifier to get the comment thread
	* @return   String of comment count on success, FALSE on failure
	*/
	public function get_post_count_by_identifier($identifier)
	{
		$forum = $this->thread_by_identifier(NULL, $identifier);

		if(!$forum){
			log_message('error', 'Disqus: the identifier "'.$identifier.'" does not reference a disqus thread.');
			return FALSE;
		}

		$id = $forum->thread->id;
		$posts = $this->get_num_posts(NULL, $id);

		return $posts->{$id}[0];
	}

	/** 
	* Get Post Count by URL
	* @access	public
	* @param	URL of the thread to get the comments for
	* @return   String of comment count on success, FALSE on failure
	*/
	public function get_post_count_by_url($url)
	{
		$forum = $this->get_thread_by_url(NULL, $url);
		
		if(!$forum){
			log_message('error', 'Disqus: the url "'.$url.'" does not reference a disqus thread.');
			return FALSE;
		}

		$id = $forum->id;
		// return $forum->num_comments; //currently undocumented in the API, so probably not good to rely on
		$posts = $this->get_num_posts(NULL, $id);

		return $posts->{$id}[0];
	}


	// API Methods
	// ------------------------------------------------------------
	
	/** 
	* Create Post
	* @access	public
	* @param	String of the thread_id
	* @param	String of the message
	* @param	String of the author_name 
	* @param	String of the author_email
	* @param	String of the parent_post OPTIONAL
	* @param	String of the created_at OPTIONAL
	* @param	String of the author_url OPTIONAL
	* @param	String of the ip_address OPTIONAL
	* @return   The post object just created on success, FALSE on failure.
	*/
	public function create_post($forum_key = NULL, $thread_id, $message, $author_name, $author_email, $parent_post = NULL, $created_at = NULL, $author_url = NULL, $ip_address = NULL)
	{
		// you can pass an array of options instead
		if( is_array($thread_id) ){
			$params = $thread_id;
		}else{
			
			$params['forum_api_key'] = ($forum_key) ? $forum_key : $this->forum_api_key;
			
			$params = array(
				'thread_id' => $thread_id,
				'message' => $message,
				'author_name' => $author_name,
				'author_email' => $author_email
			);
		
			if($parent_post) $params['parent_post'] = $parent_post;
			if($created_at) $params['created_at'] = $created_at;
			if($author_url) $params['author_url'] = $author_url;
			if($ip_address) $params['ip_address'] = $ip_address;

		}
	
		return $this->_request('POST', 'create_post', $params);
	}

	
	/** 
	* Get Forum List
	* @access	public
	* @param	String of the users API key. Defaults to the global user_api_key value
	* @return   A list of objects representing all forums the user owns on success or FALSE on failure
	*/	
	public function get_forum_list($user_key = NULL)
	{
		$params['user_api_key'] = ($user_key) ? $user_key : $this->user_api_key;
				
		return $this->_request('GET', 'get_forum_list', $params);
	}


	/** 
	* Get Forum API Key
	* @access	public
	* @param	String of the users API key. Defaults to the global user_api_key value
	* @param	String of the forum_id. Defaults to the global forum_id value
	* @return   String of API Key or FALSE
	*/
	public function get_forum_api_key($user_key = NULL, $forum_id = NULL)
	{
		$params['user_api_key'] = ($user_key) ? $user_key : $this->user_api_key;
		$params['forum_id'] = ($forum_id) ? $forum_id : $this->forum_id;
				
		return $this->_request('GET', 'get_forum_api_key', $params);
	}


	/** 
	* Get Thread List
	* @access	public
	* @param	String of the forum API key. Defaults to the global forum_key value
	* @return   list (array) of threads or FALSE
	*/
	public function get_thread_list($forum_key = NULL)
	{
		$params['forum_api_key'] = ($forum_key) ? $forum_key : $this->forum_api_key;

		return $this->_request('GET', 'get_thread_list', $params);
	}


	/** 
	* Get Number of Posts
	* @access	public
	* @param	String of the forum API key. Defaults to the global forum_key value
	* @param	String of list of threads
	* @return   Object mapping each thread_id to a list of two numbers(Visible total, total total), or FALSE
	*/
	public function get_num_posts($forum_key = NULL, $thread_ids = '')
	{
		$params['forum_api_key'] = ($forum_key) ? $forum_key : $this->forum_api_key;
		$params['thread_ids'] = $thread_ids;
				
		return $this->_request('GET', 'get_num_posts', $params);
	}


	/** 
	* Get Thread by URL
	* @access	public
	* @param	String of the forum API key. Defaults to the global forum_key value
	* @param	String of the URL
	* @return   A thread object if one was found, otherwise FALSE
	*/
	public function get_thread_by_url($forum_key = NULL, $url = '')
	{
		$params['forum_api_key'] = ($forum_key) ? $forum_key : $this->forum_api_key;
		$params['url'] = $url;
				
		return $this->_request('GET', 'get_thread_by_url', $params);
	}
	

	/** 
	* Get Thread Posts
	* @access	public
	* @param	String of the forum API key. Defaults to the global forum_key value
	* @param	String of the thread ID
	* @return   A list of objects representing all posts belonging to the given forum, otherwise FALSE
	*/
	public function get_thread_posts($forum_key = NULL, $thread_id = '')
	{
		$params['forum_api_key'] = ($forum_key) ? $forum_key : $this->forum_api_key;
		$params['thread_id'] = $thread_id;
				
		return $this->_request('GET', 'get_thread_posts', $params);
	}
	

	/** 
	* Get Thread Posts
	* @access	public
	* @param	String of the forum API key. Defaults to the global forum_key value
	* @param	String of the thread ID
	* @param	String title of the thread to possibly be created
	* @return   An object with two keys [thread,created], otherwise FALSE
	*/
	public function thread_by_identifier($forum_key = NULL, $identifier = '', $title = '')
	{
		$params['forum_api_key'] = ($forum_key) ? $forum_key : $this->forum_api_key;
		$params['title'] = $title;
		$params['identifier'] = $identifier;
				
		return $this->_request('POST', 'thread_by_identifier', $params);
	}


	/** 
	* Update Thread
	* @access	public
	* @param	String of the forum API key. Defaults to the global forum_key value
	* @param	String of the thread ID
	* @param	String of the title OPTIONAL
	* @param	String of the slug OPTIONAL
	* @param	String of the url OPTIONAL
	* @param	Boolean of the allow_comments flag OPTIONAL
	* @return   An object with two keys [thread,created], otherwise FALSE
	*/
	public function update_thread($forum_key = NULL, $thread_id = '', $title = NULL, $slug = NULL, $url = NULL, $allow_comments = NULL)
	{
		$params['forum_api_key'] = ($forum_key) ? $forum_key : $this->forum_api_key;
		$params['thread_id'] = $thread_id;

		if($title) $params['title'] = $title;
		if($slug) $params['slug'] = $slug;
		if($url) $params['url'] = $url;
		if($allow_comments) $params['allow_comments'] = $allow_comments;
				
		return $this->_request('POST', 'update_thread', $params);
	}


	
	/** 
	* Wrapper for doing actual API requests
	* @access	protected
	* @param	String of the request type
	* @param	String of the method name
	* @param	array of params
	* @return   Decoded result object on success, FALSE on error
	*/	
	private function _request($type = 'GET', $method = NULL, $params = NULL)
	{
		
		if(!$type || !$method || !$params) return false;
		
		$this->_load('curl');
		
		switch(strtoupper($type)):
			
			case 'GET':
			
				$param_string = '/?';

				foreach ($params as $key => $value)
				{
					$param_string .= $key.'='.$value.'&';
				}

				$result = $this->CI->curl->simple_get($this->api_base.$method.$param_string);
				
			break;
			
			case 'POST':

				$result = $this->CI->curl->simple_post($this->api_base.$method.'/', $params);

			break;
		
		endswitch;

		//return $this->CI->curl->debug();
		$result = json_decode($result);
		
		if(!$result || $result == NULL) return FALSE;
		
		if($result->succeeded == FALSE):
		
			log_message('error', 'Disqus: API request for "'.$method.'" failed with this message :'.$result->message);
			return FALSE;
			
		else:
		
			return $result->message;
		
		endif;
	}


	/** 
	* Function used to prevent multiple load calls for the same CI library
	* Originally from Carabiner. Not really necessary, just keeps your logs cleaner.
	* @access	protected
	* @param	String library name
	* @return   FALSE on empty call and when library is already loaded, TRUE when library loaded
	*/
	protected function _load($lib=NULL)
	{
		if($lib == NULL) return FALSE;
		
		if( isset($this->loaded[$lib]) ):
			return FALSE;
		else:
			$this->CI->load->library($lib);
			$this->loaded[$lib] = TRUE;
			log_message('debug', 'Disqus: library '."'$lib'".' loaded');
			return TRUE;
		endif;
	}
}


