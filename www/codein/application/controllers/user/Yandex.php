<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Yandex extends CI_Controller {

public function __construct(){
 parent::__construct();
 			$this->load->helper('form');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');
}




	public function index()
{

	redirect('user/panel');
	}
    
    public function foto()
    {
    ob_start();
      $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
	if ($check == true){
		$data['alert'] = "";		
		$this->load->view('user/yandex_foto_view', $data);
        
		}
		else{redirect('user/panel');}
    ob_end_flush();    
    }
    
//функция формы добавления альбома Яндек-фото
public function add_album()
		{
    ob_start();
     $service = "foto";
    
    $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
	if ($check == true){
		$this->load->database();
       	$data['alert'] = "";		
		$this->load->view('user/yandex_new_album_view', $data);
        
		}
		else{redirect('user/panel');}
    ob_end_flush();
							
							}


//функция формы добавления альбома Яндек-фото
public function add_new_album()
		{
    ob_start();
     $service = "foto";
    
    $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
	if ($check == true){
        $data['alert'] = "";
            $this->form_validation->set_rules('yandex_login', 'Логин Яндекса', 'required');
            $this->form_validation->set_rules('yandex_name', 'Название', 'required');
			$this->form_validation->set_rules('yandex_size', 'Размер картинки', 'required');
            $this->form_validation->set_rules('yandex_icon', 'Размера иконок', 'required');
            $this->form_validation->set_rules('yandex_qty', 'Кол-во выводимых фотографий', 'required');
            $this->form_validation->set_rules('yandex_album', 'Альбом', 'required');

		
		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('user/yandex_new_album_view', $data);
		}
		
		elseif ($this->form_validation->run() == TRUE){
            $yandex_login = $_POST["yandex_login"];
            $yandex_name = $_POST["yandex_name"];
            $yandex_size = $_POST["yandex_size"];
            $yandex_icon = $_POST["yandex_icon"];
            $yandex_qty = $_POST["yandex_qty"];
            $yandex_album = $_POST["yandex_album"];
            //Коннектимся и собираем Json-запрос в кеш, чтобы передать его в БД
            $yandex_cache = file_get_contents("http://api-fotki.yandex.ru/api/users/".$yandex_login."/album/".$yandex_album."/photos/?format=json");
            
		$this->load->database();
       	$sql = "INSERT INTO sd_yandex_foto (yandex_login, yandex_name, yandex_album, yandex_size, yandex_icon, yandex_qty, yandex_cache) VALUES(".$this->db->escape($yandex_login).",".$this->db->escape($yandex_name).",".$this->db->escape($yandex_album).",".$this->db->escape($yandex_size).",".$this->db->escape($yandex_icon).",".$this->db->escape($yandex_qty).",".$this->db->escape($yandex_cache).")";	
$this->db->query($sql);	

		$data['alert_title'] = "Альбом успешно добавлен";
        $data['alert'] = "Альбом <b>".$yandex_name."</b> добавлен";	
		$this->load->view('user/alert_view', $data);
        }
		}
		else{redirect('user/panel');}
    ob_end_flush();
							
							}

//функция списка альбомов
public function list_albums()
	{

	$this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
		if ($check == true){
		$this->load->database();
		$data['list_albums']  = $this->db->get("sd_yandex_foto");		
				
				
		$this->load->view('user/list_yandex_view', $data);
		}
		else{redirect('user/panel');}

	}
    
    
//функция редактирования альбома
public function edit($id)
		{
    $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$data['alert'] = "";
		$this->load->database();
		$data['edit_album']  = $this->db->query("SELECT * FROM sd_yandex_foto WHERE ID=".$id." LIMIT 1;");	
					
				
		$this->load->view('user/yandex_edit_album_view', $data);
		}
		else{redirect('user/panel');}
							
							}
    
    
//функция обновления альбома
public function update_album()
		{
    $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
            $yandex_id = $_POST["yandex_id"];        
 $yandex_login = $_POST["yandex_login"];
            $yandex_name = $_POST["yandex_name"];
            $yandex_size = $_POST["yandex_size"];
            $yandex_icon = $_POST["yandex_icon"];
            $yandex_qty = $_POST["yandex_qty"];
            $yandex_album = $_POST["yandex_album"];
                    
            //Коннектимся и собираем Json-запрос в кеш, чтобы передать его в БД
            $yandex_cache = file_get_contents("http://api-fotki.yandex.ru/api/users/".$yandex_login."/album/".$yandex_album."/photos/?format=json");
                    	$sql = "UPDATE sd_yandex_foto SET yandex_login=".$this->db->escape($yandex_login).", yandex_name=".$this->db->escape($yandex_name).", yandex_album=".$this->db->escape($yandex_album).", yandex_size=".$this->db->escape($yandex_size).", yandex_icon=".$this->db->escape($yandex_icon).", yandex_qty=".$this->db->escape($yandex_qty).", yandex_cache=".$this->db->escape($yandex_cache)." WHERE ID='$yandex_id'";	
$this->db->query($sql);	
                    
                    $data['alert_title'] = "Альбом успешно изменен";
                    $data['alert'] = "Альбом <b>".$yandex_name."</b> отредактирован";	
		          $this->load->view('user/alert_view', $data);
	
		}
		else{redirect('user/panel');}
							
							}

//функция работы с Яндек-метрикой
public function metrika()
		{
    ob_start();
     $service = "metrika";
    $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
	if ($check == true){
        $this->load->database();
       	$row = $this->db->query("SELECT * FROM sd_yandex WHERE yandex_service='".$service."' LIMIT 1;");
        $data['edit_options'] = $row->row_array();

		$data['alert'] = "";		
		$this->load->view('user/yandex_metrika_view', $data);
        
		}
		else{redirect('user/panel');}
    ob_end_flush();
							
							}
    
//Обновление данных в Яндекс-фото и Яндекс-метрике
public function update()
		{
    ob_start();
    $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
	if ($check == true){
            
        if($_POST['option_id'] === "foto"){
            $data['alert'] = "";
            $id =  $_POST['option_id'];
            $yandex_login = $_POST['yandex_login'];
            $yandex_size = $_POST['yandex_size'];
            $yandex_icon = $_POST['yandex_icon'];
            $yandex_qty = $_POST['yandex_qty'];
            $yandex_album = $_POST['yandex_parametr'];
            
            //Коннектимся и собираем Json-запрос в кеш, чтобы передать его в БД
            $json = file_get_contents("http://api-fotki.yandex.ru/api/users/".$yandex_login."/album/".$yandex_album."/photos/?format=json");
            $this->load->database();

$sql = "UPDATE sd_yandex SET yandex_login=".$this->db->escape($yandex_login).", yandex_size=".$this->db->escape($yandex_size).", yandex_icon=".$this->db->escape($yandex_icon).", yandex_qty=".$this->db->escape($yandex_qty).", yandex_parametr=".$this->db->escape($yandex_album).", yandex_cache='".$json."' WHERE yandex_service=".$this->db->escape($id)."";
$this->db->query($sql);			
            
		redirect('user/options/success');
                }
        
          if($_POST['option_id'] === "metrika"){
            $data['alert'] = "";
            $id =  $_POST['option_id'];
            $yandex_parametr = $_POST['yandex_parametr'];
            $this->load->database();

$sql = "UPDATE sd_yandex SET yandex_parametr=".$this->db->escape($yandex_parametr)." WHERE yandex_service=".$this->db->escape($id)."";
$this->db->query($sql);	
		
            
		redirect('user/options/success');
                                                }
		}
		else{redirect('user/panel');}
ob_end_flush(); 				
							}

//функция подготовки удаления альбома
public function ready_delete_albums($id)
		{
    $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
$this->load->database();
$query  = $this->db->query("SELECT * FROM sd_yandex_foto WHERE ID=".$id." LIMIT 1;");	
                    
//Вынимаем данные из БД по альбому
$row = $query->row(); 
            
                    $data['delete_descript'] = "Альбом будет удален из БД сайта";
                    $data['what_delete'] = $row->yandex_name;
                     $data['delete_action'] = "user/yandex/delete/";
                    $data['delete_id'] = $row->ID;
		          $this->load->view('user/ready_delete_view', $data);
	
		}
		else{redirect('user/panel');}
							
							}
    
//функция удаления альбома
public function delete($id)   
{
     $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
                    
				$sql = "DELETE FROM sd_yandex_foto WHERE ID=$id";
				$this->db->query($sql);	
                     $data['alert_title'] = 'Удаление альбома';	
    $data['alert'] = '<div class="alert alert-success">Альбом был удален</div>';	
    $this->load->view('user/alert_view', $data);
                    
    }
    else{redirect('user/panel');}
}
    
//Функция Опции Яндекс-фото для альтернативного использования фоток из сервиса
public function options()
		{
    $this->load->model('Singin');
	$session_id_check = $this->session->userdata('session_id');
	$key_check= $this->session->userdata('key');
	$check = $this->Singin->check_login_admin($session_id_check, $key_check);
	
				if ($check == true){
		$data['alert'] = "";
		$this->load->database();
		$data['edit_album']  = $this->db->query("SELECT * FROM sd_yandex WHERE yandex_service='foto' LIMIT 1;");	
					
				
		$this->load->view('user/yandex_edit_options_view', $data);
		}
		else{redirect('user/panel');}
							
							}
    
    
//Успешное выполнение операции
public function success()
		{  
    ob_start();
    $data['alert_title'] = 'Настройка Яндекс сервиса';	
    $data['alert'] = '<div class="alert alert-success">данные обновлены</div>';	
    $this->load->view('user/alert_view', $data);
    ob_end_flush();
 }
	
    
//END CLASS
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/user/options.php */
?>