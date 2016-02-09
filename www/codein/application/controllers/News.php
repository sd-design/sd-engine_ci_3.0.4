<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

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
        $data['title_widget'] = $this->Menu->group_title_item(5);
        $data['items_widget'] = $this->Menu->menu_item(5);
        $data['list_news']  = $this->db->query("SELECT * FROM sd_post");
        
$data['page_title'] = "Новости компании";

		$this->load->view('template/header_view');
		$this->load->view('template/menu_view');
        $this->load->view('template/news_body_view',$data);
		$this->load->view('template/footer_view');

	}
    
/// вывод отдельной новости
public function read($id)
	{
	if(!isset($id)){show_404();}
    $this->load->model('Menu');
    $data['title_menu'] = $this->Menu->group_title_item(2);
    $data['items_menu'] = $this->Menu->menu_item(2);
    $data['page_marker'] = "news";
    
$this->load->model('Page');
$data['page_item'] = $this->Page->open_url($id);

		$this->load->view('template/header_view');
        $this->load->view('template/menu_view');
		$this->load->view('template/single_body_view',$data);
		$this->load->view('template/footer_view');
	}    

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>