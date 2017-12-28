<?php
class Admin extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id'))
		{
			$data =$this->session->userdata('id');
			return redirect(base_url('login'));
		}

	}

	public function get_data()
	{
		
		$this->load->model('adminmodel');

		$users['data'] = $this->adminmodel->getdata();
		$this->load->view('admin_view',$users);
	}

	public function logout()
	{
  		$this->session->unset_userdata('id');
  		return redirect(base_url('login'));
	}

	public function user_reg(){
		$this->load->view('adduser_view');
	}


	function image_resize($path,$img)
	{
        //$this->load->library('image_lib');
        $config_resize =array();
        $config_resize['image_library'] = 'gd2';
        $config_resize['source_image'] = $path;
        //$config['create_thumb'] = FALSE;
        //$config_resize['maintain_ratio'] = TRUE;
        $config_resize['width']     = 30;
        $config_resize['height']   = 30;

        $config_resize['new_image'] ='./assets/images/'.$img;
        $this->load->library('image_lib',$config_resize);
        $this->image_lib->resize();
	}

	public function register_user()
	{
		$this->load->library('form_validation'); // for validation login form
		$this->form_validation->set_rules('username','User Name','required|trim|alpha');
		$this->form_validation->set_rules('email','User Name','required|trim');
		$this->form_validation->set_rules('password','Password','required');

		$config['upload_path']    = './assets/images/';
        $config['allowed_types']  = 'gif|jpg|png';
        // $config['max_size']       = 700;
        $config['max_width']      = 1024;
        $config['max_height']     = 768;
        // $config['overwrite'] = TRUE;
        $config['encrypt_name'] = FALSE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);

        // echo $config['upload_path'];
        // exit;

		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($this->upload->do_upload()){
				$data = array('upload_data' => $this->upload->data());
				$result = $this->image_resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
				$imagepath=$data['upload_data']['file_name'];
				// $img_src = $data['source_image'];
				//$keywords = explode('./', $imagepath);
				// var_dump($imagepath);
				// exit();
			}
			else 
			{
				var_dump('error');
				exit();
			}
			$image=$imagepath;
			//echo "Username is : ".$username." Password is :".$password;
			// echo "<script> alert('successful')</script>";
			$this->load->model('adminmodel');
			$login_id = $this->adminmodel->addData($username,$email,$password,$image);
			//print_r($login_id);
			//exit();
			if($login_id)
			{
				//success
				
				// print_r($data);
				// exit();
				return redirect('admin/get_data');
			}
			else
			{
				$this->session->set_flashdata('adddata_failed','Data not Enter');
			}
		}
		else
		{
			//$this->load->view('login_index.php');
			echo "<script> alert('Plz fill both fields');</script>";
			return redirect(base_url('admin/user_reg'));
		}
	}


	public function delete($id)
	{
		//echo $id  or //echo $this->uri->segment(3);   for getting the id where user click

		$this->load->model('adminmodel');
		$data = $this->adminmodel->deleteData($id);

		if($data==1)
		{
			echo "data deleted successfully";	
			return redirect(base_url('admin/get_data'));
		}
	}

}