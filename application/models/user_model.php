<?php

class User_model extends CI_Model{

	public function getData(){

		$this->load->database();
		$q = $this->db->select('Id,user_name,email')
					    ->get('users');




					    // $this->db->select('Id,user_name,email')->where('Id',1)->get('users');   // this is called method chaining

		$result = $q->result_array();
		//echo "<pre>";
		//print_r($result);
		return $result;

	}
}

?>