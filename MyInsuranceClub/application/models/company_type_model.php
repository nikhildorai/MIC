<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_type_model EXTENDS CI_Model{

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->library('session');
	}
	
	public function getById($id)
	{
		$sql = 'SELECT * FROM company_type WHERE company_type_id = '.$id;
		return $this->db->query($sql);
	}
	
	public function getAll()
	{
		$sql = 'SELECT * FROM company_type';
		return $this->db->query($sql);
	}
	
}