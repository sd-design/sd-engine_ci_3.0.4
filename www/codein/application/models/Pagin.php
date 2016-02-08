<?php class Pagin extends CI_Model {

public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		
    }

public function create_pager($id)
 {
    $this->load->database();
//Определяем кол-во выводимых записей
        $query_option = $this->db->query("SELECT * FROM sd_options LIMIT 1");
        $row = $query_option->row_array();
        $limit_post = $row['q_posts'];
    
	$query = $this->db->query("SELECT * FROM sd_post WHERE category_id='$id'");
    $this->db->count_all_results('sd_post');
    $this->db->like('category_id', $id);
    $this->db->from('sd_post');
    $post_qty = $this->db->count_all_results(); 
    $qty = ceil($post_qty/$limit_post);
return $qty;

    }
    
 
    
  //END CLASS  
}
	?>