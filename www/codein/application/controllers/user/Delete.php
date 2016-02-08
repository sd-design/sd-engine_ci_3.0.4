<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete extends CI_Controller {

public function __construct(){
 parent::__construct();
 			$this-> load-> helper('form');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');
}

/* 
DELETE PART
*/


	public function index()
{

	
	}
//Удаление записи
public function post($id)
		{
								$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
	if ($check == true){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM sd_post WHERE id=".$id." LIMIT 1;");	
        $row = $query->row_array(); 
        $data['delete_name'] = $row['post_name'];
            
        $this->db->query("DELETE FROM sd_post WHERE id=".$id." LIMIT 1;");		
				
		$this->load->view('user/delete_success_view', $data);
		}
		else{redirect('user/panel');}
							
							}
    
    
//Удаление элемента
public function item($id)
		{
								$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
	if ($check == true){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM sd_items WHERE id=".$id." LIMIT 1;");	
        $row = $query->row_array(); 
        $data['delete_name'] = $row['item_name'];
            
        $this->db->query("DELETE FROM sd_items WHERE id=".$id." LIMIT 1;");		
				
		$this->load->view('user/delete_success_view', $data);
		}
		else{redirect('user/panel');}
							
							}

//Удаление группы элементов
public function group($id)
		{
								$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
	if ($check == true){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM sd_items_group WHERE id=".$id." LIMIT 1;");	
        $row = $query->row_array(); 
        $data['delete_name'] = $row['group_title'];
            
        $this->db->query("DELETE FROM sd_items_group WHERE id=".$id." LIMIT 1;");		
				
		$this->load->view('user/delete_success_view', $data);
		}
		else{redirect('user/panel');}
							
							}
    
//не редактированная функция!!!	
public function category($id)
	{
	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
		if ($check == true){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM sd_category WHERE ID=".$id." LIMIT 1;");	
        $row = $query->row_array(); 
        $data['delete_name'] = $row['group_name'];
            
        $this->db->query("DELETE FROM sd_category WHERE ID=".$id." LIMIT 1;");		
				
		$this->load->view('user/delete_success_view', $data);
		}
		else{redirect('user/panel');}
							
							}
							
//не редактированная функция!!!
public function countdown($id)
		{
								$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
		if ($check == true){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM sd_countdown WHERE ID=".$id." LIMIT 1;");	
        $row = $query->row_array(); 
        $data['delete_name'] = $row['group_name'];
            
        $this->db->query("DELETE FROM sd_countdown WHERE ID=".$id." LIMIT 1;");		
				
		$this->load->view('user/delete_success_view', $data);
		}
		else{redirect('user/panel');}
							
							}


    
//Удаление группы элементов без самих элементов
	public function group($id)
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
		if ($check == true){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM sd_items_group WHERE ID=".$id." LIMIT 1;");	
        $row = $query->row_array(); 
        $data['delete_name'] = $row['group_name'];
            
        $this->db->query("DELETE FROM sd_items_group WHERE ID=".$id." LIMIT 1;");		
				
		$this->load->view('user/delete_success_view', $data);
		}
		else{redirect('user/panel');}

	}
 
    

    
	
    
//END CLASS
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>