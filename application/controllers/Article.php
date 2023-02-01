<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	function __construct()
	{
		parent::__construct();
        $this->load->library('Template');
        $this->load->model('post_model');
     
	}
	public function index()
	{
		$this->load->model('post_model');
		$this->load->model('banner_model');

        
		$post = $this->post_model->get_public_home();
		$output['POSTS'] = $post['result'];
		$output['TAGS'] = $this->db->query("SELECT post_tag FROM posts where post_type='article' and post_tag<>'' group by post_tag limit 20");


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
        $output['komentar']= $this->master_model->get_komentar();
        

		$this->template->view('article/berita',$output);
    }
    
   

    public function read(){
        $id = $this->uri->segment(3);
        $id = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $id);
        $waktu   = time();
        $ip      = $_SERVER['REMOTE_ADDR']; 
        $tanggal = date("Ymd");
        $s = $this->db->query("SELECT * FROM statistik_article WHERE id_article='$id' ");
        if($s->num_rows() == 0){
            $this->db->query("INSERT INTO statistik_article(id_article,ip, tanggal, hits, online) VALUES('$id',' ','$tanggal','1','$waktu')");
        }else{
            $this->db->query("UPDATE statistik_article SET hits=hits+1, online='$waktu' WHERE id_article='$id' ");
        }

        $tot = $this->db->query("SELECT hits as tot FROM statistik_article where id_article='$id'");
        
        $output['TOTALVIEW']   = $tot->row('tot');
        $output['TAGS'] = $this->db->query("SELECT post_tag FROM posts where post_type='article' and post_tag<>'' group by post_tag limit 20");

		$post = $this->post_model->get_single_post_by_name($id);
		$output['TITLE_1'] = 'ARTIKEL KEGIATAN';
		$output['TITLE_2'] = isset($post->post_title) ? $post->post_title : '';
		$output['TANGGAL'] = tgl_indo($post->post_date) ? tgl_indo($post->post_date) : '';
		$output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
		$output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
		$output['TAG'] = isset($post->post_tag) ? $post->post_tag : '';
		$output['AUTHOR'] = isset($post->nama) ? $post->nama : '';
		$this->template->view('article/detail_berita',$output);
    }
    
    public function baca(){
        $id = $this->uri->segment(3);
        $id = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $id);
        $waktu   = time();
        $ip      = $_SERVER['REMOTE_ADDR']; 
        $tanggal = date("Ymd");
        $s = $this->db->query("SELECT * FROM statistik_article WHERE id_article='$id' ");
        if($s->num_rows() == 0){
            $this->db->query("INSERT INTO statistik_article(id_article,ip, tanggal, hits, online) VALUES('$id',' ','$tanggal','1','$waktu')");
        }else{
            $this->db->query("UPDATE statistik_article SET hits=hits+1, online='$waktu' WHERE id_article='$id' ");
        }

        

		$post = $this->post_model->get_post_profil($id);
		$output['IMAGE'] = isset($post->foto) ? $post->foto : '';
		$output['NAMA'] = $post->nama;
		$output['JAB'] = $post->jab;
		$output['PEND'] = $post->pend;
		$output['TTL'] = $post->ttl;
		$output['GOL'] = $post->gol;
		$output['ESEL'] = $post->esel;
		$output['KARIR'] = $post->karir;
		$output['PENG'] = $post->penghargaan;
		$this->template->view('article/profil',$output);
    }

    public function cari()
    {
        // $cari = $this->input->GET('cari', TRUE);
      
		$post = $this->post_model->get_public_home();
		$output['POSTS'] = $post['result'];
        $output['TAGS'] = $this->db->query("SELECT post_tag FROM posts where post_type='article' and post_tag<>'' group by post_tag limit 20");

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

        $this->template->view('article/berita',$output);
    }

    public function get_article_by_tag(){
        
        $post = $this->post_model->get_article_tag();
		$output['POSTS'] = $post['result'];
        $output['TAGS'] = $this->db->query("SELECT post_tag FROM posts where post_type='article' and post_tag<>'' group by post_tag");

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

        $this->template->view('article/berita',$output);
    }
	
}