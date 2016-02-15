<?php class Contact extends CI_Model {

public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }
//Функция запроса контактов для страницы контактов
public function get_contacts()
 {

	$result_parse = $this->db->query("SELECT * FROM sd_options LIMIT 1;");
   return $result_parse;

    }    
    
  //END CLASS  
}
	?>