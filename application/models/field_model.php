<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//
	//	Contact Data Model
	class Field_model extends CI_Model {
		// Private Variables
		private $TABLE = "field";
		private $ID = NULL;

		// Table Variables
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
		//
		//	Create an entry in the table
		public function create() {
			// Insert the information
			$this->db->insert( $this->TABLE, $this );

			// Store the inserted ID
			$this->ID = $this->db->insert_id();
		}

		//
		//	Update the entry in the table
		public function update() {
			// Get the posted values
			$this->ID = $this->input->post( 'ID' );
			
			// Update the information
			$this->db->where( 'ID', $this->ID );
			$this->db->update( $this->TABLE, $this );
		}

		//
		//	Delete this entry from the table
		public function delete() {
			// Get the posted values
			$this->ID = $this->input->post( 'ID' );

			// Delete an entry from the table
			$this->db->delete( $this->TABLE, array( 'ID' => $this->ID ) );
		}
	}
?>