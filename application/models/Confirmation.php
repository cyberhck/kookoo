<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Confirmation extends CI_Model {
	public function confirm($phone,$pin,$user)
	{
		$this->db->select()->from('password_less')->where('user',$user)->where('token',$pin);
		$query=$this->db->get();
		if($query->num_rows()>0){
			$data['access']='1';
			//$this->db->where('user',$user);
			//$this->db->where('token',$token);
			$this->db->update('password_less',$data,array('user'=>$user,'token'=>$pin));
			echo "updated";
		}else{
			echo "don't do anything";
		}
	}

}
