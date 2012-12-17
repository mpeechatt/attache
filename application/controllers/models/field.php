<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//
	//	Contact Data Model
	class Field extends CI_Controller {
		//
		//	CONSTRUCTOR
		public function __construct() {
			// Call the parent to initialize this object
			parent::__construct();

			// Load the necessary model
			$this->load->model( 'Field_model', '', TRUE );
		}

		/**************************************************
		 *	Page Views
		 **************************************************/
		public function index() {}
	}
?>