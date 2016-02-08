<?php class News extends CI_Model {

public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		
    }

public function get_news($id,$qty)
 {
$this->load->database();
	$query = $this->db->query("SELECT * FROM sd_post WHERE category_id='$id' ORDER BY post_time DESC LIMIT ".$qty."");
return $query;

    }
    
    
  //END CLASS  
}
	?>