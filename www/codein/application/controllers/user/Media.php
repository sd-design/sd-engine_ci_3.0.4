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
	$session_id_check = $this->session->userdata('session_i');
	$key_check = $this->session->userdata('key');
	$token_check = $this->session->userdata('token');
	$check = $this->Singin->check_login($session_id_check, $key_check, $token_check);
	if ($check == true){
			
		
		$this->load->view('user/media/upload_view', $data);
		}
		else{redirect('user/panel');}	ob_end_flush(); 
	}	
	
			public function uploader()
	{
	

		$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_i');
	$key_check = $this->session->userdata('key');
	$token_check = $this->session->userdata('token');
	$check = $this->Singin->check_login($session_id_check, $key_check, $token_check);
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
	$session_id_check = $this->session->userdata('session_i');
	$key_check = $this->session->userdata('key');
	$token_check = $this->session->userdata('token');
	$check = $this->Singin->check_login($session_id_check, $key_check, $token_check);
	if ($check == true){


      $this->load->view('user/media/edit_files_view', $data);

		}
		
		else{redirect('user/panel');}
	
	
	
	//END list
		}



	public function filemanager()
	{
	/* раздел файлового менеджера */
ob_start();
		$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_i');
	$key_check = $this->session->userdata('key');
	$token_check = $this->session->userdata('token');
	$check = $this->Singin->check_login($session_id_check, $key_check, $token_check);
	if ($check == true){


      $this->load->view('user/media/filemanager_view', $data);

		}
		
		else{redirect('user/panel');}
	ob_end_flush(); 
	
	
		}


public function filer()
	{
	/* функция обработки запросов к модели файлового менеджера */
ob_start();
		$data['alert']="";
		$this->load->model('Singin');
		$this->load->model('File');
	$session_id_check = $this->session->userdata('session_i');
	$key_check = $this->session->userdata('key');
	$token_check = $this->session->userdata('token');
	$check = $this->Singin->check_login($session_id_check, $key_check, $token_check);
	if ($check == true){

if($_GET['action'] === "list") {

	$list = $this->File->filelist();
	echo $list;
}
if($_GET['action'] === "home") {

	$list = $this->File->go_home();
	echo $list;
	
    }

		}
		
		else{redirect('user/panel');}
	ob_end_flush(); 
	
	
		}

//END CLASS
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */