<?php
class Project_Category_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Project_Category_model');
    }

    public function index() {
        $data['categories'] = $this->Project_Category_model->get_categories();
        $this->load->view('includes/header',$page_data);
        $this->load->view('deal/category_list', $data);
        $this->load->view('includes/footer', $page_data);
    }

    public function add_category() {
        if ($this->input->post()) {
            $category_data = array(
                'category' => $this->input->post('category')
            );
            $this->Project_Category_model->create_category($category_data);
            redirect('Masterdata/Project_Category_controller/index');
        } else {
            $this->load->view('includes/header',$page_data);
            $this->load->view('deal/add_category');
            $this->load->view('includes/footer', $page_data);
        }
    }

    public function edit_category($id) {
        if ($this->input->post()) {
            $category_data = array(
                'category' => $this->input->post('category')
            );
            $this->Project_Category_model->update_category($id, $category_data);
            redirect('Masterdata/Project_Category_controller/index');
        } else {
            $data['category'] = $this->Project_Category_model->get_category_by_id($id);
            $this->load->view('includes/header',$page_data);
            $this->load->view('deal/edit_category', $data);
            $this->load->view('includes/footer', $page_data);
        }
    }

    public function delete_category($id) {
        $this->Project_Category_model->delete_category($id);
        redirect('Masterdata/Project_Category_controller/index');
    }
}

?>