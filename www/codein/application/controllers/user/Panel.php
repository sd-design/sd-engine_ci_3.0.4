<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {


public function __construct(){
 parent::__construct();
 			$this-> load->helper('form');
		 	$this->load->library('session');
}


	public function index()
	{
	ob_start();	
	
	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_i');
	$key_check = $this->session->userdata('key');
	$token_check = $this->session->userdata('token');
	$check = $this->Singin->check_login($session_id_check, $key_check, $token_check);

						if ($check == true)
						{	
$this->load->database();
$login = $this->session->userdata('user');
$query = $this->db->query("SELECT * FROM users WHERE login='$login' LIMIT 1");
$row = $query->row_array();	
	if($row['user_role']== "administrator")		{		
				$data['panel']= "transfer is OK";
				$options  = $this->db->query("SELECT * FROM sd_options LIMIT 1;");
                $option = $options->row();
                $data['sys_version'] = $option->sys_version;
						$this->load->view('user/panel', $data);
						}
						if($row['user_role']== "user")		{		
						$data['panel']= "transfer is OK";
						
						$this->load->view('user/panel_user', $data);
						}
						
					}
					if ($check == FALSE)
					{
					redirect('user/login');
					}
				ob_end_flush(); 
	
	
	}
	
	/* Персональный раздел */
	public function personal()
	{
	ob_start();	
	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_i');
	$key_check = $this->session->userdata('key');
	$token_check = $this->session->userdata('token');
	$check = $this->Singin->check_login($session_id_check, $key_check, $token_check);
	
				if ($check == true){
	$this->load->database();
	$login = $this->session->userdata('user');
	$query = $this->db->query("SELECT * FROM users WHERE login='$login' LIMIT 1");
	$row = $query->row_array();
	$data['login'] = $row['login'];
	$data['firstname'] = $row['firstname'];
	$data['lastname'] = $row['lastname'];
	$data['email'] = $row['email'];
	$data['reg_date'] = $row['reg_date'];
	$data['display_name'] = $row['display_name'];
	$data['user_role'] = $row['user_role'];
	$this->load->view('user/personal', $data);
	}
	else
	{redirect('user/login');} 
ob_end_flush(); 
	
	}
	
}



/* End of file panel.php */
/* Location: ./application/controllers/user/Panel.php */