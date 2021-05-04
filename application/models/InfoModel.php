<?php
	 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	require_once 'BaseModel.php';

	class InfoModel extends BaseModel{
	   
	   public function addInfo($data){
		$this->db->insert('info', $data);
	   } 

	   public function findAllInfo()
	   {
	   		$query = "select nom, sum(nombre) as nombre from type,info where type.IDType=info.IDtype group by nom";
	   		# code...
	   		return $this->db->query($query)->result_array();
	   }

	   public function findAllInfoByDate($date)
	   {
	   		$query = "select nom, nombre, dateInfo from type,info where type.IDType=info.IDtype and Date(info.dateInfo)='".$date."'";
	   		# code...
	   		return $this->db->query($query)->result_array();
	   }
	    
	}

?>