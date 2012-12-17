<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//
	//	Contact Data Model
	class User_model extends CI_Model {
		// Private Variables
		private $TABLE = "user";
		private $ID = NULL;

		// Table Variables
		var $email = NULL;
		var $password = NULL;
		var $max_resumes = NULL;

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
			$this->email = $this->input->post( 'email' );
			$this->password = $this->input->post( 'password' );
			$this->max_resumes = 1;

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
			$this->email = $this->input->post( 'email' );
			$this->password = $this->input->post( 'password' );
			$this->max_resumes = 1;

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