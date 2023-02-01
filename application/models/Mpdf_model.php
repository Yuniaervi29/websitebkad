<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mpdf_model extends CI_Model {

	
	function _mpdf($judul='',$isi='',$lMargin='',$rMargin='',$font=0,$spasi='',$orientasi='') {
        
        $this->load->library('mpdf');
        
        
        
        $this->mpdf->defaultheaderfontsize = 6;	/* in pts */
        $this->mpdf->defaultheaderfontstyle = BI;	/* blank, B, I, or BI */
        $this->mpdf->defaultheaderline = 1; 	/* 1 to include line below header/above footer */

        $this->mpdf->defaultfooterfontsize = 6;	/* in pts */
        $this->mpdf->defaultfooterfontstyle = B;	/* blank, B, I, or BI */
        $this->mpdf->defaultfooterline = 0; 
        $this->mpdf->SetLeftMargin = $lMargin;
        $this->mpdf->SetRightMargin = $rMargin;
        //$this->mpdf->SetHeader('SIMAKDA||');
		$jam = date("H:i:s");
		$y = date('Y');
        $this->mpdf->SetFooter('.::printed by bkad.sulselprov.go.id::. | Page {PAGENO} of {nb}');
        // on @ {DATE '.date('j-m-Y H:i:s').'} 
        $hari_ini = date("Y-m-d H:i:s");
        //$this->mpdf->SetFooter('KRS Online Prodi Pendidikan Teknologi Informasi - (STKIP) Muhammadiyah Sorong - '.$hari_ini);
        
        $this->mpdf->AddPage($orientasi,'','','','',$lMargin,$rMargin);
        
        // if (!empty($judul)) $this->mpdf->writeHTML($judul);
        $this->mpdf->writeHTML($isi);         
        $this->mpdf->Output($judul,'I');
               
    }
    
}