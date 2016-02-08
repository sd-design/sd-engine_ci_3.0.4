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
    
public function check_password($pwd)
    {

	
		
    }
    
  //END CLASS  
}
