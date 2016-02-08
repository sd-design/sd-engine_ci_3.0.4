<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Media extends CI_Controller {


public function __construct(){
 parent::__construct();
 			$this-> load-> helper('form');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');
}



	public function index()
	{
		
	}
	
		public function upload()
	{
	
			ob_start();
			$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	if ($check == true){
			
		
		$this->load->view('user/media/upload_view', $data);
		}
		else{redirect('user/panel');}	ob_end_flush(); 
	}	
	
			public function uploader()
	{
	

		$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	if ($check == true){


      		error_reporting(E_ALL | E_STRICT);
    		$this->load->library("UploadHandler");

		}
		
		else{redirect('user/panel');}
	
	
	
	//END uploader
		}



	public function edit_files()
	{
	

		$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	if ($check == true){


      $this->load->view('user/media/edit_files_view', $data);

		}
		
		else{redirect('user/panel');}
	
	
	
	//END list
		}

//END CLASS
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */