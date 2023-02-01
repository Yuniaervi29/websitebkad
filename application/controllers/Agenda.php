<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
	function __construct()
	{
		parent::__construct();
        $this->load->library('Template');
        $this->load->model('agenda_model');
     
	}
	public function index()
	{
		
		$post = $this->agenda_model->get_agenda_all();
		$output['AGENDA'] = $post['result'];
	
        $config['base_url'] = site_url('article/index');
		$config['uri_segment'] = 3;
		$config['total_rows'] = $post['num_rows'];
		$config['per_page'] = 3;
        
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;
        $config['full_tag_open'] = '<ul class="pagination-list">';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="page-numbers">&nbsp;';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '&nbsp;<li class="page-numbers current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '&nbsp;<li  class="next">';
        $config['next_tag_close'] = '</li>';
        $config['full_tag_close'] = '</ul>';

		$this->pagination->initialize($config);
		$output['pagination'] = $this->pagination->create_links();
        
        $output['TITLE'] = 'INFORMASI';
		$output['TITLE_2'] = isset($post->title) ? $post->title : '';

		$this->template->view('agenda/v_agenda',$output);
    }

    public function detail_agenda(){
        $id = $this->input->get('info',true);
        $id = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $id);
        $post = $this->agenda_model->get_agenda_by_id($id);
		$output['AGENDA'] = $post;
        $output['NEW'] = $this->db->query("SELECT * FROM tb_agenda WHERE agenda_id<>'$id' ORDER BY tgl_agenda DESC limit 5");

        $output['TITLE'] = 'INFORMASI';
		$output['TITLE_2'] = isset($post->title) ? $post->title : '';
        $this->template->view('agenda/detail_agenda',$output);
    }


}