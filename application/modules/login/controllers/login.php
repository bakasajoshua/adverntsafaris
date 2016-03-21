<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class login extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	function index()
	{
		
		$this->load->view('login_view');
	}

	function authentication()
	{
		$authenticate = $this->login_model->authenticate();

		if ($authenticate) {
			$data = array(
						'user_id' => $authenticate['login_id'],
						'is_logged_in' => TRUE
					);
			$this->session->set_userdata($data);
			redirect(base_url() . 'home');
		} else {
			$this->session->set_flashdata('Warning', 'Wrong username or password!');
			redirect(base_url() . 'login');
		}
	}
}
?>