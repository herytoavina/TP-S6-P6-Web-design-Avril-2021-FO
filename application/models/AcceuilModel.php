<?php
	 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	require_once 'BaseModel.php';

	class AcceuilModel extends BaseModel{
	   
	   public function findAllType()
	   {
	   		# code...
	   		return $this->db->get('type');
	   }
	}

?>