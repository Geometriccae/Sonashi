<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function __construct() {
        parent::__construct();
        $this->load->model('product_feedback_model');
    }
	public function index() {
        if ($this->input->post()) {
            $email = $this->input->post('email_id');
            $password = sha1($this->input->post('password'));
    
            $data = $this->db->get_where('users', array(
                'email_id' => $email,
                'password' => $password,
                'account_status' => 1
            ))->result_array();
    
            if (count($data) >= 1) {
                $uid = $data[0]['id'];
                $first_name = $data[0]['first_name'];
                $last_name = $data[0]['last_name'];
                $email = $data[0]['email_id'];
                $user_type = $data[0]['type'];
                $full_name = $data[0]['full_name']; // Retrieve the "full_name" column value
    
                $this->session->set_userdata('admin_uid', $uid);
                $this->session->set_userdata('admin_first_name', $first_name);
                $this->session->set_userdata('admin_last_name', $last_name);
                $this->session->set_userdata('admin_email', $email);
                $this->session->set_userdata('admin_user_type', $user_type);
                $this->session->set_userdata('admin_full_name', $full_name); // Store the full name in the session
            }
        }
    
        if ($this->session->userdata('admin_uid')) {
            // Check the user type and redirect accordingly
            if ($this->session->userdata('admin_user_type') === 'admin') {
                // Get total number of leads
       
        $data['feedback'] = $this->product_feedback_model->get_feedback();
        $page_data['page_title'] = 'Dashboard';
        $page_data['page'] = 'dashboard';
        $this->load->view('includes/header',$page_data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('includes/footer', $page_data);
            
            } else {
                // Handle other cases or show an error message
            }
        } else {
            $page_data['page_title'] = 'Login Admin';
            $this->load->view('admin/login', $page_data);
        }
    }
    
	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}
    
	
	public function lead() {
        $data['leads'] = $this->Lead_model->get_all_leads();
        $this->load->view('admin/lead', $data);
    }

    
}

?>