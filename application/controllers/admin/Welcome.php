<?php
class Welcome extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->library('Admin');
		$this->load->model('album_model');
		$this->load->model('gallery_model');
		$this->load->model('post_model');
		$this->load->model('banner_model');
		$this->load->model('video_model');
		$this->load->model('agenda_model');

		if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
    }
    
    public function index(){
		$user = $this->db->query("SELECT * FROM user");
		$data['USER'] = $user->num_rows();
		
		$user = $this->db->query("SELECT sum(lk+pr) as total_peg FROM grafik_pend;");
		$data['PEG'] = $user->row('total_peg');
		
		$user = $this->db->query("SELECT * FROM posts WHERE post_type='article'");
		$data['POST'] = $user->num_rows();
		
		$user = $this->db->query("SELECT * FROM download WHERE STATUS='publish';");
		$data['DOC'] = $user->num_rows();
		
		$user = $this->db->query("SELECT * FROM tb_agenda");
		$data['AGENDA'] = $user->num_rows();
		
		$user = $this->db->query("SELECT * FROM tb_video");
		$data['VID'] = $user->num_rows();
		
		$user = $this->db->query("SELECT * FROM gallery");
		$data['IMG'] = $user->num_rows();
		
		$user = $this->db->query("SELECT * FROM links");
		$data['LINKS'] = $user->num_rows();

        $this->admin->view('admin/home',$data);
    }    
}
