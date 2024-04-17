<?php
class Services_required_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Services_required_model');
    }

    public function index() {
        $data['required_list'] = $this->Services_required_model->get_all_required();
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/required_list', $data);
        $this->load->view('includes/footer', $page_data);
    }

    public function add_required() {
        if ($this->input->post()) {
            $required_data = array(
                'Required' => $this->input->post('required')
            );
            $this->Services_required_model->create_required($required_data);
            redirect('Masterdata/Services_required_controller/index');
        } else {
            $this->load->view('includes/header',$page_data);
            $this->load->view('deal/add_required');
            $this->load->view('includes/footer', $page_data);
        }
    }

    public function edit_required($id) {
        if ($this->input->post()) {
            $required_data = array(
                'Required' => $this->input->post('required')
            );
            $this->Services_required_model->update_required($id, $required_data);
            redirect('Masterdata/Services_required_controller/index');
        } else {
            $data['required'] = $this->Services_required_model->get_required_by_id($id);
            $this->load->view('includes/header',$page_data);
            $this->load->view('deal/edit_required', $data);
            $this->load->view('includes/footer', $page_data);
        }
    }

    public function delete_required($id) {
        $this->Services_required_model->delete_required($id);
        redirect('Masterdata/Services_required_controller/index');
    }
}

?>