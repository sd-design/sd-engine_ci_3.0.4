<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uslugi extends CI_Controller {

public function __construct()
	{
	parent::__construct();
	$this->load->database();

	}

	public function index()
	{
$data['page_title'] = "Услуги";
$data['page_marker'] = "uslugi";

		$this->load->view('template/header_view');
		$this->load->view('template/menu_view');
        $this->load->view('template/gallery_body_view',$data);
		$this->load->view('template/footer_view');

	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>