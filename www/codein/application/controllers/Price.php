<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Price extends CI_Controller {

public function __construct()
	{
	parent::__construct();
	$this->load->database();

	}

	public function index()
	{
        $this->load->model('Menu');
        $data['title_menu'] = $this->Menu->group_title_item(2);
        $data['items_menu'] = $this->Menu->menu_item(2);
        
$data['page_title'] = "Прайс-лист";
$data['page_marker'] = "price";

		$this->load->view('template/header_view');
		$this->load->view('template/menu_view');
        $this->load->view('template/body_view', $data);
		$this->load->view('template/footer_view');

	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>