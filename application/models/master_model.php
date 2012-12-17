<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//
	//	Contact Data Model
	class Master_model extends CI_Model {
		// Private Variables
		private $TABLE = "master";
		private $ID = NULL;

		// Table Variables
		var $user_id = NULL;
		var $header_id = NULL;
		var $page_id = NULL;

		//
		//	Main Constructor
		function __construct() { parent::__construct(); }

		/**************************************************
		 *	CRUD Operations
		 **************************************************/
		//
		//	Create an entry in the table
		public function create() {
			// Get the posted values
			$this->user_id = $this->input->post( 'user_id' );
			$this->header_id = $this->input->post( 'header_id' );
			$this->page_id = $this->input->post( 'page_id' );
			
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
			$this->user_id = $this->input->post( 'user_id' );
			$this->header_id = $this->input->post( 'header_id' );
			$this->page_id = $this->input->post( 'page_id' );

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