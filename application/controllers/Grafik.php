<?php
class Grafik extends CI_Controller
{
    public function __construct() {
        parent::__construct();
 
         $this->load->model('grafik_model');
         $this->load->model('post_model');
 
         $this->load->library('Template');
     } 

     public function index()
     {
     
        //  $query = $this->db->query("SELECT SUM(lk) as count FROM grafik_pend 
        //      GROUP BY pend order by no desc")->result(); 
        //  $data_lk=array();
        //  foreach ($query as $k) {
        //      $data_lk[]=intval($k->count);
        //  }
        //  $data['lk'] = json_encode($data_lk);
    
        //  $query = $this->db->query("SELECT SUM(pr) as count FROM grafik_pend 
        //      GROUP BY pend order by no desc ")->result(); 
        //  $data_pr=array();
        //  foreach ($query as $k) {
        //      $data_pr[]=intval($k->count);
        //  }
        //  $data['pr'] = json_encode($data_pr);
 
        //  $query = $this->db->query("SELECT pend FROM grafik_pend order by no desc");
        //  $data_pend = array();
        //  foreach ($query->result() as $k) {
        //      $data_pend[]=$k->pend;
        //  }
        //  $data['pend']=json_encode($data_pend);
            
        //     // golongan
 
        //  $query = $this->db->query("SELECT SUM(lk) as count FROM grafik_gol group by gol order by no asc");
        //  $data_gol_lk = array();
        //  foreach ($query->result() as $k) {
        //      $data_gol_lk[]=intval($k->count);
        //  }
        //  $data['gol_lk']=json_encode($data_gol_lk); 
 
        //  $query = $this->db->query("SELECT SUM(pr) as count FROM grafik_gol group by gol order by no asc");
        //  $data_gol_pr = array();
        //  foreach ($query->result() as $k) {
        //      $data_gol_pr[]=intval($k->count);
        //  }
        //  $data['gol_pr']=json_encode($data_gol_pr); 
 
        //  $query = $this->db->query("SELECT gol FROM grafik_gol group by gol order by no asc");
        //  $data_gol = array();
        //  foreach ($query->result() as $k) {
        //      $data_gol[]=$k->gol;
        //  }
        //  $data['golongan']=json_encode($data_gol);
 
        //  // unit kerja
 
        //  $query = $this->db->query("SELECT SUM(lk) as count FROM grafik_unit_kerja group by unit order by no asc");
        //  $data_unit_lk = array();
        //  foreach ($query->result() as $k) {
        //      $data_unit_lk[]=intval($k->count);
        //  }
        //  $data['unit_lk']=json_encode($data_unit_lk); 
 
        //  $query = $this->db->query("SELECT SUM(pr) as count FROM grafik_unit_kerja group by unit order by no asc");
        //  $data_unit_pr = array();
        //  foreach ($query->result() as $k) {
        //      $data_unit_pr[]=intval($k->count);
        //  }
        //  $data['unit_pr']=json_encode($data_unit_pr); 
 
        //  $query = $this->db->query("SELECT unit FROM grafik_unit_kerja group by unit order by no asc");
        //  $data_unit = array();
        //  foreach ($query->result() as $k) {
        //      $data_unit[]=$k->unit;
        //  }
        //  $data['unit']=json_encode($data_unit); 
 
        //  // Jabatan
 
        //  $query = $this->db->query("SELECT SUM(lk) as count FROM grafik_jab group by jab order by no asc");
        //  $data_jab_lk = array();
        //  foreach ($query->result() as $k) {
        //      $data_jab_lk[]=intval($k->count);
        //  }
        //  $data['jab_lk']=json_encode($data_jab_lk); 
 
        //  $query = $this->db->query("SELECT SUM(pr) as count FROM grafik_jab group by jab order by no asc");
        //  $data_jab_pr = array();
        //  foreach ($query->result() as $k) {
        //      $data_jab_pr[]=intval($k->count);
        //  }
        //  $data['jab_pr']=json_encode($data_jab_pr); 
 
        //  $query = $this->db->query("SELECT jab FROM grafik_jab group by jab order by no asc");
        //  $data_jab = array();
        //  foreach ($query->result() as $k) {
        //      $data_jab[]=$k->jab;
        //  }
        //  $data['jab']=json_encode($data_jab);
 
        //  $post = $this->post_model->get_single_post_by_type('Grafik');
        //  $output['TITLE_1'] = 'PROFIL BPKD';
        //  $output['TITLE_2'] = isset($post->post_title) ? $post->post_title : '';
        //  $output['IMAGE'] = isset($post->post_image) ? $post->post_image : '';
        //  $output['CONTENT'] = isset($post->post_content) ? $post->post_content : '';
 
        //  $this->template->view('v_grafik',$data);
 
 
     }

    
}
