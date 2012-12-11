<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//
	//	Contact Data Model
	class Session_model extends CI_Model {
		// Private Variables
		private $TABLE = "session";

		// Table Variables
		var $ID = NULL;
		var $ip_address = NULL;
		var $user_agent = NULL;
		var $last_activity = NULL;
		var $user_id = NULL;

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