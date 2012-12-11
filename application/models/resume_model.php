<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//
	//	Contact Data Model
	class Resume_model extends CI_Model {
		// Private Variables
		private $TABLE = "resume";

		// Table Variables
		var $ID = NULL;
		var $user_id = NULL;
		var $name = NULL;
		var $description = NULL;
		var $style = NULL;
		var $content = NULL;

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