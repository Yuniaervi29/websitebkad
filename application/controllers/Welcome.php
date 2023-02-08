<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('Template');
		$this->load->model('album_model');
		$this->load->model('gallery_model');
		$this->load->model('post_model');
		$this->load->model('banner_model');
		$this->load->model('video_model');
		$this->load->model('agenda_model');

		$this->load->helper('text');
	}
	public function index()
	{
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%KEPALA BADAN%'")->row();
		$output['KABAN'] = $sql1;
		
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%SEKRETARIS%'")->row();
		$output['SEKRETARIS'] = $sql1;
		
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubag Program%'")->row();
		$output['KASUBAG_P'] = $sql1;
		
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubag Umum, Kepegawaian dan Hukum%'")->row();
		$output['KASUBAG_U'] = $sql1;
		
		$sql1 = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kasubag Keuangan%'")->row();
		$output['KASUBAG_K'] = $sql1;
		
		$output['kabid_ang'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kabid Perencanaan Anggaran%'")->row();

		$output['kabid_perbend'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kabid Perbendaharaan%'")->row();
		
		$output['kabid_akt'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kabid Akuntansi dan Pelaporan Keuangan%'")->row();
		
		$output['kabid_brg'] = $this->db->query("SELECT * FROM struktur_org WHERE jab_s like '%Kabid Pengelolaan Barang Milik Daerah%'")->row();
		

		$post = $this->post_model->get_public_home();
		$output['POSTS'] = $post['result'];

		$this->load->library('pagination');

		$config['base_url'] = site_url('welcome/index');
		$config['uri_segment'] = 3;
		$config['total_rows'] = $post['num_rows'];
		$config['per_page'] = 4;
		$config['use_page_numbers'] = FALSE;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['display_pages'] = FALSE;
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;

		$this->pagination->initialize($config);
		$output['pagination'] = $this->pagination->create_links();
		$output['komentar']= $this->master_model->get_komentar();
		$output['ALBUM'] = $this->album_model->get_album_all();
		$output['VIDEO'] = $this->video_model->get_video_all();
		$output['AGENDA'] = $this->agenda_model->get_agenda_limit();

		$this->template->view('index',$output);
	} 

	public function berita(){
		$this->template->view('berita');
	}

	
}