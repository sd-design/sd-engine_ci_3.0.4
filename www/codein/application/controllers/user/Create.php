<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {
public function __construct(){
 parent::__construct();
 			$this-> load-> helper('form');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		ob_start();
	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login($session_id_check, $key_check);
	
				if ($check == true){
		$this->load->view('user/create_view');
		}
		else{redirect('user/panel');}
			ob_end_flush(); 
	
	}

/* 


CREATE A NEW CATEGORY
--------------------------->

*/

	public function category()
	{
	
			ob_start();
			$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$this->load->view('user/new_category_view', $data);
		}
		else{redirect('user/panel');}	ob_end_flush(); 
	}
	
	
	
	public function new_category()
	{
	
	ob_start();
	$category_descript ="";
		$data['alert']= "";
	
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		 	$this->form_validation->set_rules('category_name', 'Название', 'required');
			$this->form_validation->set_rules('category_url', 'URL', 'required');

		
		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('user/new_category_view', $data);
		}
		
		elseif ($this->form_validation->run() == TRUE){
		$category_name = $_POST['category_name'];
		$category_url = $_POST['category_url'];
		$category_descript = $_POST['category_discript'];
						$this->load->database();
		
		$reserved = array("user","login","panel","read","create", "logout","registration");
	foreach($reserved as $key){
	if ($category_url === $key)
	{
	$data['alert']= "<div class='alert alert-danger'>Данный URL (<b>".$category_url."</b>) зарезервирован системой</div>";
	$this->load->view('user/new_category_view', $data);
	exit;
	}
	}
	$query = $this->db->query("SELECT * FROM sd_category WHERE category_url = ".$this->db->escape($category_url));
	
	if ($query->num_rows() == TRUE)
	
	{
	$data['alert']= "<div class='alert alert-danger'>Такой URL(<b>".$category_url."</b>) зарезервирован</div>";
	$this->load->view('user/new_category_view', $data);
	exit;
	}
	

				
$sql = "INSERT INTO sd_category (category_name, category_descript, category_url) VALUES(".$this->db->escape($category_name).",".$this->db->escape($category_descript).",".$this->db->escape($category_url).")";	
$this->db->query($sql);	
$data['category_name'] =$category_name;
	$this->load->view('user/add_category_view', $data);			
				}
		

	}
	else{redirect('user/panel');}
		ob_end_flush(); 
	}
	
/*
CREATE A NEW POST
*/


	public function post()
	{
	
			ob_start();
			$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	if ($check == true){
	$this->load->database();
		$data['category_arr'] = $this->db->get("sd_category");		
		
		$this->load->view('user/new_post_view', $data);
		}
		else{redirect('user/panel');}	ob_end_flush(); 
	}	
	
	
public function new_post()
	{
	
	ob_start();
	$category_descript ="";
		$data['alert']= "";
	
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		 	$this->form_validation->set_rules('post_name', 'Название', 'required');
			$this->form_validation->set_rules('post_url', 'URL', 'required');
			$this->form_validation->set_rules('post_anons', 'Анонс', 'required|min_length[5]');
			$this->form_validation->set_rules('post_text', 'Текст записи', 'required|min_length[5]');

		
		if ($this->form_validation->run() == FALSE)
		{
            $data['category_arr'] = $this->db->get("sd_category");	
		$this->load->view('user/new_post_view', $data);
		}
		
		elseif ($this->form_validation->run() == TRUE){
		$category_id = $_POST['category_id'];
		$post_name = $_POST['post_name'];
		$post_url = $_POST['post_url'];
		$post_anons = $_POST['post_anons'];
		$post_text = $_POST['post_text'];
        $post_image = $_POST['post_image'];
        $post_time = date('Y-m-d')." ".date("H:i:s");
		
		$reserved = array("user","login","panel","read","create","edit", "logout","registration");
	foreach($reserved as $key){
	if ($post_url === $key)
	{
	$data['alert']= "<div class='alert alert-danger'>Данный URL (<b>".$post_url."</b>) зарезервирован системой</div>";
	$this->load->view('user/new_post_view', $data);
	exit;
	}
	}
	
	$this->load->database();
	$query = $this->db->query("SELECT * FROM sd_post WHERE post_url = ".$this->db->escape($post_url));
		if ($query->num_rows() == TRUE)
	
	{
	$data['alert']= "<div class='alert alert-danger'>Такой URL(<b>".$post_url."</b>) зарезервирован</div>";
	$this->load->view('user/new_post_view', $data);
	exit;
	}
	
$session_login = $this->session->userdata('login');
$query = $this->db->query("SELECT * FROM users WHERE login='$session_login' LIMIT 1");
$row = $query->row_array();
$post_autor = $row['firstname']." ".$row['lastname'];
$autor_id = $row['ID'];

			
$sql = "INSERT INTO sd_post (category_id, post_name, post_url, post_anons, post_text, post_time, post_autor, autor_id, post_image) VALUES(".$this->db->escape($category_id).",".$this->db->escape($post_name).",".$this->db->escape($post_url).",".$this->db->escape($post_anons).",".$this->db->escape($post_text).",".$this->db->escape($post_time).",".$this->db->escape($post_autor).",".$this->db->escape($autor_id).",".$this->db->escape($post_image).")";	
$this->db->query($sql);	
$data['post_name'] = $post_name;
	$this->load->view('user/add_post_view', $data);			
				}
		

	}
	else{redirect('user/panel');}
		ob_end_flush(); 
	}
	
	
	



	public function countdown()
	{
	
			ob_start();
			$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	if ($check == true){
	
		
		$this->load->view('user/new_countdown_view', $data);
		}
		else{redirect('user/panel');}	ob_end_flush(); 
	}
	
	
	
	
public function new_countdown()
	{
	
	ob_start();
	$countdown_descript ="";
		$data['alert']= "";
	
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		 	$this->form_validation->set_rules('countdown_title', 'Название события', 'required');
			$this->form_validation->set_rules('countdown_url', 'URL', 'required');
			$this->form_validation->set_rules('countdown_descript', 'Описание', 'required|min_length[5]');
			$this->form_validation->set_rules('countdown_day', 'День', 'required');
			$this->form_validation->set_rules('countdown_month', 'Месяц', 'required');
			$this->form_validation->set_rules('countdown_year', 'Год', 'required');
			$this->form_validation->set_rules('countdown_hour', 'Часы', 'required');
			$this->form_validation->set_rules('countdown_minute', 'Минуты', 'required');

		
		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('user/new_countdown_view', $data);
		}
		
		elseif ($this->form_validation->run() == TRUE){
		$countdown_title = $_POST['countdown_title'];
		$countdown_descript = $_POST['countdown_descript'];
		$countdown_day = $_POST['countdown_day'];
		$countdown_month = $_POST['countdown_month'];
		$countdown_year = $_POST['countdown_year'];
		$countdown_hour = $_POST['countdown_hour'];
		$countdown_minute = $_POST['countdown_minute'];
		$countdown_url = $_POST['countdown_url'];
		
		

$this->load->database();
	$query = $this->db->query("SELECT * FROM sd_countdown WHERE url = ".$this->db->escape($countdown_url));
		if ($query->num_rows() == TRUE)
	
	{
	$data['alert']= "<div class='alert alert-danger'>Такой URL(<b>".$countdown_url."</b>) уже занят.</div>";
	$this->load->view('user/new_countdown_view', $data);
	exit;
	}
	
$timer = mktime(0, $countdown_minute, $countdown_hour, $countdown_month, $countdown_day, $countdown_year); 



			
$sql = "INSERT INTO sd_countdown (title, descript, day, month, year, hour, minute, timer, url) VALUES(".$this->db->escape($countdown_title).",".$this->db->escape($countdown_descript).",".$this->db->escape($countdown_day).",".$this->db->escape($countdown_month).",".$this->db->escape($countdown_year).",".$this->db->escape($countdown_hour).",".$this->db->escape($countdown_minute).",".$this->db->escape($timer).",".$this->db->escape($countdown_url).")";	
$this->db->query($sql);	
$data['countdown_title'] = $countdown_title;
	$this->load->view('user/add_countdown_view', $data);			
				}
		

	}
	else{redirect('user/panel');}
		ob_end_flush(); 
	}
	
// CREATE ITEM	
	public function item()
	{
	
	
			$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	if ($check == true){
	$this->load->database();
		$data['items_type_arr'] = $this->db->get("sd_items_type");		
        $data['items_group_arr'] = $this->db->get("sd_items_group");	
		
		$this->load->view('user/new_item_view', $data);
		}
		else{redirect('user/panel');}
	}    

// CREATE NEW ITEM and ADD TO DB
    public function new_item()
	{
	
	ob_start();
	$category_descript ="";
		$data['alert']= "";
	
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		 	$this->form_validation->set_rules('item_name', 'Название', 'required');
			$this->form_validation->set_rules('item_url', 'URL', 'required');
			$this->form_validation->set_rules('item_text', 'Текст элемента', 'required|min_length[5]');

		
		if ($this->form_validation->run() == FALSE)
		{
            	$data['items_type_arr'] = $this->db->get("sd_items_type");		
        $data['items_group_arr'] = $this->db->get("sd_items_group");	
		
		$this->load->view('user/new_item_view', $data);
		}
		
		elseif ($this->form_validation->run() == TRUE){
		
		$item_name = $_POST['item_name'];
		$item_url = $_POST['item_url'];
		$item_type = $_POST['item_type'];
        $item_group = $_POST['item_group'];
		$item_text = $_POST['item_text'];
        $item_time = date('Y-m-d')." ".date("H:i:s");

		
		$reserved = array("user","login","panel","read","create","edit", "logout","registration");
	foreach($reserved as $key){
	if ($item_url === $key)
	{
	$data['alert']= "<div class='alert alert-danger'>Данный URL (<b>".$item_url."</b>) зарезервирован системой</div>";
	$this->load->view('user/new_item_view', $data);
	exit;
	}
	}
	
	$this->load->database();
	$query = $this->db->query("SELECT * FROM sd_items WHERE item_url = ".$this->db->escape($item_url));
		if ($query->num_rows() == TRUE)
	
	{
	$data['alert']= "<div class='alert alert-danger'>Такой URL(<b>".$item_url."</b>) зарезервирован</div>";
	$this->load->view('user/new_item_view', $data);
	exit;
	}
	

			
$sql = "INSERT INTO sd_items (item_name, item_url, item_type, item_group, item_text, item_time) VALUES(".$this->db->escape($item_name).",".$this->db->escape($item_url).",".$this->db->escape($item_type).",".$this->db->escape($item_group).",".$this->db->escape($item_text).",".$this->db->escape($item_time).")";	
$this->db->query($sql);	
$data['item_name'] = $item_name;
	$this->load->view('user/add_item_view', $data);			
				}
		

	}
	else{redirect('user/panel');}
 
	}
	
    
// CREATE ITEM_GROUP	
	public function group()
	{
				$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	if ($check == true){
	$this->load->database();
		$data['items_type_arr'] = $this->db->get("sd_items_type");		
        $data['items_group_arr'] = $this->db->get("sd_items_group");	
		
		$this->load->view('user/new_group_view', $data);
		}
		else{redirect('user/panel');}
	}    

// CREATE NEW GROUP of ITEM and ADD TO DB
    public function new_group()
	{
	
	ob_start();
	$category_descript ="";
		$data['alert']= "";
	
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		 	$this->form_validation->set_rules('group_title', 'Название группы', 'required');
			$this->form_validation->set_rules('group_name', 'URL', 'required');
			$this->form_validation->set_rules('group_descript', 'Описание группы', 'required|min_length[5]');

		
		if ($this->form_validation->run() == FALSE)
		{
    		$this->load->view('user/new_group_view', $data);
		}
		
		elseif ($this->form_validation->run() == TRUE){
		
        $group_title = $_POST['group_title'];
		$group_name = $_POST['group_name'];
		$group_descript = $_POST['group_descript'];
 			
$sql = "INSERT INTO sd_items_group (group_title, group_name, group_descript) VALUES(".$this->db->escape($group_title).",".$this->db->escape($group_name).",".$this->db->escape($group_descript).")";	
$this->db->query($sql);	
$data['group_title'] = $group_title;
$data['group_descript'] = $group_descript;            
	$this->load->view('user/add_group_view', $data);			
				}
		

	}
	else{redirect('user/panel');}
 
	}
	
    

    
	//END CLASS
	
	
}

/* End of file create.php */
/* Location: ./application/controllers/create.php */

?>