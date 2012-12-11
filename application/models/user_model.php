<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//
	//	Contact Data Model
	class User_model extends CI_Model {
		// Private Variables
		private $TABLE = "user";

		// Table Variables
		var $ID = NULL;
		var $email = NULL;
		var $password = NULL;
		var $max_resumes = NULL;

		//
		//	Main Constructor
		function __construct() { parent::__construct(); }

		/**************************************************
		 *	CRUD Operations
		 **************************************************/
		public function create() {}
		public function update() {}
		public function delete() {}
	}
?>