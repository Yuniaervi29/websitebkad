<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebService extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('WebService_model', 'servis');
	}

	public function index()
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Credentials: true');
		header('Access-Control-Expose-Headers: *');
		header('Content-Type: application/json');

		$data = $this->servis->loadData();
		echo json_encode($data);
	}
	
	public function get_detail_id(){
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Credentials: true');
		header('Access-Control-Expose-Headers: *');
		header('Content-Type: application/json');
        $id_ipkd = $this->input->get("id_ipkd");
        $category_id = $this->db->query("select category_id from download_category_mapping where id_mapp='$id_ipkd'")->row("category_id");
        $query = $this->db->query("
            select * From download where category_id='$category_id';
        ");
        foreach ($query->result() as $dwn) {
            $data[] = array(
                'id_ipkd' => $id_ipkd,
                'title' => $dwn->title,
                'file' => base_url('uploads/file/') . $dwn->file,
                'date' => $dwn->date,
                'tahun' => $dwn->tahun
            );
        }
        echo json_encode ($data);
    }
	public function get_detail(){
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Credentials: true');
		header('Access-Control-Expose-Headers: *');
		header('Content-Type: application/json');
        $category_id = $this->input->get("category_id");
        $query = $this->db->query("
            select * From download where category_id='$category_id';
        ");
        foreach ($query->result() as $dwn) {
            $data[] = array(
                'category_id' => $category_id,
                'download_id' => $dwn->download_id,
                'title' => $dwn->title,
                'file' => base_url('uploads/file/') . $dwn->file,
                'date' => $dwn->date,
                'tahun' => $dwn->tahun
            );
        }
        echo json_encode ($data);
    }
    
    function get_category(){
        header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Credentials: true');
		header('Access-Control-Expose-Headers: *');
		header('Content-Type: application/json');
        $id_ipkd = $this->input->get("id_ipkd");
        $category_id = $this->db->query("select category_id from download_category_mapping where id_mapp='$id_ipkd'")->row("category_id");
        $category = $this->db->query("select * from ms_category ")->row("category");
        
        $query = $this->db->query(" SELECT a.warna,a.urut,a.category_id,a.category,b.category AS detail
        	FROM ms_category a
        	LEFT JOIN download_category_mapping b ON a.category_id=b.category_id
        	
            where urut is not null and urut <>''
            order by a.urut asc;");
            foreach ($query->result() as $dwn) {
                $data[] = array(
                    'no_urut' => $dwn->urut,
                    'category_id' => $dwn->category_id,
                    'namacategory' => $dwn->category,
                    'detailcategory' => $dwn->detail,
                    'warna' => $dwn->warna
                    // 'title' => $dwn->title,
                    // 'date' => $dwn->date,
                    // 'file' => base_url('uploads/file/') . $dwn->file,
                    // 'tahun' => $dwn->tahun
                    // 'file' => $detailfile 
                );
                
            //     $qdown = $this->db->query("select * from download where category_id=$category_id order by category_id");
            //     foreach ($qdown->result() as $dwn) {
            //         $detailfile[] = array(
            //             'title' => $dwn->title,
            //             'file' => base_url('uploads/file/') . $dwn->file,
            //             'date' => $dwn->date,
            //             'tahun' => $dwn->tahun
            //         );
            //     }
             
            //   $data[] = array(
            //     'xx' => $datas,
            //     'file' => $detailfile
            // );
       
        }
        // return $data;
        echo json_encode ($data);
    }
}
