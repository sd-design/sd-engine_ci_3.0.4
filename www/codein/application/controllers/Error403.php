<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error403 extends CI_Controller {

public function __construct()
	{
	parent::__construct();

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

	$data['page_title'] = "Страница не найдена";
	$data['head_page'] = "УПС-ССС! ОШИБОЧКА!";
	$data['message'] = "Обычно это означает, что вы не имеете прав для просмотра этой страницы...";
	$this->load->view('template/header_view',$data);
	$this->load->view('template/403_view',$data);
	$this->load->view('template/footer_view');
	}
	

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>