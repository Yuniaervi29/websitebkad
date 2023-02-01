<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Album extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->library('Admin');
		$this->load->model('master_model');
		$this->load->model('user_model');
		$this->load->model('album_model');

        if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
	}

	function index()
	{   
        $post = $this->album_model->get_album();
        $output['POST']=$post['result'];;
		$output['PAGE_TITLE'] = 'ALBUM';
		$this->admin->view('admin/album', $output);
	}



	function add()
	{
		if (!isset($_POST['album_title']))
		{
			$output['EDIT'] = array(
                "status" => "add",
                "album_id" => "",
                "album_title" => "",
                "album_image" => "",
            ); 
			$this->admin->view('admin/album_form', $output);
		}
		else
		{
			$upload_path = 'uploads/album/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}
			
			if( isset($_FILES['album_image']['tmp_name']) AND is_uploaded_file($_FILES['album_image']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['album_image']['name']));
				$filename				= 'album_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['album_image']	= $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['album_image']['tmp_name'], $destination);
			}

			$data['album_id']		= '';
			$data['album_title']	= htmlentities($this->input->post('album_title',true));
			
			$this->album_model->insert_album($data);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}

	function edit()
	{
		$id = $this->uri->segment(4);
		if (!isset($_POST['album_title']))
		{
			$post = $this->album_model->get_album_by_id($id);
			$output['EDIT'] = array(
                "status" => "edit",
                "album_id" => $id,
                "album_title" => $post->album_title,
                "album_image" => $post->album_image,
            ); 
			$this->admin->view('admin/album_form', $output);
		}
		else
		{
			$upload_path = 'uploads/album/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}

			if( $remove_file = $this->input->post('remove_image') ){
				$data['album_image'] = '';
				if( file_exists($upload_path . $remove_file) ){
					@unlink($upload_path . $remove_file);
				}
			}

			if( isset($_FILES['album_image']['tmp_name']) AND is_uploaded_file($_FILES['album_image']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['album_image']['name']));
				$filename				= 'album_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['album_image']	= $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['album_image']['tmp_name'], $destination);
			}

			$data['album_title']	= htmlentities($this->input->post('album_title',true));

			$this->album_model->update_album($data,$id);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}

	function delete()
	{
		$id = $this->input->post('album_id');
        $data=$this->album_model->delete_album($id);        
		echo json_encode($data);
	}

	
}