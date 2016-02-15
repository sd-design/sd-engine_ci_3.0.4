<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {



	public function index()
	{
		$this->load->library('session');
	$full_out_on = "";	
$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_i');
	$key_check = $this->session->userdata('key');
	$token_check = $this->session->userdata('token');
	$check = $this->Singin->check_login($session_id_check, $key_check, $token_check);

						if ($check == true)
						{	

	$session_id_del = $this->session->userdata('session_i');
	$session_login = $this->session->userdata('user');
	$this->load->database();
	$this->db->query("DELETE FROM sd_session WHERE session_i='$session_id_del' LIMIT 1");
	//проверка включено ли выход на всех устройствах
	$full_out_on = $_GET['full_out_on'];
	if ($full_out_on === "on"){ $this->db->query("DELETE FROM sd_session WHERE login='$session_login'"); }
	
$this->session->sess_destroy();
	redirect('user/login');
	}
	if ($check == FALSE)
					{
redirect('user/login');
					}

}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */