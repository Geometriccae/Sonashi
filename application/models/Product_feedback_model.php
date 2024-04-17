<?php
class Product_feedback_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_feedback($id = null)
    {
        if ($id === null) {
            $query = $this->db->get('product_feedback');
            return $query->result_array();
        }

        $query = $this->db->get_where('product_feedback', array('id' => $id));
        return $query->row_array();
    }

    public function create_feedback($data)
    {
        $this->db->insert('product_feedback', $data);
        return $this->db->insert_id();
    }

    public function update_feedback($id, $data)
    {
        $this->db->where('id', $id);
        $result = $this->db->update('product_feedback', $data);
        return $result;

    }

    public function delete_feedback($id)
    {
        $this->db->delete('product_feedback', array('id' => $id));
    }

    public function last_insert_id()
    {
        return $this->db->insert_id();
    }
    public function get_feedback_by_ticket_id($ticket_id)
    {
        // Function to get feedback data by ticket_id
        $query = $this->db->get_where('product_feedback', array('ticket_id' => $ticket_id));
        return $query->row_array();
    }
}
