<?php
class LeadServicesRequired_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('LeadServicesRequired_model');
    }

    public function index() {
        $data['services_required'] = $this->LeadServicesRequired_model->get_all_services_required();
        $this->load->view('includes/header', $page_data);
        $this->load->view('admin/lead_services_required/index', $data);
        $this->load->view('includes/footer', $page_data);
    }

    public function add_service_required() {
        if ($this->input->post()) {
            $service_required_data = array(
                'ServicesRequired' => $this->input->post('services_required')
            );
            $this->LeadServicesRequired_model->create_service_required($service_required_data);
            redirect('Masterdata/LeadServicesRequired_controller/index');
        } else {
            $this->load->view('includes/header', $page_data);
            $this->load->view('admin/lead_services_required/add');
            $this->load->view('includes/footer', $page_data);
        }
    }

    public function edit_service_required($id) {
        if ($this->input->post()) {
            $service_required_data = array(
                'ServicesRequired' => $this->input->post('services_required')
            );
            $this->LeadServicesRequired_model->update_service_required($id, $service_required_data);
            redirect('Masterdata/LeadServicesRequired_controller/index');
        } else {
            $data['service_required'] = $this->LeadServicesRequired_model->get_service_required_by_id($id);
            $this->load->view('includes/header', $page_data);
            $this->load->view('admin/lead_services_required/edit', $data);
            $this->load->view('includes/footer', $page_data);
        }
    }

    public function delete_service_required($id) {
        $this->LeadServicesRequired_model->delete_service_required($id);
        redirect('Masterdata/LeadServicesRequired_controller/index');
    }
}
?>
