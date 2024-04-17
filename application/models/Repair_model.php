<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repair_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load necessary database, libraries, etc.
        $this->load->database();
    }

    public function get_feedback() {
        // Fetch feedback data from your database or wherever it's stored
        // This method should return an array of feedback data
        // Example:
        // $feedback_data = $this->db->get('product_feedback')->result_array();
        // return $feedback_data;
    }

    public function get_status_counts($agent_name) {
        // Fetch status counts for the given agent name
        $this->db->select('status, COUNT(*) as count');
        $this->db->from('product_feedback');
        $this->db->where('agent_name', $agent_name);
        $this->db->group_by('status');
        $query = $this->db->get();
        $status_counts = $query->result_array();

        // Organize the status counts into an associative array
        $counts = array();
        foreach ($status_counts as $row) {
            $counts[$row['status']] = $row['count'];
        }

        return $counts;
    }

    // Other model methods...
}
