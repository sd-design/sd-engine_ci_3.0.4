<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


public function __construct(){
 parent::__construct();
 			$this->load-> helper('form');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');
		 	 $this->load->model('Log');
 
}
	/**

	 */
	public function index()
	{
	$data['alert']= "";
		$key_form = md5(time());
		$key_form2 =base64_encode($key_form);
		$data['key_gen']= $key_form2;
		$this->session->set_userdata('session_i', $key_form);
		$this->load->view('user/login', $data);
	}
	public function sign_up()
		{
			ob_start();	
       
		$data['alert']= "";
		 	$this->form_validation->set_rules('login', 'Логин', 'required');
			$this->form_validation->set_rules('password', 'Пароль', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{

			$key_form = md5(time());
		$key_form2 =base64_encode($key_form);
		$data['key_gen']= $key_form2;
		$this->session->set_userdata('session_i', $key_form);
		$this->load->view('user/login', $data);
		
		}
		if ($this->form_validation->run() == TRUE){
$login_check= $_POST['login'];       
$pwd_check =base64_encode(md5($_POST['password']));
           //проверка наличия юзера и его пароля


$check_up = $this->Log->check_user($login_check);
            if($check_up == null){
            	$check=FALSE;
 // Редиректим на нужную нам страницу
redirect('user/login');
            }
              if($check_up == true){
            	$check=TRUE;
            	
            	$check_pwd = $this->Log->check_pwd($login_check, $pwd_check);
            	if($check_pwd == true){

            	$this->Log->add_keys($login_check);
            	redirect('user/panel');
            	/*
            	echo "login and pwd is true";
            	$key = $this->session->userdata('key');
            	echo $key."<br/>";
            	$token = $this->session->userdata('token');
            	echo $token."<br/>";
            	$user = $this->session->userdata('user');
            	echo $user."<br/>";
            	exit;	
            	_______________________________________________________РАЗОБРАТЬСЯ!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
            	}

            	if($check_pwd == FALSE){
            // Если нет то выводим форму авторизации
     $data['alert']= "Логин/пароль не совпадают";
	$key_form = md5(time());
		$key_form2 =base64_encode($key_form);
		$data['key_gen']= $key_form2;
		$this->session->set_userdata('session_i', $key_form);
         $this->load->view('user/login',$data);
            	}
 // Редиректим на нужную нам страницу

            }
         
	

}

			ob_end_flush();
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */