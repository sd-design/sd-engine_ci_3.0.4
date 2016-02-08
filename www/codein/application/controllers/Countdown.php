<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Countdown extends CI_Controller {

public function __construct()
	{
	
	parent::__construct();
		$this->load->database();
	}

	public function index()
	{

	}
	
		
		public function view($id)
	{
	if(!isset($id)){show_404();}

$sql  = "SELECT * FROM sd_countdown WHERE url=?";

$query = $this->db->query($sql, array($id));
$error = $this->db->_error_message();
foreach ($query->result_array() as $row)
{
    $data['page_title'] = $row['title'];
    $data['countdown_descript'] = $row['descript'];
    $data['countdown_timer'] = $row['timer'];    

}
		$this->load->view('template/header_countdown_view',$data);
		$this->load->view('template/countdown_view',$data);
		$this->load->view('template/footer_view',$data);

	}	
		
		
		
		
		//END
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>