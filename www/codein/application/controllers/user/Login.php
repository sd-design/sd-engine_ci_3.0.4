<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


public function __construct(){
 parent::__construct();
 			$this->load-> helper('form');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');
 
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
        $this->load->model('Log');
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
				
            $check_up = $this->Log->check_user($login_check);
            if($check_up == null){$check=FALSE;}
				
				$pwd_check =base64_encode(md5($_POST['password']));
				
				
				
				$key_form= $this->session->userdata('session_i');
				$key_read = base64_decode($_POST['key-tmp']);
				
				if($key_form!=$key_read){
				$data['alert']= "HAKER go away";
				redirect('user/login'); }
				
				
				$query_check_user = $this->db->query("SELECT * FROM users WHERE login = ".$this->db->escape($login_check)." and pwd = ".$this->db->escape($pwd_check)."");
$userdata = $query_check_user->row_array();

// Если пользователь найден
if (@$userdata['login'] == $login_check and @$userdata['pwd'] == $pwd_check) {
$check= TRUE;
// Создаем массим с данными сессии
$ip = $_SERVER['REMOTE_ADDR'];
$session_id = $this->session->userdata('session_id');
$time_reg = date("Y-m-d H:i:s");
$key = base64_encode(md5($session_id));
$authdata = array(
'login' => $login_check,
'logged_in' => true,
'key' => $key,
'ip' => $ip
);

// Добавляем данные в сессию
$this->session->set_userdata($authdata);
/*Регистрируем сессию в БД */

$sql = "INSERT INTO sd_session (login, session_status, session_i, session_key, time_reg, ip) VALUES(".$this->db->escape($login_check).",".$this->db->escape(true).",".$this->db->escape($session_id).",".$this->db->escape($key).",".$this->db->escape($time_reg).",".$this->db->escape($ip).")";	
$this->db->query($sql);			
// Редиректим на нужную нам страницу
redirect('user/panel');
}

// Если нет то выводим форму авторизации
	else {
	$data['alert']= "Логин/пароль не совпадают";
	$key_form = md5(time());
		$key_form2 =base64_encode($key_form);
		$data['key_gen']= $key_form2;
		$this->session->set_userdata('session_i', $key_form);
	$this->load->view('user/login',$data);

			}
					
					

			
						
	
					
	}
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */