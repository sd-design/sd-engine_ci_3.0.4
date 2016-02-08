<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {



	public function index()
	{
		$this->load->library('session');
		
	$session_id_del = $this->session->userdata('session_id');
	$session_login = $this->session->userdata('login');
	$this->load->database();
	$this->db->query("DELETE FROM sd_session WHERE session_i='$session_id_del' LIMIT 1");
	$this->db->query("DELETE FROM sd_session WHERE login='$session_login'");
$this->session->sess_destroy();
	redirect('user/login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */