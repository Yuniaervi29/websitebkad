<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Struktur_org extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->library('Admin');
		$this->load->model('master_model');
		$this->load->model('user_model');
		$this->load->model('struktur_model');

        if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
	}

	function index()
	{   
        $post = $this->struktur_model->get_struktur();
        $output['POST']=$post['result'];
		$output['PAGE_TITLE'] = 'STRUKTUR';
		$this->admin->view('admin/struktur', $output);
	}
	
	


	function edit(){
		$id = $this->uri->segment(4);
		if (!isset($_POST['nama']))
		{
			$post = $this->struktur_model->get_struktur_by_id($id);
			$output['EDIT'] = array(
                "status" => "edit",
                "id"     => $id,
                "nama"   => $post->nama,
                "nip"    => $post->nip,
                "gol"    => $post->gol,
                "jab_s"  => $post->jab_s,
                "bid"    => $post->bid,
                "esel"   => $post->esel,
                "jk"     => $post->jk,
                "pend"   => $post->pend,
                "foto"   => $post->foto,
                "ttl"   => $post->ttl,
                "karir"   => $post->karir,
                "penghargaan"   => $post->penghargaan,
                "karir"   => $post->karir,
                "LHKPN"   => $post->LHKPN,
                
            ); 
			$this->admin->view('admin/struktur_form', $output);
		}
		else
		{
			if(isset($_POST["foto"])){
				$img = $_POST['foto'];
     
				list($type, $img) = explode(';', $img);
				list(, $img)      = explode(',', $img);
			
				$img = base64_decode($img);
				$imageName = 'team_'.date('ymd_his_').rand(1111,9999).'.png';
				file_put_contents('assets/img/team/'.$imageName, $img);
				
			}
			
			$upload_path = 'uploads/LHKPN/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}

			if( $remove_file = $this->input->post('remove_image') ){
				$data['LHKPN']	= '';
				if( file_exists($upload_path . $remove_file) ){
					@unlink($upload_path . $remove_file);
				}
			}

			if( isset($_FILES['LHKPN']['tmp_name']) AND is_uploaded_file($_FILES['LHKPN']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['LHKPN']['name']));
				$filename				= 'LHKPN_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['LHKPN']		= $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['LHKPN']['tmp_name'], $destination);
			}
			
			
			

			$data['foto']			= $imageName;
			
			$data['nama']	= $this->input->post('nama');
			$data['nip']	= $this->input->post('nip');
			$data['gol']	= $this->input->post('gol');
			$data['esel']	= $this->input->post('esel');
			$data['pend']	= $this->input->post('pend');
			$data['ttl']	= $this->input->post('ttl');
			$data['karir']	= $this->input->post('karir');
			$data['penghargaan']= $this->input->post('penghargaan');
     
			$asg = $this->struktur_model->update_struktur($data,$id);
           if ($asg) {
			   echo "1";
		   }else{
			   echo "2";
		   }

		}
	}

	function delete()
	{
		$id = $this->input->post('album_id');
        $data=$this->struktur_model->delete_struktur($id);        
		echo json_encode($data);
	}

	
}
