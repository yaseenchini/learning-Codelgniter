<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Login extends MY_Controller {
	public function index()
	{
		//$this->load->view('login_index');
		//$this->load->model('user_model', "obj");
		//$users['data'] = $this->obj->getData();
		if($this->session->userdata('id'))
			return redirect('admin/get_data');
		$this->load->helper('form');
		$this->load->view('login_index');
	}

	public function admin_login()
	{
		$this->load->library('form_validation'); // for validation login form
		$this->form_validation->set_rules('username','User Name','required|trim');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			//echo "Username is : ".$username." Password is :".$password;
			// echo "<script> alert('successful')</script>";
			$this->load->model('loginmodel');
			$login_id = $this->loginmodel->login_validate($username,$password);
			//print_r($login_id);
			//exit();
			if($login_id)
			{
				//success
				//$this->load->model('loginmodel', "obj");
				//$this->load->view('admin_view');
				//print_r($login_id);
				//exit();
				$this->session->set_userdata('id',$login_id); //first set the key with getting data
				$data = $this->session->userdata('id'); // this will help to write session on ur data 
				// print_r($data);
				// exit();
				return redirect('admin/get_data');
			}
			else
			{
				$this->session->set_flashdata('login_failed','Invalid Username/Password');
				return redirect(base_url('login'));
			}
		}
		else
		{
			//$this->load->view('login_index.php');
			echo "<script> alert('Plz fill both fields');</script>";
			return redirect(base_url('login'));
		}
	}

}
