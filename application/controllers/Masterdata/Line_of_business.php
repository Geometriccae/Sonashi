<?php
class Line_of_business extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('line_of_business_model');
    }

    public function index() {
        $data['lines_of_business'] = $this->line_of_business_model->get_all_lines_of_business();
        $this->load->view('includes/header',$page_data);
        $this->load->view('admin/line_of_business/table', $data);
        $this->load->view('includes/footer',$page_data);
    }
    public function create_form() {
        $this->load->view('includes/header',$page_data);
        $this->load->view('admin/line_of_business/create');
        $this->load->view('includes/footer',$page_data);
    }
    
    public function create() {
        $data = array(
            'line_of_business' => $this->input->post('line_of_business')
        );
        $this->line_of_business_model->create_line_of_business($data);
        redirect('Masterdata/line_of_business');
    }

    public function edit($id) {
        $data['line_of_business'] = $this->line_of_business_model->get_line_of_business($id);
        $this->load->view('includes/header',$page_data);
        $this->load->view('admin/line_of_business/edit', $data);
        $this->load->view('includes/footer',$page_data);
    }

    public function update($id) {
        $data = array(
            'line_of_business' => $this->input->post('line_of_business')
        );
        $this->line_of_business_model->update_line_of_business($id, $data);
        redirect('Masterdata/line_of_business');
    }

    public function delete($id) {
        $this->line_of_business_model->delete_line_of_business($id);
        redirect('Masterdata/line_of_business');
    }
}
?>
