<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	dashboard for sudo user.
*
*	@author Nishchal Gautam <gautam.nishchal@gmail.com>
*	@access public
*	@category sudo
*	@copyright (c) 2015, Nishchal Gautam
*	@since 0.1
*	@version 0.1
*
*/

class Sudo extends CI_Controller {

	/**
	*	Here's the index of Install controller populates database and displays
	*	form to create a superadmin
	*
	*	@author Nishchal Gautam <gautam.nishchal@gmail.com>
	*	@access public
	*	@category installation
	*	@copyright (c) 2015, Nishchal Gautam
	*	@since 0.1
	*	@version 0.1
	*
	*/
	private function get_nav_items($item)
	{
		$data['index']="";
		$data['settings']="";
		$data['infographics']="";
		$data[$item]=" class='active' ";
		$data['role_url']="sudo";
		return $data;
	}
	public function index()
	{
		$this->load->model('user');
		if($this->user->check_permission(SUPER_ADMIN)){
			$data=$this->get_nav_items('index');
			$data=array_merge($this->user->get_current_user_info(),$data);
			$this->load->library('parser');
			$data['Title']="Dashboard | Faculty";
			$this->parser->parse('templates/header',$data);
			$data['side_navbar']=$this->parser->parse('templates/side_navbar',$data,TRUE);
			$data['page_footer']=$this->parser->parse('templates/page_footer',[],TRUE);
			$data['top_navbar']=$this->parser->parse('templates/top_navbar',$data,TRUE);
			$data['sidebar_panel']=$this->parser->parse('templates/sidebar_panel',$data,TRUE);
			$this->parser->parse('sudo_dashboard',$data);
			$this->parser->parse('templates/footer',$data);
		}else{
			header("Location:/login?error=login_required&redirect_url=".$_SERVER['REQUEST_URI']);
		}
	}

	public function settings()
	{
		$this->load->model('user');
		if($this->user->check_permission(SUPER_ADMIN)){

		}else{
			header("Location:/login?error=login_required&redirect_url=".$_SERVER['REQUEST_URI']);
		}
	}
}
