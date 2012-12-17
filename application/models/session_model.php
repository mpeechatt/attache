<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//
	//	Contact Data Model
	class Session_model extends CI_Model {
		// Private Variables
		private $TABLE = "session";
		private $ID = NULL;

		// Table Variables
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
		//
		//	Create an entry in the table
		public function create() {
			// Get the posted values
			$this->ip_address = $this->input->post( 'ip_address' );
			$this->user_agent = $this->input->post( 'user_agent' );
			$this->last_activity = $this->input->post( 'last_activity' );
			$this->user_id = $this->input->post( 'user_id' );

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
			$this->ip_address = $this->input->post( 'ip_address' );
			$this->user_agent = $this->input->post( 'user_agent' );
			$this->last_activity = $this->input->post( 'last_activity' );
			$this->user_id = $this->input->post( 'user_id' );

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