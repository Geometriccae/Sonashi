<?php
class Product_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_products()
    {
        return $this->db->get('product')->result();
    }

    public function add_product($data)
    {
        $this->db->insert('product', $data);
    }

    public function get_product_by_id($id)
    {
        return $this->db->get_where('product', array('product_id' => $id))->row();
    }

    public function update_product($id, $data)
    {
        $this->db->where('product_id', $id);
        $this->db->update('product', $data);
    }

    public function delete_product($id)
    {
        $this->db->delete('product', array('product_id' => $id));
    }
    public function get_product_by_model($model)
    {
        return $this->db->get_where('product', array('model' => $model))->row();
    }
    public function old_get_product_names()
    {
        $query = $this->db->select('product_name, warranty_period')->get('product');
        return $query->result_array();
    }
    public function getProductByName($productName)
    {
        $query = $this->db->get_where('product', array('product_name' => $productName));
        return $query->row_array();
    }

    public function get_product_names($category = null)
    {
        if ($category) {
            $this->db->where('category', $category);
        }
        $query = $this->db->select('product_name, warranty_period')->get('product');
        return $query->result_array();
    }

}
