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
		$this->load->view('user/edit_view');
		}
		else{redirect('user/panel');}
			ob_end_flush(); 
	
	}
	
	public function posts()
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$this->load->database();
		$data['list_posts']  = $this->db->get("sd_post");		
				
		$this->load->view('user/list_posts_view', $data);
		}
		else{redirect('user/panel');}

	
	}
	
	
		public function categories()
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
		if ($check == true){
		$this->load->database();
		$data['list_posts']  = $this->db->get("sd_category");		
				
				
		$this->load->view('user/list_categories_view', $data);
		}
		else{redirect('user/panel');}

	}
	
	
		public function post($id)
		{
								$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$data['alert'] = "";
		$this->load->database();
		$data['edit_posts']  = $this->db->query("SELECT * FROM sd_post WHERE id=".$id." LIMIT 1;");
		$row = $data['edit_posts']->row();
        $date = $row->post_time;
        $data['day'] = date_format(date_create($date), 'd.m.Y');
        $data['time'] = date_format(date_create($date), 'H:i:s');
		$data['still_category']  = $this->db->query("SELECT * FROM sd_category WHERE id=".$row->category_id." LIMIT 1;");
		$data['list_category']  = $this->db->get("sd_category");			
		$data['list_users']  = $this->db->get("users");		
				
		$this->load->view('user/edit_post_view', $data);
		}
		else{redirect('user/panel');}
							
							}
    
    // функция редактирования элемента
    	public function item($id)
		{
								$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$data['alert'] = "";
		$this->load->database();
		$data['edit_posts']  = $this->db->query("SELECT * FROM sd_items WHERE id=".$id." LIMIT 1;");
		$row = $data['edit_posts']->row();
        $date = $row->item_time;
        $data['day'] = date_format(date_create($date), 'd.m.Y');
        $data['time'] = date_format(date_create($date), 'H:i:s');
                $data['still_group']  = $this->db->query("SELECT * FROM sd_items_group WHERE id=".$row->item_group." LIMIT 1;");
                $data['list_group']  = $this->db->get("sd_items_group");
                    $data['still_type']  = $this->db->query("SELECT * FROM sd_items_type WHERE id=".$row->item_type." LIMIT 1;");
                    $data['list_types']  = $this->db->get("sd_items_type");	
		$this->load->view('user/edit_item_view', $data);
		}
		else{redirect('user/panel');}
							
							}
	
	public function category($id)
	{
	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$data['alert'] = "";
		$this->load->database();
		$data['edit_posts']  = $this->db->query("SELECT * FROM sd_category WHERE id=".$id." LIMIT 1;");	
		$query = $data['edit_posts'];
		$row = $query->row_array();
		$data['owner'] = $row['owner'];
		$data['name_owner']  =$this->db->get("users");	
	
		
		$this->load->view('user/edit_category_view', $data);
		
		}
		else{redirect('user/panel');}
							
							}
							
							
		public function countdowns()
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$this->load->database();
		$data['list_posts']  = $this->db->get("sd_countdown");		
				
				
		$this->load->view('user/list_countdowns_view', $data);
		}
		else{redirect('user/panel');}

	
										}	
	
							
	
		public function countdown($id)
		{
								$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$data['alert'] = "";
		$this->load->database();
		$data['edit_countdown']  = $this->db->query("SELECT * FROM sd_countdown WHERE id=".$id." LIMIT 1;");	
					
				
		$this->load->view('user/edit_countdown_view', $data);
		}
		else{redirect('user/panel');}
							
							}


    
//Список элементов
public function items()
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
		if ($check == true){
		$this->load->database();
		$data['list_items']  = $this->db->get("sd_items");		
				
				
		$this->load->view('user/list_items_view', $data);
		}
		else{redirect('user/panel');}

	}
    
//Список групп элементов
	public function groups()
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
		if ($check == true){
		$this->load->database();
		$data['list_groups']  = $this->db->get("sd_items_group");		
				
				
		$this->load->view('user/list_groups_view', $data);
		}
		else{redirect('user/panel');}

	}
 
    
// Редактирование группы
public function group($id)
		{
    $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$data['alert'] = "";
		$this->load->database();
		$data['edit_group']  = $this->db->query("SELECT * FROM sd_items_group WHERE ID=".$id." LIMIT 1;");	
					
				
		$this->load->view('user/edit_group_view', $data);
		}
		else{redirect('user/panel');}
							
							}
    
    
//Удаление группы действие 1
public function ready_delete_group($id)
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
		if ($check == true){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM sd_items_group WHERE ID=".$id." LIMIT 1;");	
		$row = $query->row();
            
		$data['what_delete'] = "группу элементов: ".$row->group_title;
        $data['delete_descript'] = $row->group_descript;
        $data['delete_action'] = "user/delete/";
        $data['delete_id'] = "group/".$row->ID;
		$this->load->view('user/ready_delete_view', $data);
		}
		else{redirect('user/panel');}

	}
    
//Удаление записи действие 1
public function ready_delete_post($id)
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
		if ($check == true){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM sd_post WHERE id=".$id." LIMIT 1;");	
		$row = $query->row();
            
		$data['what_delete'] = $row->post_name;
        $data['delete_descript'] = $row->post_anons;
        $data['delete_action'] = "user/delete/";
        $data['delete_id'] = "post/".$row->id;
		$this->load->view('user/ready_delete_view', $data);
		}
		else{redirect('user/panel');}

	}
    
    //Удаление элемента действие 1
public function ready_delete_item($id)
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
		if ($check == true){
		$this->load->database();
		$query = $this->db->query("SELECT * FROM sd_items WHERE id=".$id." LIMIT 1;");	
		$row = $query->row();
            
		$data['what_delete'] = "элемент ".$row->item_name;
        $data['delete_descript'] = $row->item_text;
        $data['delete_id'] = "item/".$row->ID;
        $data['delete_action'] = "user/delete/";
		$this->load->view('user/ready_delete_view', $data);
		}
		else{redirect('user/panel');}

	}
    
//END CLASS
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>