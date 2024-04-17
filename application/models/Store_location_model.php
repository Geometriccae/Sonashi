<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_location_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load database in the constructor
    }

    // Fetch all locations from the store_location table
    public function get_locations() {
        $query = $this->db->get('store_location');
        return $query->result_array();
    }
    public function get_locations_with_routes() {
        $this->db->select('location, routes');
        $query = $this->db->get('store_location');
        return $query->result_array();
    }
      // Create operation
      public function create_location($data)
      {
          $this->db->insert('store_location', $data);
          return $this->db->insert_id();
      }
  
      // Read operation
      public function get_location($id)
      {
          return $this->db->get_where('store_location', array('id' => $id))->row_array();
      }
  
      // Update operation
      public function update_location($id, $data)
      {
          $this->db->where('id', $id);
          $this->db->update('store_location', $data);
      }
  
      // Delete operation
      public function delete_location($id)
      {
          $this->db->delete('store_location', array('id' => $id));
      }
  
      // Get all locations
      public function get_all_locations()
      {
          return $this->db->get('store_location')->result_array();
      }
    // You can add more methods here for other operations like adding, updating, or deleting locations if needed
}
