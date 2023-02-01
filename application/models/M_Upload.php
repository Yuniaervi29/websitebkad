<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_upload extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    function ambil_data($gid)
    {
        $gate = $this->db->query("select id_dokumen,nama,detail from ms_jenis_dokumen where id_dokumen='$gid' ");
        foreach ($gate->result_array() as $resulte) {
            $result = array(
                'id_dokumen' => $resulte['id_dokumen'],
                'nama' => $resulte['nama'],
                'detail' => $resulte['detail']
            );
        }
        echo json_encode($result);
        $gate->free_result();
    }

    function ambil_urut()
    {
        $gate = $this->db->query("SELECT LPAD(IFNULL(MAX(id_dokumen),0)+1,'2','0')AS urut FROM ms_jenis_dokumen ");
        foreach ($gate->result_array() as $resulte) {
            $result = array(
                'urut' => $resulte['urut']
            );
        }
        echo json_encode($result);
        $gate->free_result();
    }
}
