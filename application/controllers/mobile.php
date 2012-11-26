<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile extends CI_Controller {
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view( 'template-top' );
		$this->load->view( 'bin/mobile/index' );
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */