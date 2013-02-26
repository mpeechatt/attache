<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view( "profile/profile" );
		$this->load->view( "profile/banner" );
		// $this->load->view( "resume" );
		$this->load->view( "inc/footer" );
	}

	/**
	 * New Version of the Profile
	 */
	public function v2()
	{
		// Mock objects for the page
		$this->data = array(
			'resumes' => array(
				array( 'name' => 'Resume 1' ),
				array( 'name' => 'Resume 2' ),
				array( 'name' => 'Resume 3' ),
				array( 'name' => 'Resume 4' )
			),
			'user' => array(
				'email' => 'jpitzeruse@gmail.com',
				'max_resumes' => 0
			),
			'master_resume' => $this->load->view( 'profile/v2/resumes/jeremy-resume', '', TRUE )
		);

		$this->load->view( "profile/v2/template", $this->data );
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/profile.php */