<?php 

class Download extends CI_Controller {

	function __construct()
	{
		parent::__construct();

        $this->load->library('Admin');
		$this->load->model('master_model');
		$this->load->model('user_model');
		$this->load->model('download_model');
        $this->load->model('download_category_model');

        if($this->session->userdata('status')!='login'){
			redirect(base_url("admin/login"));
		}
	}

	function index()
	{
        $post = $this->download_model->get_download();
        $output['POST'] = $post['result'];
		$output['PAGE_TITLE'] = 'DOWNLOAD';
		$this->admin->view('admin/download', $output);
	}

	function json()
	{
		$download = $this->download_model->get_download();
		$tmp = array();
		$tmp['total'] = $download['num_rows'];
		$tmp['rows'] = $download['result'];
		
		echo json_encode($tmp);
	}

	function view_download(){
		$this->load->view('view_download');
	}

	function add()
	{
        if (!isset($_POST['category_id']))
		{
            $output['EDIT'] = array(
                "status" => "add",
                "download_id" => "",
                "category_id" => "",
                "category" => "",
                "title" => "",
                "file" => "",
                "date" => "",
                "publish" => ""
            );            
            /*$output['CATEGORY'] = $this->download_category_model->get_download_category_all();*/
            $output['CATEGORY'] = $this->download_category_model->get_category_all();
		    $this->admin->view('admin/download_form', $output);
		}
		else
		{   
		    
			$upload_path = 'uploads/file/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}

			if( isset($_FILES['file']['tmp_name']) AND is_uploaded_file($_FILES['file']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['file']['name']));
				$filename				= 'download_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['file']			= $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['file']['tmp_name'], $destination);
			}

			$uid = $this->session->userdata('id');

			$data['download_id']	= '';
			$data['category_id']	= htmlentities($this->input->post('category_id'));
			$data['title']			= htmlentities($this->input->post('post_title'));
			$data['date']			= $this->input->post('post_date');
			$data['status']			= $this->input->post('posting');
			$data['jenis']			= $this->input->post('jenis');
			$data['uid']			= $uid;
			$data['tahun']			= 2021;
			$this->download_model->insert_download($data);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}

	function edit()
	{
		$id = $this->uri->segment(4);
        if (!isset($_POST['post_title']))
		{
            $post = $this->download_model->get_download_by_id($id);
            $output['EDIT'] = array(
                "status" => "edit",
				"category_id" => $post->category_id,
				"download_id" => $id,
                "title" => $post->title,
                "file" => $post->file,
                "date" => $post->date,
                "status" => $post->status,
                "jenis" => $post->jenis
                
            );            
             $output['CATEGORY'] = $this->download_category_model->get_download_category_all();
		    $this->admin->view('admin/download_form', $output);
		}
		else
		{
			$upload_path = 'uploads/file/';
			if(substr(sprintf('%o', fileperms($upload_path)), -4) != '0777'){
				chmod($upload_path, 0777);
			}

			if( $remove_file = $this->input->post('remove_image') ){
				$data['file'] = '';
				if( file_exists($upload_path . $remove_file) ){
					@unlink($upload_path . $remove_file);
				}
			}

			if( isset($_FILES['file']['tmp_name']) AND is_uploaded_file($_FILES['file']['tmp_name']) ){
				$filename				= $this->security->sanitize_filename(strtolower($_FILES['file']['name']));
				$filename				= 'download_'.date('ymd_his_').rand(1111,9999).'_'.$filename;
				$data['file']			= $filename;
				$destination			= $upload_path . $filename;
				move_uploaded_file($_FILES['file']['tmp_name'], $destination);
			}

			$CU = $this->user_model->current_user();
			$uid = isset($CU->uid) ? $CU->uid : '';

		    $data['category_id']	= htmlentities($this->input->post('category_id'));
			$data['title']			= htmlentities($this->input->post('post_title'));
			$data['date']			= $this->input->post('post_date');
			$data['status']			= $this->input->post('posting');
			$data['jenis']			= $this->input->post('jenis');
			$data['uid']			= $uid;

			$this->download_model->update_download($data,$id);

			$this->session->set_userdata('message','Data telah tersimpan.');
			$this->session->set_userdata('message_type','success');

			$this->index();
		}
	}

	function delete()
	{
		$id = $this->input->post('download_id');
        $data=$this->download_model->delete_download($id);        
		echo json_encode($data);
	}

	
}