<?php

class UserModel extends CI_Model{

	public function getData(){

		return [
			["firstname"=>"first name","lastname"=>"first name"],
			["firstname"=>"second name","lastname"=>"second name"],
			["firstname"=>"third name","lastname"=>"third name"],
		];
	}
}
?>