<?php
class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('repair_model');

    }

    public function index()
    {
        // Fetch feedback data from the model
        $data['feedback'] = $this->repair_model->get_feedback();

        // Count occurrences of each status for agent named "ravi"
        $status_counts_ravi = $this->repair_model->get_status_counts('ravi');

        // Pass the status counts to the view
        $data['status_counts_ravi'] = $status_counts_ravi;

        // Count occurrences of each status for agent named "Kalai"
        $status_counts_kalai = $this->repair_model->get_status_counts('Kalai');

        // Pass the status counts to the view
        $data['status_counts_kalai'] = $status_counts_kalai;

        // Count occurrences of each status for agent named "Akash"
        $status_counts_akash = $this->repair_model->get_status_counts('Akash');

        // Pass the status counts to the view
        $data['status_counts_akash'] = $status_counts_akash;

        // Count occurrences of each status for agent named "Suthakar"
        $status_counts_suthakar = $this->repair_model->get_status_counts('Suthakar');

        // Pass the status counts to the view
        $data['status_counts_suthakar'] = $status_counts_suthakar;

        // Pass the status counts to the view
        $data['status_counts_akash'] = $status_counts_akash;
        // Load the view
        $this->load->view('includes/header', $page_data);
        $this->load->view('report/index', $data);
        $this->load->view('includes/footer', $page_data);
    }
    public function view()
    {
        // Fetch feedback data from the model
        $data['feedback'] = $this->repair_model->get_feedback();

        // Count occurrences of each status for agent named "ravi"
        $status_counts_ravi = $this->repair_model->get_status_counts('ravi');

        // Pass the status counts to the view
        $data['status_counts_ravi'] = $status_counts_ravi;

        // Count occurrences of each status for agent named "Kalai"
        $status_counts_kalai = $this->repair_model->get_status_counts('Kalai');

        // Pass the status counts to the view
        $data['status_counts_kalai'] = $status_counts_kalai;

        // Count occurrences of each status for agent named "Akash"
        $status_counts_akash = $this->repair_model->get_status_counts('Akash');

        // Pass the status counts to the view
        $data['status_counts_akash'] = $status_counts_akash;

        // Count occurrences of each status for agent named "Suthakar"
        $status_counts_suthakar = $this->repair_model->get_status_counts('Suthakar');

        // Pass the status counts to the view
        $data['status_counts_suthakar'] = $status_counts_suthakar;

        // Load the view
        $this->load->view('includes/rheader', $page_data);
        $this->load->view('report/view', $data);
        $this->load->view('includes/rfooter', $page_data);
    }



}
