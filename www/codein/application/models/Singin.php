<?php class Singin extends CI_Model {

public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		
    }

public function check_login($session_id_check,$key_check)
    {
$this->load->database();
	$query = $this->db->query("SELECT login, session_status, session_i, session_key FROM sd_session WHERE session_i='$session_id_check'");
	$row = $query->row_array();
	$session_key = $row['session_key'];
	//echo $session_key."<br/>";
	$session_status = $row['session_status'];
	
	$session_i = $row['session_i'];
if (($key_check === $session_key) and ($session_id_check === $session_i))
{$check=TRUE;return $check;}
else{$check=FALSE;return $check;}
    }
    
    
    public function check_login_admin($session_id_check,$key_check)
    {
$this->load->database();
	$query = $this->db->query("SELECT login, session_status, session_i, session_key FROM sd_session WHERE session_i='$session_id_check'");
	$row = $query->row_array();
	$session_key = $row['session_key'];
	$session_login = $row['login'];
	//echo $session_key."<br/>";
	$session_status = $row['session_status'];
	
	$session_i = $row['session_i'];
	
		if (($key_check === $session_key) and ($session_id_check === $session_i))
			{
				$query2 = $this->db->query("SELECT user_role FROM users WHERE login='$session_login'");
				$row2 = $query2->row_array();
				
				if ($row2['user_role']=== "administrator"){$check=TRUE;return $check;} 
				else{$check=FALSE;return $check; }
	
				
			}
			
		else{
		$check=FALSE;return $check;

		}
		
    }
    
  //END CLASS  
}
	?>