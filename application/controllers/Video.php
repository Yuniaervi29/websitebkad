<?php
class Video extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
        $this->load->library('Template');
        $this->load->model('post_model');
        $this->load->model('video_model');
     
	}

    public function index(){

        $post = $this->video_model->get_video();
		$output['POST'] = $post['result'];

        $config['base_url'] = site_url('video/index');
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

		$output['TITLE_1'] = 'VIDEO KEGIATAN BKAD';
		$this->template->view('video/v_video',$output);
    }

    
    public function video_detail(){
        $id = $this->uri->segment(3);
        $waktu   = time();

        $output['NEW'] = $this->db->query("SELECT * FROM tb_video order by date_created DESC");

		$post = $this->video_model->get_video_by_id($id);
		$output['TITLE_1'] = 'VIDEO KEGIATAN BKAD';
		$output['TITLE_2'] = isset($post->title) ? $post->title : '';
		$output['TANGGAL'] = nama_hari($post->date_created).', '.tgl_indo($post->date_created) ? nama_hari($post->date_created).', '.tgl_indo($post->date_created) : '';
		$output['IMAGE'] = isset($post->foto) ? $post->foto : '';
		$output['VIDEO'] = isset($post->video) ? $post->video : '';
		$output['CATEGORY'] = isset($post->category) ? $post->category : '';
		$output['KET'] = isset($post->ket) ? $post->ket : '';
		$this->template->view('video/v_detail_video',$output);
    }
}