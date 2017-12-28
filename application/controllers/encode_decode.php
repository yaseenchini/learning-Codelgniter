<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Encode_decode extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id'))
		{
			$data =$this->session->userdata('id');
			return redirect(base_url('login'));
		}
		else
		{
			$this->load->library('encrypt');
		}

	}


	public function my_encription($key,$planetext){
		$key_len = strlen($key);
		$plane_txt = strlen($planetext);
		$new_string = $key_len.$plane_txt;
		for ($i=0; $i <$plane_txt ; $i++) { 
			$new_string[i]=$plane_txt[i];
		}
		for ($i=0; $i <$key_len ; $i++) { 
			$new_string[$plane_txt.i]=$key[i];
		}
		$raw = base64_decode($new_string);
		return $raw;

	}

	public function guidToBytes($guid) {
	    $guid_byte_order = [3, 2, 1, 0, 5, 4, 7, 6, 8, 9, 10, 11, 12, 13, 14, 15];
	    $guid = preg_replace("/[^a-zA-Z0-9]+/", "", $guid);
	    $result = [];
	    foreach ($guid_byte_order as $offset) {
	        $result[] = hexdec(substr($guid, 2 * $offset, 2));
	    }
	    return $result;
	}



	public function encrypt_data()
	{
		$key_2 = 'PSCKPK_1';
		$msg_2 = $this->input->post('msg');
		//$encrypted_string =$this->encrypt->encode($msg, $key);
		$msg_1 = iconv_set_encoding($msg_2, "UTF-8");
		$key_1 = iconv_set_encoding($key_2, "UTF-8");

		$msg = $this->guidToBytes($msg_1);
		$key = $this->guidToBytes($key_1);
		$string_version = implode(',', $msg);
		$string_version = implode(',', $key);
		

		$key_len = sizeof($key);

		$plane_txt = sizeof($msg);
		$new_string = $key.$msg;
		$final_string=$this->guidToBytes($new_string);
		for ($i=0; $i<$plane_txt ; $i++) 
		{ 
			$final_string[i]=$msg[i];
		}
		for ($i=0; $i<$key_len ; $i++) 
		{ 
			$finat_string[$msg.i]=$key[i];
		}
		$raw = base64_decode($new_string);
       // echo hash('sha512',$raw);
		echo ($raw); 
        exit();

	}
	public function decrypt_data()
	{
		$key = $this->input->post('key');
		$msg = $this->input->post('msg');
		$encrypted_string =$this->encrypt->decode($msg, $key);
		var_dump ($encrypted_string);
		exit();
	}

	public function encode_data(){
		$this->load->view('encode_decode_view');
	}
	public function decode_data(){
		$this->load->view('decode_view');
	}
}