<?php class Yandex_foto extends CI_Model {

public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		
    }

public function get_foto()
 {

	$query = $this->db->query("SELECT * FROM sd_yandex WHERE yandex_service='foto' LIMIT 1");
    $row = $query->row_array();
    $yandex_cache = $row['yandex_cache'];
    $result_parse = json_decode(utf8_decode($yandex_cache), true); 
return $result_parse;

    }
    
//Функция запроса конкретного альбома
    public function get_pictures($id)
 {

	$query = $this->db->query("SELECT * FROM sd_yandex_foto WHERE ID='$id' LIMIT 1");
    $row = $query->row_array();
    $yandex_cache = $row['yandex_cache'];
    $yandex_name = $row['yandex_name'];
    $result_parse = json_decode(utf8_decode($yandex_cache), true); 
return $result_parse;
return $yandex_name;

    }
    //Функция запроса названия конкретного альбома
      public function get_name($id)
 {

	$query = $this->db->query("SELECT * FROM sd_yandex_foto WHERE ID='$id' LIMIT 1");
    $row = $query->row_array();
    $yandex_name = $row['yandex_name'];
  return $yandex_name;

    }  
    
//запрос на альбомы пользователя    
public function get_albums()
 {

	$query = $this->db->get("sd_yandex_foto ");
return $query;

    }
    
    
  //END CLASS  
}
	?>