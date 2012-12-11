<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//
	//	Contact Data Model
	class Field_model extends CI_Model {
		// Private Variables
		private $TABLE = "field";

		// Table Variables
		var $ID = NULL;
		var $master_id = NULL;
		var $parent_id = NULL;
		var $type = NULL;
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