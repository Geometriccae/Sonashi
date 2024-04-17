<?php

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }

    public function index()
    {
        if (!$this->session->userdata('admin_uid')) {
        redirect(base_url('admin/index'));

    }
        $data['products'] = $this->Product_model->get_products();
        $this->load->view('includes/header', $page_data);
        $this->load->view('product/index', $data);
        $this->load->view('includes/footer', $page_data);
    }

    public function add()
    {
        if (!$this->session->userdata('admin_uid')) {
            redirect(base_url('admin/index'));

        }
        if ($_POST) {
            $data = array(
                'product_name' => $this->input->post('product_name'),
                'sku_code' => $this->input->post('sku_code'),
                'warranty_period' => $this->input->post('warranty_period')
            );

            $this->Product_model->add_product($data);
            redirect('product');
        } else {
            // Display add product form
            $this->load->view('includes/header', $page_data);
            $this->load->view('product/add');
            $this->load->view('includes/footer', $page_data);
        }
    }

    public function edit($id)
    {
        if (!$this->session->userdata('admin_uid')) {
            redirect(base_url('admin/index'));

        }
        if ($_POST) {
            $data = array(
                'product_name' => $this->input->post('product_name'),
                'sku_code' => $this->input->post('sku_code'),
                'warranty_period' => $this->input->post('warranty_period'),
                'category' => $this->input->post('category')

            );

            $this->Product_model->update_product($id, $data);
            redirect('product');
        } else {
            // Display edit product form
            $data['product'] = $this->Product_model->get_product_by_id($id);
            $this->load->view('includes/header', $page_data);
            $this->load->view('product/edit', $data);
            $this->load->view('includes/footer', $page_data);
        }
    }

    public function delete($id)
    {
        $this->Product_model->delete_product($id);
        redirect('product');
    }
}
