<?php class Log extends CI_Model {

public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		
    }

public function check_user($user)
    {
$this->load->database();
	$query = $this->db->query("SELECT login FROM users WHERE login='$user' LIMIT 1");

if ($query == null)
{return false;}
if ($query == true)
{return true;}
}
    
public function check_pwd($login_check, $pwd)
    {
        $this->load->database();
$query = $this->db->query("SELECT * FROM users WHERE login='".$login_check."' LIMIT 1");
if ($query == null){return FALSE;}

if ($query == true){
foreach ($query->result() as $row)
{
        $pass = $row->pwd;
}
if($pwd === $pass){return true;}
}
		
    }


    public function add_keys($user)
    {
        $session_id = $this->session->userdata('session_i');
        $key = base64_encode(md5($session_id));
        $token = md5($key.$user);
$newdata = array(
        'user'  => $user,
        'key'     => $key,
        'token' => $token
);
// Добавляем данные в сессию
$this->session->set_userdata($newdata);
/*Регистрируем сессию в БД */
$ip = $_SERVER['REMOTE_ADDR'];
$time_reg = date("Y-m-d H:i:s");              
  $sql = "INSERT INTO sd_session (login, session_status, session_i, session_key, time_reg, ip) VALUES(".$this->db->escape($user).",".$this->db->escape(true).",".$this->db->escape($session_id).",".$this->db->escape($key).",".$this->db->escape($time_reg).",".$this->db->escape($ip).")";   
$this->db->query($sql);              
                
              
/*$query_check_user = $this->db->query("SELECT * FROM users WHERE login = ".$this->db->escape($login_check)." and pwd = ".$this->db->escape($pwd_check)."");
$userdata = $query_check_user->row_array();

// Если пользователь найден
if (@$userdata['login'] == $login_check and @$userdata['pwd'] == $pwd_check) {
$check= TRUE;
// Создаем массим с данными сессии

$session_id = $this->session->userdata('session_i');
$time_reg = date("Y-m-d H:i:s");
$key = base64_encode(md5($session_id));
$authdata = array(
'login' => $login_check,
'logged_in' => true,
'key' => $key,
'ip' => $ip
);
*/
// Добавляем данные в сессию
//$this->session->set_userdata($authdata);
/*Регистрируем сессию в БД */
/*
$sql = "INSERT INTO sd_session (login, session_status, session_i, session_key, time_reg, ip) VALUES(".$this->db->escape($login_check).",".$this->db->escape(true).",".$this->db->escape($session_id).",".$this->db->escape($key).",".$this->db->escape($time_reg).",".$this->db->escape($ip).")";   
$this->db->query($sql);*/

        
    }
    
  //END CLASS  
}
