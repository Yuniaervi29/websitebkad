<?php defined('BASEPATH') or exit('No direct script access allowed');

class C_Upload extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_Upload', '', TRUE);
        $this->load->model('m_Master', '', TRUE);
        $this->load->model('m_Document', 'ms_dokumen', TRUE);
        $this->load->library('Template');

        if ($this->session->userdata('status') != 'login') {
            redirect(base_url("login"));
        }
    }

    function index()
    {

        // $data['page'] = 'JABATAN';
        $this->template->view('input/v_upload');
    }
    function load_data()
    {
        $query = $this->db->select(array('id_dokumen', 'nama','detail'))->from('ms_jenis_dokumen');
        $column_order =  array(null, 'id_dokumen');
        $column_search = array('nama');
        $column_search = array('detail');
        $order = array('id_dokumen' => 'asc');

        $list =  $this->m_Master->load_data($query, $column_order, $column_search, $order);
        $data = array();
        $no = $_POST['start'];
        foreach ($list['result'] as $resulte) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $resulte->nama;
            $row[] = $resulte->detail;
            $row[] = '
				<a class="btn btn-warning btn-inline btn-sm" style="color:white;" title="List Dokumen" onclick="edit(\'' . $resulte->id_dokumen . '\')"><i class="fa fa-eye"></i></a>
				
			';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_Master->count_all($query),
            "recordsFiltered" => $list['count_filtered'],
            "data" => $data
        );
        echo json_encode($output);
    }

    

    function hapus_document()
    {
		$xgid     = $this->input->post('gid');
        $gid    = "id='$xgid' ";

        $gtabel = "ms_dokumen";
        

		$query_get_file = $this->db->get_where('ms_dokumen', array('id' => $xgid));
        foreach ($query_get_file->result() as $record) {
            $file = './file/' . $record->nm_file;
            if (file_exists($file)) {
                unlink($file);
            }

            
			$del = $this->m_Master->hapus_data($gtabel, $gid);
            if ($del == TRUE) {
                echo '1';
            } else {
                echo '0';
            }
        }
    }
	// public function hapus_dokumen()
    // {
    //     $skolah  = $this->session->userdata('kd_sekolah');
    //     $id = $this->input->post('id');
    //     $no_bukti = $this->input->post('nobukti');
    //     $gid = "no_bukti='$no_bukti' and id='$id' ";

    //     $query_get_file = $this->db->get_where('file_kelengkapan', array('id' => $id));
    //     foreach ($query_get_file->result() as $record) {
    //         $file = './dokumen/kelengkapan/_' . $skolah . '/' . $record->file;
    //         if (file_exists($file)) {
    //             unlink($file);
    //         }

    //         $del = $this->master->hapus_data('file_kelengkapan', $gid);
    //         if ($del == TRUE) {
    //             echo '1';
    //         } else {
    //             echo '0';
    //         }
    //     }
    // }
    function simpan_data()
    {
		$this->load->model('m_upload');

	if ($this->input->method() === 'post') {
		$config['upload_path']          = FCPATH.'/file/';
		$config['allowed_types']        = 'pdf';
		$config['overwrite']            = true;
		$config['max_size']             = 10024; // 10MB
		// $config['file_name']           = 'Doc_'.date('Y-m-d H-i-s');
		// $config['encrypt_name'] 		= TRUE;


		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('nm_file')) {
			echo $this->upload->display_errors();
		} else {
			$uploaded_data = $this->upload->data();

			$new_data = [
				$gtabel = $this->input->post('gtabel'),
				$gid     = $this->input->post('gid'),
				$gnm 	= $uploaded_data['file_name'],
				$gthn	 = $this->input->post('tahun'),
				$ket	 = $this->input->post('ket'),
				$gtgl	 = date("Y-m-d"),
				
				
				$gfield = "(nm_file,kategori,tahun,tgl_upload,ket)",
				$gisi    = "('$gnm', '$gid', '$gthn', '$gtgl', '$ket')",

				$this->m_Master->simpan_data($gtabel, $gfield, $gisi)
				
			];
	
			
		}
	}
        

		
    }
    function edit_data()
    {
        $xgid     = $this->input->post('gid');
        $gid    = "id='$xgid' ";

        $gnm     = $this->input->post('gnm');
        $gupdate = "nm_file='$gnm' ";

        $gtabel = $this->input->post('gtabel');
        $this->m_Master->update_data($gtabel, $gupdate, $gid);
    }

    function ambil_urut()
    {
        $this->ms_jenis_dokumen->ambil_urut();
    }

	function loadJenis()
    {
        $esl = $this->input->get('esl');
        $cprg = $this->input->post('cprg');

        $sql = "SELECT a.id_dokumen,a.nama FROM  ms_jenis_dokumen a  order by a.id_dokumen";
        $query1 = $this->db->query($sql);
        $test = $query1->num_rows();
        $ii = 0;
        foreach ($query1->result_array() as $resulte) {
            $result[] = array(
                'id' => $ii,
                'iddok' => $resulte['id_dokumen'],
                'kode' => $resulte['id_dokumen'],
                'nama' => $resulte['nama'],
                "label" => $resulte['id_dokumen'] . "||" . $resulte['nama'],
                "value" => $resulte['id_dokumen']
            );
            $ii++;
        }

        echo json_encode($result);
        $query1->free_result();
    }
	

	function ambil_data()
    {
        $gid  = $this->input->post('gid');
        
		$query = $this->db->select(array(
            'id', ' nm_file', 'kategori', 'tahun', 'tgl_upload', 'ket'
        ))->from('ms_dokumen')->where('kategori', $gid);

        // $query = $this->db->query($sql);

        $data = array();
        $no = 1;
        foreach ($query->get()->result() as $resulte) {

            $data[] = array(
                'no' => $no++,
                'gkd' => $resulte->id,
                'nm_file' => $resulte->nm_file,
                'kategori' => $resulte->kategori,
                'tahun' => $resulte->tahun,
                'tgl_upload' => $resulte->tgl_upload,
                'ket' => $resulte->ket,

            );
        }


        $output = array(

            "data" => $data
        );
        echo json_encode($output);
    }
	
	function cload_detail()
    {
        $xgid = $this->input->post('gkd');
        $pnj = strlen($xgid);


        $query = $this->db->select(array(
            ' a.id_dokumen', 'a.nama', 'id', 'nm_file', 'kategori', 'tahun', 'tgl_upload', 'ket'
        ))->from('ms_jenis_dokumen a')->join('ms_dokumen b', 'a.id_dokumen=b.kategori', 'left')->where('id_dokumen', $xgid);

        // $query = $this->db->query($sql);

        $data = array();
        $no = 1;
        foreach ($query->get()->result() as $resulte) {

            $data[] = array(
                'no' => $no++,
                'xgid' => $resulte->id,
                
            );
        }

        $output = array(

            "data" => $data
        );
        echo json_encode($output);
    }
}
