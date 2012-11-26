<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Support extends CI_Controller {
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view( 'template-top' );
		$this->load->view( 'bin/support/index' );
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */