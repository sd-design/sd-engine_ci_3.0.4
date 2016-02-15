<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Options extends CI_Controller {

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

	redirect('user/panel');
	}
//функция опций обратной связи	
public function feedback()
		{
    ob_start();
    $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_i');
    $key_check = $this->session->userdata('key');
    $token_check = $this->session->userdata('token');
    $check = $this->Singin->check_login($session_id_check, $key_check, $token_check);
	
	if ($check == true){
		$this->load->database();
        $id = "feedback";
		$row2 = $this->db->query("SELECT * FROM sd_feedback WHERE part='".$id."' LIMIT 1;");
        $data['edit_options'] = $row2->row_array();
        
        $query = $this->db->query("SELECT * FROM sd_options LIMIT 1;");
        $row = $query->row_array();
        $key = $row['key_logger'];

        
$key_down = strlen(base64_encode($key));
$user_crypt = base64_decode($data['edit_options']['smtp_pass']);
$ouput = substr($user_crypt, 0, -$key_down);

        $data['smtp_pass'] = base64_decode($ouput);
		$data['alert'] = "";		
		$this->load->view('user/options_feedback_view', $data);
		}
		else{redirect('user/panel');}
    ob_end_flush();
							
							}
    
//Обновление параметров
public function update()
		{
    ob_start();
    $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_i');
    $key_check = $this->session->userdata('key');
    $token_check = $this->session->userdata('token');
    $check = $this->Singin->check_login($session_id_check, $key_check, $token_check);
	
	if ($check == true){
            
        if($_POST['option_id'] === "feedback"){
            $data['alert'] = "";
            $smtp_host = $_POST['smtp_host'];
            $smtp_port = $_POST['smtp_port'];
            $smtp_user = $_POST['smtp_user'];
            $smtp_pass = $_POST['smtp_pass'];
            $subscribe = $_POST['subscribe'];
            $this->load->database();
        $id = "feedback";
	    $query = $this->db->query("SELECT * FROM sd_options LIMIT 1;");
        $row = $query->row_array();
        $key = $row['key_logger'];
        //закодировали пароль
        $input = base64_encode($smtp_pass).base64_encode($key);
        $user_crypt = base64_encode($input);
       

$sql = "UPDATE sd_feedback SET smtp_host=".$this->db->escape($smtp_host).", smtp_port=".$this->db->escape($smtp_port).", smtp_user=".$this->db->escape($smtp_user).", smtp_pass=".$this->db->escape($user_crypt).", subscribe=".$this->db->escape($subscribe)." WHERE part=".$this->db->escape($id)."";
$this->db->query($sql);	
		
            
		redirect('user/options/success');
                                                }
   if($_POST['option_id'] === "options"){
         $data['alert'] = "";
         $id = $_POST['option_id'];
         $site_name = $_POST['site_name'];
         $site_description = $_POST['site_description'];
         $key_logger = $_POST['key_logger'];
         $ip_access = $_POST['ip_access'];
         $access_on = $_POST['access_on'];
         $q_posts = $_POST['q_posts'];
         $phone = $_POST['phone'];
         $twitter = $_POST['twitter'];
         $vk = $_POST['vk'];
         $facebook = $_POST['facebook'];
         $google = $_POST['google'];
         $youtube = $_POST['youtube'];
         $vimeo = $_POST['vimeo'];
        
            $this->load->database();
          

$sql = "UPDATE sd_options SET site_name=".$this->db->escape($site_name).", site_description=".$this->db->escape($site_description).", key_logger=".$this->db->escape($key_logger).", ip_access=".$this->db->escape($ip_access).", access_on=".$this->db->escape($access_on).", q_posts=".$this->db->escape($q_posts).", phone=".$this->db->escape($phone).", twitter=".$this->db->escape($twitter).", vk=".$this->db->escape($vk).", facebook=".$this->db->escape($facebook).", google=".$this->db->escape($google).", youtube=".$this->db->escape($youtube).", vimeo=".$this->db->escape($vimeo)." WHERE part=".$this->db->escape($id)."";
$this->db->query($sql);	
		
            
		redirect('user/options/success');
                                                }
		}
		else{redirect('user/panel');}
			ob_end_flush(); 				
							}
 
//функция опций сайта	
public function change()
		{
    ob_start();
    $data['alert']="";
    $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_i');
    $key_check = $this->session->userdata('key');
    $token_check = $this->session->userdata('token');
    $check = $this->Singin->check_login($session_id_check, $key_check, $token_check);
	
	if ($check == true){
		$this->load->database();
     
        $data['list_options'] = $this->db->query("SELECT * FROM sd_options LIMIT 1;");
       
$this->load->view('user/site_options_view', $data);
		}
		else{redirect('user/panel');}
    ob_end_flush();
							
							}
        
    
//Успешное выполнение операции
public function success()
		{  
    ob_start();
    $data['alert_title'] = 'Настройка обратной связи';	
    $data['alert'] = '<div class="alert alert-success">данные обновлены</div>';	
    $this->load->view('user/alert_view', $data);
    ob_end_flush();
 }
	
    
//END CLASS
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/user/options.php */
?>