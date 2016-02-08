<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update extends CI_Controller {
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

	
	}

/* 


UPDATE CATEGORY
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
		$category_id = $_POST['category_id'];
		$category_name = $_POST['category_name'];
		$category_descript = $_POST['category_descript'];
		$category_url = $_POST['category_url'];
		$category_owner = $_POST['owner'];
		$data['category_name']=$category_name;
		$this->load->database();
		
		$sql = "UPDATE sd_category SET category_name=".$this->db->escape($category_name).", category_descript=".$this->db->escape($category_descript).", category_url=".$this->db->escape($category_url).", owner=".$this->db->escape($category_owner)." WHERE id=$category_id";	
$this->db->query($sql);	
		$this->load->view('user/update_category_view', $data);
		}
		else{redirect('user/panel');}	ob_end_flush(); 
	}
	
	
/*
UPDATE COUNTDOWN
*/

	public function countdown()
	{
	
			ob_start();
			$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
	
				if ($check == true){
				
		$countdown_id = $_POST['countdown_id'];
		$countdown_title = $_POST['countdown_title'];
		$countdown_descript = $_POST['countdown_descript'];
		$countdown_day = $_POST['countdown_day'];
		$countdown_month = $_POST['countdown_month'];
		$countdown_year = $_POST['countdown_year'];
		$countdown_hour = $_POST['countdown_hour'];
		$countdown_minute = $_POST['countdown_minute'];
		$countdown_url = $_POST['countdown_url'];
		$data['countdown_title']=$countdown_title;
		$data['countdown_descript']=$countdown_descript;
		
		$coundown_timer = mktime(0, $countdown_minute, $countdown_hour, $countdown_month, $countdown_day, $countdown_year); 
		$this->load->database();
		$sql = "UPDATE sd_countdown SET title=".$this->db->escape($countdown_title).", descript=".$this->db->escape($countdown_descript).", day=".$this->db->escape($countdown_day).", month=".$this->db->escape($countdown_month).", year=".$this->db->escape($countdown_year).", hour=".$this->db->escape($countdown_hour).", minute=".$this->db->escape($countdown_minute).", timer=".$this->db->escape($coundown_timer).", url=".$this->db->escape($countdown_url)." WHERE id=$countdown_id";	
$this->db->query($sql);	
		$this->load->view('user/update_countdown_view', $data);
													
		}
		else{redirect('user/panel');}	
		ob_end_flush(); 
	}

/*
UPDATE POST
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
               
		$post_id = $_POST['post_id'];
		$category_id = $_POST['category_id'];
		$post_name = $_POST['post_name'];
		$post_url = $_POST['post_url'];
		$post_anons = $_POST['post_anons'];
		$post_text = $_POST['post_text'];
        $autor_id = $_POST['autor_id'];
        $post_image = $_POST['post_image'];
        $query = $this->db->query("SELECT * FROM users WHERE ID='$autor_id' LIMIT 1");
        $row = $query->row_array();
        $post_autor = $row['firstname']." ".$row['lastname'];
        if (empty($_POST['post_day']) || empty($_POST['post_time'])){ $post_time = date('Y-m-d')." ".date("H:i:s"); }
                    $day = date_format(date_create($_POST['post_day']), 'Y-m-d');
        $post_time =  $day." ".$_POST['post_time'];  
		
		$reserved = array("user","login","panel","read","create","edit", "logout","registration");
	foreach($reserved as $key){
	if ($post_url === $key)
	{
	$data['alert']= "<div class='alert alert-danger'>Данный URL (<b>".$post_url."</b>) зарезервирован системой</div>";
        $data['category_arr'] = $this->db->get("sd_category");	
	$this->load->view('user/new_post_view', $data);
	exit;
	}
	}
	
	$this->load->database();
	
$sql = "UPDATE sd_post SET category_id=".$this->db->escape($category_id).", post_name=".$this->db->escape($post_name).", post_url=".$this->db->escape($post_url).", post_anons=".$this->db->escape($post_anons).", post_text=".$this->db->escape($post_text).", post_time=".$this->db->escape($post_time).", post_autor=".$this->db->escape($post_autor).", autor_id=".$this->db->escape($autor_id).", post_image=".$this->db->escape($post_image)."WHERE id=".$this->db->escape($post_id);	
$this->db->query($sql);	
$data['post_name'] = $post_name;	
		
		$this->load->view('user/update_post_view', $data);
		
		}
		else{redirect('user/panel');}	ob_end_flush(); 
	}	
	
//Обновление группы элементов
public function group()
	{
	
			ob_start();
			$data['alert']="";
		$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$group_id = $_POST['group_id'];
		$group_name = $_POST['group_name'];
		$group_descript = $_POST['group_descript'];
		$group_title = $_POST['group_title'];
		
		$data['group_title']=$group_title;
$this->load->database();
$sql = "UPDATE sd_items_group SET group_title=".$this->db->escape($group_title).", group_name=".$this->db->escape($group_name).", group_descript=".$this->db->escape($group_descript)." WHERE ID=".$group_id;	
$this->db->query($sql);	
		$this->load->view('user/update_group_view', $data);
		}
		else{redirect('user/panel');}	ob_end_flush(); 
	}

	//END CLASS
	
	
}

/* End of file create.php */
/* Location: ./application/controllers/create.php */

?>