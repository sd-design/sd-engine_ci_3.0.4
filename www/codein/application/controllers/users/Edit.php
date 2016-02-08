<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {

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
	
				if ($check == true){
$this->load->database();
				
$data['list_users']  = $this->db->get("users");

		$this->load->view('users/list_users_view', $data);
		}
		else{redirect('user/panel');}
			ob_end_flush(); 
	
	}
	

public function change($id)
	{
	

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
				$data['alert'] ="";
$this->load->database();
				
$data['user_info']  = $this->db->query("SELECT * FROM users WHERE ID=".$id." LIMIT 1;");;

		$this->load->view('users/edit_user_view', $data);
		}
		else{redirect('user/panel');}
	
	}





public function update()
	{
	

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
				$data['alert'] ="";
				$id =  $_POST['id'];
				$user_login = $_POST['login'];
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$display_name = $_POST['display_name'];
		$email = $_POST['email'];
		$user_role = $_POST['role'];
				if(empty($_POST['password']))
		{
		$sql = "UPDATE users SET login=".$this->db->escape($user_login).", firstname=".$this->db->escape($first_name).", lastname=".$this->db->escape($last_name).", email=".$this->db->escape($email).", display_name=".$this->db->escape($display_name).", user_role=".$this->db->escape($user_role)." WHERE ID=$id";
		 }
		
		else{
		$pwd = base64_encode(md5($_POST['password']));
	$sql = "UPDATE users SET login=".$this->db->escape($user_login).", firstname=".$this->db->escape($first_name).", lastname=".$this->db->escape($last_name).", email=".$this->db->escape($email).", pwd=".$this->db->escape($pwd).", display_name=".$this->db->escape($display_name).", user_role=".$this->db->escape($user_role)." WHERE ID=$id";	
			}
		
		
$this->load->database();
$this->db->query($sql);					

		$data['user_login'] = $_POST['login'];
		$data['first_name'] = $_POST['firstname'];
		$data['last_name'] = $_POST['lastname'];
		$data['user_email'] = $_POST['email'];

		$this->load->view('users/update_user_view', $data);
		}
		else{redirect('user/panel');}
	
	}
	
	
//Удаляем ползователя

	public function ready_delete($id)
	{
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
				$data['alert'] ="";
				
				$data['user_info']  = $this->db->query("SELECT * FROM users WHERE ID=".$id." LIMIT 1;");;
				$this->load->view('users/ready_user_view', $data);
				
				
				}
		else{redirect('user/panel');}
	
	}
	
	public function delete($id)
	{
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
				$data['alert'] ="";
				
				$sql = "DELETE FROM users WHERE id=$id";
				$this->db->query($sql);	
				$this->load->view('users/delete_user_view', $data);
				
				
				}
		else{redirect('user/panel');}
	
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>