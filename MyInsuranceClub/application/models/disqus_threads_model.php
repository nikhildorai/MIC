<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Disqus_threads_model EXTENDS Admin_Model{

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	function saveRecord($arrParams = array(), $modelType = 'update')
	{		
		if (!empty($arrParams))
		{
			$colNames = $colValues = array();
			if ($modelType == 'create')
			{
				foreach ($arrParams as $k1=>$v1)
				{
					if (!in_array($k1, array('id')))
					{
						$colNames[] = trim($k1);
						if (is_numeric($v1))
							$colValues[] = trim($v1);
						else
							$colValues[] = '"'.trim($v1).'"';
					}
				}
				$colNames = implode(', ', $colNames);
				$colValues = implode(', ', $colValues);
				$sql = 'INSERT INTO disqus_threads ('.$colNames.') VALUES('.$colValues.')';
			}
			else
			{
				foreach ($arrParams as $k1=>$v1)
				{
					if (!in_array($k1, array('id')))
					{
						if (is_numeric($v1))
							$colValues[] = trim($k1).'='.trim($v1);
						else
							$colValues[] = trim($k1).'='.'"'.trim($v1).'"';
					}
				}
				$colValues = implode(', ', $colValues);
				$sql = 'UPDATE disqus_threads SET '.$colValues.' WHERE id = '.$arrParams['id'];		
			}		
			if ($this->db->query($sql))
				return true;
			else 
				return false;
		}
		else
			return FALSE;
	}
	
	
	public function getAll($arrParams = array())
	{	
		$sql = 'SELECT * FROM disqus_threads WHERE isDeleted != 1';

		if (!empty($arrParams))
		{
			if (isset($arrParams['category']) && !empty($arrParams['category']))
				$sql .= ' AND category = "'.$arrParams['category'].'"';
		}
		$sql .= ' ORDER BY id DESC ';		
		$result = $this->db->query($sql);
		return $result;
	}
	
	public function getTableName()
	{
		return 'disqus_threads';
	}
	
	public function excuteQuery($sql)
	{		
		return $this->db->query($sql);
	}
}