<?php
class Gallery extends CI_Controller 
{
    function __construct()
	{
		parent::__construct();
		$this->load->model('album_model');
        $this->load->model('gallery_model');
        $this->load->library('Template');
	}

	function index()
	{
		$output['ALBUM'] = $this->album_model->get_album_all();
		$this->template->view('gallery/gallery',$output);
	}

	function detail()
	{
		$id = $this->uri->segment(3);
		
		$album = $this->album_model->get_album_by_id($id);
		$gallery = $this->gallery_model->get_gallery_by_album($id);
		
		$output['TITLE'] = isset($album->album_title) ? $album->album_title : '';
		$output['GALLERY'] = $gallery['result'];

		$this->template->view('gallery/detail_gallery',$output);
	}

}
