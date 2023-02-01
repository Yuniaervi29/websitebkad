<?php
class Kinerja extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
        $this->load->library('Template');
        $this->load->model('post_model');
        $this->load->model('download_model');
		$this->load->model('download_category_model');
     
	}
	public function index(){
        $post = $this->post_model->get_single_post_by_type('kinerja');
		$output['TITLE_1'] = 'KINERJA BKAD';
		$output['TITLE_2'] = isset($post->post_title) ? $post->post_title : '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$this->template->view('kinerja',$output);

    }
}