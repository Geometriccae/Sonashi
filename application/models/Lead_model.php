<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_model extends CI_Model {

    public function get_all_leads() {
        $query = $this->db->get('lead');
        return $query->result_array();
    }

    public function add_lead($data) {
        $this->db->insert('lead', $data);
        return $this->db->insert_id();
    }

    public function get_lead($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('lead');
        return $query->row_array();
    }

    public function update_lead($id, $data) {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('lead');
        return $this->db->affected_rows() > 0;
    }

    public function delete_lead($id) {
        $this->db->where('id', $id);
        $this->db->delete('lead');
        return $this->db->affected_rows() > 0;
    }
    public function get_lead_sources() {
        // Assuming you have a table named 'lead_sources' in your database
        // and it has a column 'source_name' that stores the lead source names.
        $query = $this->db->select('source_name')
                          ->from('lead_source')
                          ->get();

        if ($query->num_rows() > 0) {
            return $query->result(); // Return an array of lead sources.
        } else {
            return array(); // Return an empty array if no lead sources found.
        }
    }
  public function get_lead_status() {
    // Assuming you have a table named 'lead_status' in your database
    // and it has a column 'status_name' that stores the lead status names.
    $query = $this->db->select('status_name')
                      ->from('lead_status')
                      ->get();

    if ($query->num_rows() > 0) {
        return $query->result(); // Return an array of lead statuses.
    } else {
        return array(); // Return an empty array if no lead statuses found.
    }
}
public function get_total_leads() {
    return $this->db->count_all('lead');
}

public function get_upcoming_followup() {
    $today = date('Y-m-d');
    $this->db->select('follow_up_date');
    $this->db->from('lead');
    $this->db->where('follow_up_date >', $today);
    $this->db->order_by('follow_up_date', 'ASC');
    $this->db->limit(1);
    $query = $this->db->get();
    return $query->row('follow_up_date');
}
public function get_contact_names() {
    return $this->db->select('name, contact_no, company')->get('lead')->result();
}
public function getLeadsForCurrentMonth() {
    $this->db->select('name, company, follow_up_date');
    $this->db->from('lead');
    $this->db->where("DATE_FORMAT(follow_up_date, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m')", null, false);
    $query = $this->db->get();
    return $query->result();
}


public function getLeadsForPreviousMonth() {
    $this->db->select('name, company, follow_up_date');
    $this->db->from('lead');
    $this->db->where("DATE_FORMAT(follow_up_date, '%Y-%m') = DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 1 MONTH), '%Y-%m')", null, false);
    $query = $this->db->get();
    return $query->result();
}
public function countLeadsForCurrentMonth() {
    $this->db->select('COUNT(*) as count');
    $this->db->from('lead');
    $this->db->where("DATE_FORMAT(follow_up_date, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m')", null, false);
    $query = $this->db->get();
    return $query->row()->count;
}

public function countLeadsForPreviousMonth() {
    $this->db->select('COUNT(*) as count');
    $this->db->from('lead');
    $this->db->where("DATE_FORMAT(follow_up_date, '%Y-%m') = DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 1 MONTH), '%Y-%m')", null, false);
    $query = $this->db->get();
    return $query->row()->count;
}
public function countTodaysFollowUp() {
    $today = date('Y-m-d');
    $this->db->where('follow_up_date', $today);
    $query = $this->db->get('lead');
    return $query->num_rows();
}
public function edit_lead($id, $data) {
    $this->db->where('id', $id);
    $this->db->set($data);
    $this->db->update('lead');
    return $this->db->affected_rows() > 0;
}

}

