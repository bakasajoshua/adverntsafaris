<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Template extends MY_Controller {

	// a function that calls the template view

	protected function load_view($data){
		$this->load->view('template_view',$data);

	}
	protected function admin_view($info){
		$this->load->view('admin_template_view',$info);

	}

}
