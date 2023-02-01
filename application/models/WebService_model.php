<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebService_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function loadData()
    {
        $data = array();
        $qcat = $this->db->get("download_category_mapping");
        $this->db->order_by('urut', 'DESC');
        foreach ($qcat->result() as $key) {

            $cattid = $key->category_id;
            $detailcatt = array();

            $qdetcatt = $this->db->query("SELECT * FROM ms_category a WHERE  FIND_IN_SET(a.category_id,'$cattid') ORDER BY urut ASC");
            foreach ($qdetcatt->result() as $dtc) {

                $idcatt = $dtc->category_id;
                $detailfile = array();



                $qdown = $this->db->query("select * from download where category_id=$idcatt order by category_id");
                foreach ($qdown->result() as $dwn) {
                    $detailfile[] = array(
                        'title' => $dwn->title,
                        'file' => base_url('uploads/file/') . $dwn->file,
                        'date' => $dwn->date,
                        'tahun' => $dwn->tahun
                    );
                }

                $detailcatt[] = array(
                    'id_category' => $dtc->category_id,
                    'nama_category' => $dtc->category,
                    'file' => $detailfile,
                );
            }



            $data[] = array(
                'urut' => $dtc->urut,
                
                'id_ipkd' => $key->id_mapp,
                'nama_ipkd' => $key->category,
                'detail_ipkd' => $detailcatt
            );
        }
        // return json_encode($data,JSON_PRETTY_PRINT);
        return $data;
    }
    
    function get_detail_id(){
        $id_ipkd = $this->input->get("id_ipkd");
        $category_id = $this->db->query("select category_id from download_category_mapping were id_mapp='$id_ipkd'")->row("category_id");
        $query = $this->db->query("
            select * From download where category_id='$category_id';
        ");
        foreach ($query->result() as $dwn) {
            $data[] = array(
                'title' => $dwn->title,
                'file' => base_url('uploads/file/') . $dwn->file,
                'date' => $dwn->date,
                'tahun' => $dwn->tahun
            );
        }
        echo json_encode($data);
    }
    
    
}
