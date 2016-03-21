<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class signup extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('signup_model');
	}

	function index()
	{
		$this->load->view('signup_view');
	}

	function registration()
	{
		$reg = $this->signup_model->register();
		if ($reg) {
			print('Sign Up successful');
		}
	}
}
?>