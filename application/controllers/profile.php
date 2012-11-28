<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view( "bin/profile/profile" );
		$this->load->view( "bin/profile/banner" );
		$this->load->view( "bin/resume" );
		$this->load->view( "inc/footer" );
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/profile.php */