<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Policy_features_mediclaim_model EXTENDS Admin_Model{

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	public static function saveRecord($arrParams = array(), $modelType = 'update')
	{
		$saveRecord = false;
		$db = &get_instance();
		$db->db->freeDBResource($db->db->conn_id);
		if (!empty($arrParams))
		{
			$colNames = $colValues = $values = array();
			foreach ($arrParams as $k1=>$v1)
			{
				if (!in_array($k1, array('features_id')))
				{
					if (is_numeric($v1))
						$values[$k1] = (int)trim($v1);
					else
						$values[$k1] = trim($v1);
				}
			}		
			if ($modelType == 'create')
			{
				if ($db->db->insert('policy_features_mediclaim', $values))
					$saveRecord = true;
			}
			else
			{
				$where = array('features_id'=> $arrParams['features_id']);
				if ($db->db->update('policy_features_mediclaim', $values, $where))
					$saveRecord = true;
			}
		}	
		if ($saveRecord == true)
		{
			if ($modelType == 'create')
				return $db->db->insert_id();
			else 
				return $arrParams['features_id'];
		}
		else
			return false;
	}
	
	
	public function getAll($arrParams = array())
	{	
		$sql = 'SELECT * FROM '.$this->getTableName().' WHERE status !="deleted" ';
		if (!empty($arrParams))
		{
			if (isset($arrParams['name']) && !empty($arrParams['name']))
				$sql .= ' AND name LIKE "%'.$arrParams['name'].'%" ';
		}
		$sql .= ' ORDER BY name ASC, features_id ASC ';	
		$result = $this->db->query($sql);
		return $result;
	}
	
	public function getTableName()
	{
		return Util::getDbPrefix().'policy_features_mediclaim';
	}
	
	public function excuteQuery($sql)
	{		
		return $this->db->query($sql);
	}
}