<?php class Menu extends CI_Model {

public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		
    }

public function menu_item($item_group)
 {

	$query = $this->db->query("SELECT * FROM sd_items WHERE item_group='$item_group'");
return $query;

    }
    
    public function group_title_item($id_group)
{
    $this->load->database();
    $query_group_id =$this->db->query("SELECT group_title FROM sd_items_group WHERE ID='$id_group'");
    $row = $query_group_id->row_array();
	$title_menu = $row['group_title'];
    return $title_menu;
       }
    
  //END CLASS  
}
	?>