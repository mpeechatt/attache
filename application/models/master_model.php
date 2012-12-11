<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//
	//	Contact Data Model
	class Master_model extends CI_Model {
		// Private Variables
		private $TABLE = "master";

		// Table Variables
		var $ID = NULL;
		var $user_id = NULL;
		var $header_id = NULL;
		var $page_id = NULL;

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