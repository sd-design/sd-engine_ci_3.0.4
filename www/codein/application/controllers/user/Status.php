<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Status extends CI_Controller {

public function __construct(){
 parent::__construct();
 			$this-> load-> helper('form');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');
}

/* 
DELETE PART
*/


	public function index()
{
ob_start();

$key = $this->session->userdata('key');

	redirect('user/panel');
ob_end_flush();
}

		public function action($id)
{
	ob_start();
	if (!isset($id)){redirect('user/panel');}
if ($id === "hello"){

	$key = $this->session->userdata('key');
	$key2 = $this->session->userdata('key-tmp');
	$i = $this->session->userdata('session_i');
	$data = $this->session->userdata('data');
	echo base64_encode(md5($i))."<br/>";
	echo "key is ".$key."<br/>";
	echo "data is ".$data."<br>".$i."<br/>".$key2;

	}


	else{
	redirect('user/panel');
}
ob_end_flush();
	}

//END CLASS
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/user/options.php */
?>