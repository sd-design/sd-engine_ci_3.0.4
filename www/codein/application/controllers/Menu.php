<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

public function __construct()
	{
	parent::__construct();
    $this->load->helper('url');
	$this->load->database();

	}

	public function index()
	{
$menu["news"][0] = "Programmer1111"; 
$menu["news"][1] = "Programmer"; 
$menu["news"][2] = "PR"; 
$menu["news"][3] = "Office Manager"; 
$menu["contact"][0] = "Contact Manager";  
$menu["contact"][1] = "Contact calback"; 
$menu["blog"][0] = "blog 1"; 
$menu["blog"][1] = "blog 2"; 
        $data['counter'] = count($menu);
        $data['menu'] = $menu['news'];
        $data['companies'] = $menu;
        $this->load->view('menu_test',$data);
		

	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>