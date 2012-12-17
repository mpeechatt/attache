<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//
	//	Contact Data Model
	class Resume_model extends CI_Model {
		// Private Variables
		private $TABLE = "resume";
		private $ID = NULL;

		// Table Variables
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
		//
		//	Create an entry in the table
		public function create() {
			// Get the posted values
			$this->user_id = $this->input->post( 'user_id' );
			$this->name = $this->input->post( 'name' );
			$this->description = $this->input->post( 'description' );
			$this->style = $this->input->post( 'style' );
			$this->content = $this->input->post( 'content' );

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
			$this->name = $this->input->post( 'name' );
			$this->description = $this->input->post( 'description' );
			$this->style = $this->input->post( 'style' );
			$this->content = $this->input->post( 'content' );

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