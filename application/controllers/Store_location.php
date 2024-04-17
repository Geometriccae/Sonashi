<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store_location extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('store_location_model');
    }

    // Create operation
    public function create()
    {
        // Handle form submission
        if ($_POST) {
            $data = array(
                'location' => $this->input->post('location'),
                'routes' => $this->input->post('routes')
            );

            $this->store_location_model->create_location($data);
            redirect('store_location/create');
        }

        // Load create view
        $this->load->view('includes/header', $page_data);
        $this->load->view('store_location/create');
        $this->load->view('includes/footer', $page_data);
    }

    // Read operation
    public function index()
    {
        if (!$this->session->userdata('admin_uid')) {
            redirect(base_url('admin/index'));

        }
        $data['locations'] = $this->store_location_model->get_all_locations();
        $this->load->view('includes/header', $page_data);
        $this->load->view('store_location/index', $data);
        $this->load->view('includes/footer', $page_data);
    }

    // Update operation
    public function update($id)
    {
        if (!$this->session->userdata('admin_uid')) {
            redirect(base_url('admin/index'));

        }
        if ($_POST) {
            $data = array(
                'location' => $this->input->post('location'),
                'routes' => $this->input->post('routes')
            );

            $this->store_location_model->update_location($id, $data);
            redirect('store_location/index');
        }

        $data['location'] = $this->store_location_model->get_location($id);
        $this->load->view('includes/header', $page_data);
        $this->load->view('store_location/edit', $data);
        $this->load->view('includes/footer', $page_data);
    }

    // Delete operation
    public function delete($id)
    {
        $this->store_location_model->delete_location($id);
        redirect('store_location/index');
    }
}
?>