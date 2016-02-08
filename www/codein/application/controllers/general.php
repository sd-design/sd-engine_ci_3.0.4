<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General extends CI_Controller {

public function __construct()
	{
	parent::__construct();
	$this->load->database();

	}

	public function index()
	{
$data['page_title'] = "Все разделы";
$data['list_category']  = $this->db->query("SELECT * FROM sd_category");

		$this->load->view('template/header_view',$data);
		$this->load->view('template/list_category_view',$data);
		$this->load->view('template/footer_view',$data);

	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>