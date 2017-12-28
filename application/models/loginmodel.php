<?php
class Loginmodel extends CI_Model
{
	public function login_validate($username,$password)
	{
		//$this->load->database();
		$q = $this->db->select('id,user_name,email,password,user_image')
					  ->where(['email'=>$username , 'password'=>$password])
		 			  ->get('users');


		if($q->num_rows())
		{
			// echo "<pre>";
			// print_r ($q->row()->user_image);
		 //    exit();
			// $this->session->set_userdata('username', $q->row()->user_name);
			$this->session->set_userdata('username', $q->row()->user_name);
			$this->session->userdata('username');
			$this->session->set_userdata('imagename', $q->row()->user_image);
			$this->session->userdata('imagename');

			return $q->row()->id;
		}
		else
		{
			return FALSE;
		}
	}
}