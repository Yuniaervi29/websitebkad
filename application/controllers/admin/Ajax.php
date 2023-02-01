<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('master_model');
	}

	/* General */

	function post_name()
	{
		$title = $this->input->post('post_title');
		echo url_title(strtolower($title));
	}
}