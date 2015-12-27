<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// check if it's a direct script access
class Signup extends CI_Controller {
	/**
	*	accouonts controller handles the routes for accounts related requests
	*
	*	@author Nishchal Gautam <gautam.nishchal@gmail.com>
	*	@access public
	*	@category accounts
	*	@copyright (c) 2015, Nishchal Gautam
	*	@since 0.1
	*	@todo Create a default view for accounts page
	*	@version 0.1
	*
	*/

	public function index()
	{
		$data['Title']="Create an account";
		$this->load->library('parser');
		$this->parser->parse('templates/header', $data);
		$this->parser->parse('signup',[]);
		$this->parser->parse('templates/footer',[]);
	}
	public function save()
	{
		$this->load->model('user');
		$data=$this->user->create();
		echo json_encode($data);
	}

	public function verify($user_id='',$token='')
	{

		//load the account model for verification

		$this->load->model('account');

		//pass user id an token which we have from get parameter
		//we need not use $_GET because CI rewrites slash URLs into function parameters

		if($this->account->verify($user_id,$token)){
			header("Location:/login");
		}else{
			echo "Token mismatched!";
		}
	}
	private function get_nav_items($item)
	{
		$data['index']="";
		$data['settings']="";
		$data['infographics']="";
		$data[$item]=" class='active' ";
		$data['role_url']="admin";
		return $data;
	}
}
