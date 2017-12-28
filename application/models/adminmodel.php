<?php
/**
* 
*/
class Adminmodel extends CI_Model
{
	public function getData(){

		$this->load->database();
		$q = $this->db->select('Id,user_name,email,user_image')
					    ->get('users');
		 // $this->db->select('Id,user_name,email')->where('Id',1)->get('users');   // this is called method chaining

		$result = $q->result_array();
		//echo "<pre>";
		//print_r($result);
		return $result;

	}


	public function addData($username,$email,$password,$image)
	{
		$this->load->database();
		$q = "INSERT INTO users (user_name,email,password,user_image) VALUES ('".$username."', '".$email."','".$password."','".$image."')";
		$this->db->query($q);
		$rf = $this->db->affected_rows();
		return $rf;


	}
	public function deleteData($id)
	{
		$this->load->database();
		$q = $this->db->where('Id', $id)
		 			  ->delete('users');
					//->where('Id',$id);
		//echo $q;
		return $q;
	}
}