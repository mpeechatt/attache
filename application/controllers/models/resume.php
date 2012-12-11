<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//
	//	Contact Data Model
	class Resume extends CI_Controller {
		//	CONSTRUCTOR
		public function __construct() {
			// Call the parent to initialize this object
			parent::__construct();

			// Load the necessary model
			$this->load->model( 'Resume_model', '', TRUE );
		}

		/**************************************************
		 *	Page Views
		 **************************************************/
		public function index() {}
		public function save() {}
		public function delete() {}
	}
?>