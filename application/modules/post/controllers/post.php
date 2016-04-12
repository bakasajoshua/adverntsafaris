<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class post extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		$this->is_logged_in();
	}

	public function index()
	{
		$data['content_view'] = "post/post_view";

		$data['title']="Posts";

		$data = array_merge($data,$this->load_libraries(array('template','menu','footer','fonts','quickview')));
		// echo "<pre>";print_r($data);die();
		$this->template($data);
	}

}
