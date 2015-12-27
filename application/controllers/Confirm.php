<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*	Here's the Install controller which is responsible for
*	installation.
*
*	@author Nishchal Gautam <gautam.nishchal@gmail.com>
*	@access public
*	@category installation
*	@copyright (c) 2015, Nishchal Gautam
*	@since 0.1
*	@version 0.1
*
*/

class Confirm extends CI_Controller {

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

	public function index()
	{

	}
	public function action($phone,$pin,$user)
	{
		if(isset($_GET['event'])){
			if($_GET['event']=='GotDTMF'){
				$data=$_GET['data'];
				if($data==0){
					//do nothing
				}elseif($data==1){
					//update that thing.
					$this->load->model("confirmation");
					$this->confirmation->confirm($phone,$pin,$user);
				}
			}else{
				echo $_GET['event'];
			}
		}else{
		}
	}
}