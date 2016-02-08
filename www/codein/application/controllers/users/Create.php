<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {

public function __construct(){
 parent::__construct();
 			$this-> load-> helper('form');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');
}

/* 
EDIT PART
*/


	public function index()
	{
		ob_start();
	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
	$data['alert'] = "";
	
				if ($check == true){
		$this->load->view('users/new_user_view', $data);
		}
		else{redirect('user/panel');}
			ob_end_flush(); 
	
	}
	

	
public function new_user()
	{
	
	ob_start();
	$category_descript ="";
		$data['alert']= "";
		$role ="";
	
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		 	$this->form_validation->set_rules('login', 'Логин', 'required');
			$this->form_validation->set_rules('firstname', 'Имя', 'required');
			$this->form_validation->set_rules('lastname', 'Фамилия', 'required');
			$this->form_validation->set_rules('display_name', 'Представление', 'required');
			$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Пароль', 'required|matches[password2]');
			$this->form_validation->set_rules('password2', 'Подтверждение пароля', 'required|min_length[8]');

		
		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('users/new_user_view', $data);
		}
		
		elseif ($this->form_validation->run() == TRUE){
		$user_status = '0';
		$user_login = $_POST['login'];
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$display_name = $_POST['display_name'];
		$email = $_POST['email'];
		$user_role = $_POST['role'];
		$pwd = base64_encode(md5($_POST['password']));
		
		if(empty($user_role)) {$user_role = "user";}
		
		$reserved = array("admin","administrator");
	foreach($reserved as $key){
	if ($user_login === $key)
	{
	$data['alert']= "<div class='alert alert-danger'>Данный пользователь (<b>".$user_login."</b>) зарезервирован системой</div>";
	$this->load->view('users/new_user_view', $data);
	exit;
	}
	}
	
	$this->load->database();
	$query = $this->db->query("SELECT * FROM users WHERE login = ".$this->db->escape($user_login));
		if ($query->num_rows() == TRUE)
	
	{
	$data['alert']= "<div class='alert alert-danger'>Такой пользователь (<b>".$user_login."</b>) зарезервирован</div>";
	$this->load->view('users/new_user_view', $data);
	exit;
	}
	

$reg_date = date('Y-m-d')." ".date("H:i:s");

$sql = "INSERT INTO users (login, firstname, lastname, email, pwd, reg_date, display_name, user_status, user_role) VALUES(".$this->db->escape($user_login).",".$this->db->escape($first_name).",".$this->db->escape($last_name).",".$this->db->escape($email).",".$this->db->escape($pwd).",".$this->db->escape($reg_date).",".$this->db->escape($display_name).",".$this->db->escape($user_status).",".$this->db->escape($user_role).")";	
$this->db->query($sql);	
$data['user_login'] = $user_login;
$data['first_name'] = $first_name;
$data['user_email'] = $email;
	$this->load->view('users/add_user_view', $data);			
				}
		

	}
	else{redirect('user/panel');}
		ob_end_flush(); 
	}
	
	
	
	
	
	
	
	//END CLASS
	

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>