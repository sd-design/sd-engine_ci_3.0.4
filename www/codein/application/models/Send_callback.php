<?php class Send_callback extends CI_Model {

public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
$this->load->library('email');
		
    }

public function go_mail($name, $phone, $time)
 {
 

    $query = $this->db->query("SELECT * FROM sd_feedback WHERE part='feedback' LIMIT 1");
	$row = $query->row_array();
    $smtp_host = $row['smtp_host'];
    $smtp_port = $row['smtp_port'];
    $smtp_user = $row['smtp_user'];
    $subscribe = $row['subscribe'];
    $message = "Обратная связь (заказ звонка):\nИмя - ".$name."\nТелефон: ".$phone."\n".$time;
    
$config['protocol'] = 'smtp';
$config['smtp_host'] =  "ssl://".$smtp_host; 
$config['smtp_port'] =  $smtp_port;   
$config['smtp_user'] = $smtp_user;
$config['smtp_pass'] = "Ffhjy&Vjbctq";
$config['timeout'] = 5;
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
$this->email->initialize($config);    
    
$this->email->from($smtp_user, $subscribe);
$this->email->to('chessman@yandex.ru'); 
$this->email->subject( $subscribe);
$this->email->message($message);	

$this->email->send();
$this->email->print_debugger();
    
    
    

    }
    
    
  //END CLASS  
}
	?>