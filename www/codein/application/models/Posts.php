<?php class Posts extends CI_Model {

public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		
    }

public function get_news($id,$qty)
 {
$query = $this->db->query("SELECT * FROM sd_post WHERE category_id='$id' ORDER BY post_time DESC LIMIT ".$qty."");
return $query;

    }
  ///выбираем записи постранично  
 public function get_news_page($id,$page)
 {
  //Определяем кол-во выводимых записей
        $query_option = $this->db->query("SELECT * FROM sd_options LIMIT 1");
        $row = $query_option->row_array();
        $limit_post = $row['q_posts'];
        $limit_2 = ($page*$limit_post);
        $limit_1 = ($limit_2 - ($limit_post - 1))-1;
        
        $query  = $this->db->query("SELECT * FROM sd_post WHERE category_id=4 ORDER BY post_time DESC LIMIT ".$limit_1.",".$limit_post."");
     
     
return $query;

    }
    
  //END CLASS  
}
	?>