<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

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
	
	}
	
		public function read($id)
	{
	if(!isset($id)){show_404();}
	$this->load->database();
$sql = "SELECT * FROM sd_post WHERE post_url = ?";
$query = $this->db->query($sql, array($id));
$error = $this->db->error();
$error_id = $query->num_rows();
if ($error_id == 0){show_404();}
foreach ($query->result_array() as $row)
{
	$data['page_title'] = $row['post_name'];
    $data['post_name'] = $row['post_name'];
    $data['post_text'] = $row['post_text'];
    $data['post_time'] = $row['post_time'];
    $data['post_autor'] = $row['post_autor'];

}

		$this->load->view('template/header_view',$data);
		$this->load->view('template/post_view',$data);
		$this->load->view('template/footer_view',$data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>