<?php class Page extends CI_Model {

public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		
    }

public function open($id_page)
 {

	$query = $this->db->query("SELECT * FROM sd_post WHERE id='$id_page'");
return $query;

    }
    
public function open_url($id_url)
 {

	$query = $this->db->query("SELECT * FROM sd_post WHERE post_url='$id_url'");
return $query;

    }
    
    
  //END CLASS  
}
	?>