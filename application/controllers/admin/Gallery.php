<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->library('Admin');
		$this->load->model('master_model');
		$this->load->model('user_model');
		$this->load->model('album_model');
		$this->load->model('gallery_model');

        if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
	}

	function index()
	{   
        $post = $this->gallery_model->get_gallery();
        $output['POST']=$post['result'];;
		$output['PAGE_TITLE'] = 'Gallery';
		$this->admin->view('admin/gallery', $output);
	}


	function add()
	{
		if (!isset($_POST['title']))
		{
            $output['EDIT'] = array(
                "status" => "add",
                "album_id" => "",
                "gallery_id" => "",
                "title" => "",
                "image" => "",
            ); 
			$output['album_list'] = $this->album_model->get_album_select_admin();
			$this->admin->view('admin/gallery_form', $output);
		}
		else
		{
			$upload_path = 'uploads/gallery/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}

			if( isset($_FILES['image']['tmp_name']) AND is_uploaded_file($_FILES['image']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['image']['name']));
				$filename				= 'gallery_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['image']			= $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['image']['tmp_name'], $destination);
			}

			$data['gallery_id']		= '';
			$data['album_id']		= $this->input->post('album_id');
			$data['title']			= $this->input->post('title');

			$this->gallery_model->insert_gallery($data);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}

	function edit()
	{
		$id = $this->uri->segment(4);
		if (!isset($_POST['title']))
		{
            $post = $this->gallery_model->get_gallery_by_id($id);
            $output['EDIT'] = array(
                "status" => "edit",
                "album_id" => $post->album_id,
                "gallery_id" => $id,
                "title" => $post->title,
                "image" => $post->image,
            ); 
			$output['album_list'] = $this->album_model->get_album_select_admin();
			$this->admin->view('admin/gallery_form', $output);
		}
		else
		{
			$upload_path = 'uploads/gallery/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}

			if( $remove_file = $this->input->post('remove_image') ){
				$data['image']	= '';
				if( file_exists($upload_path . $remove_file) ){
					@unlink($upload_path . $remove_file);
				}
			}

			if( isset($_FILES['image']['tmp_name']) AND is_uploaded_file($_FILES['image']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['image']['name']));
				$filename				= 'gallery_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['image']			= $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['image']['tmp_name'], $destination);
			}

			$data['album_id']		= $this->input->post('album_id');
			$data['title']			= $this->input->post('title');

			$this->gallery_model->update_gallery($data,$id);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}


    function delete()
	{
		$id = $this->input->post('gallery_id');
        $data=$this->gallery_model->delete_gallery($id);        
		echo json_encode($data);
	}


}