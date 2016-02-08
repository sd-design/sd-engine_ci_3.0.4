<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Call extends CI_Controller {

public function __construct()
	{
	parent::__construct();
	$this->load->database();

	}

	public function index()
	{
$data['page_title'] = "Заказать звонок";
$data['page_marker'] = "contact";

		$this->load->view('template/header_view');
		$this->load->view('template/menu_view');
        $this->load->view('template/call_body_view',$data);
		$this->load->view('template/footer_view');

	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>