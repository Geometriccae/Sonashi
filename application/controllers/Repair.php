<?php

class Repair extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_feedback_model');
        $this->load->model('Product_model');
        // $this->load->library('curl');

    }

    public function index()
    {
        if (!$this->session->userdata('admin_uid')) {
            redirect(base_url('admin/index'));

        }
        $data['feedback'] = $this->product_feedback_model->get_feedback();
        $this->load->view('includes/header', $page_data);
        $this->load->view('sonashi/index', $data);
        $this->load->view('includes/footer', $page_data);
    }

    public function add()
    {
        $this->load->model('Product_model');
        $data['product_names'] = $this->Product_model->get_product_names();
        $this->load->model('Store_location_model'); // Load the model

        // Fetch locations with routes from the model
        $data['store_locations'] = $this->Store_location_model->get_locations_with_routes();

        $this->load->view('sonashi/add', $data);
    }


    public function get_products_by_category()
    {
        $category = $this->input->get('category');
        $this->load->model('Product_model');
        $products = $this->Product_model->get_product_names($category);
        echo json_encode($products);
    }

    public function create()
    {
        $api_data = [];
        $data = [];

        // Handle form submission to create feedback
        if ($this->input->post()) {
            $productName = $this->input->post('product');
            $purchaseDate = $this->input->post('purchase_date');

            // Get the product details
            $product = $this->Product_model->getProductByName($productName);

            if ($product) {
                // Calculate remaining warranty
                $remainingWarranty = $this->calculateRemainingWarranty($product['warranty_period'], $purchaseDate);

                // Determine warranty status
                $warrantyStatus = ($remainingWarranty > 0) ? $remainingWarranty . ' left' : 'Warranty Expired';

                if ($remainingWarranty > 0) {
                    // If warranty is still valid, update the warranty status
                    $warrantyStatus = 'Warranty is valid';
                }

                // Determine agent name based on routes
                $agentName = '';
                switch ($this->input->post('routes')) {
                    case 1:
                    case 3:
                    case 6:
                        $agentName = 'Ravi';
                        break;
                    case 2:
                    case 4:
                        $agentName = 'Kalai';
                        break;
                    case 5:
                        $agentName = 'Akash';
                        break;
                    case 7:
                        $agentName = 'Suthakar';
                        break;
                    default:
                        // Provide default value or handle this case differently
                        break;
                }

                // Store the feedback data including the warranty status, agent name, and status
                $data = array(
                    'name' => $this->input->post('name'),
                    'model' => $productName,
                    'purchase_location' => $this->input->post('purchase_location'),
                    'purchase_date' => $purchaseDate,
                    'warranty_status' => $warrantyStatus,
                    'location' => $this->input->post('location'),
                    'contact_number' => $this->input->post('contact_number'),
                    'alt_contact_number' => $this->input->post('alt_contact_number'),
                    'agent_name' => $agentName,
                    'status' => 'pending', // Add status with value pending
                );

                $this->product_feedback_model->create_feedback($data);

                // Get the last inserted feedback ID
                $lastId = sprintf('%04d', $this->product_feedback_model->last_insert_id()); // Format $lastId as four digits

                // Generate a ticket ID
                $monthCode = date('m'); // Get the two-digit month code
                $ticketId = 'S' . $monthCode . $lastId;

                // Update the feedback record with the generated ticket ID
                $updateData = array('ticket_id' => $ticketId);
                $this->product_feedback_model->update_feedback($lastId, $updateData);

                // Prepare data for API
                $api_data['name'] = $this->input->post('name');
                $api_data['mobile'] = $this->input->post('contact_number');
                $api_data['ticket'] = $ticketId;
                $api_data['model'] = $productName; // Add model variable
                $api_data['location'] = $this->input->post('location'); // Add location variable
                // Add routes data
                $api_data['contact_number'] = $this->input->post('contact_number');
                $api_data['routes'] = $this->input->post('routes');

                // Send ticket alert using your custom function
                $this->send_ticket_alert($api_data);

                // Send notification alert using your custom function
                $this->send_notification_alert($api_data);

                // Redirect to the thank you page after creating feedback
                redirect(base_url('Repair/thank'));
            }
        }

        // Load the view if the form is not submitted or there's an error
        $data['product_names'] = $this->Product_model->get_product_names();
        $this->load->view('includes/header', $page_data);
        $this->load->view('sonashi/create', $data);
        $this->load->view('includes/footer', $page_data);
    }




    public function thank()
    {

        $this->load->view('sonashi/thank');

    }


    public function send_ticket_alert($data)
    {
        print_r($data);
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.interakt.ai/v1/public/message/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n    \"countryCode\": \"+91\",\n    \"phoneNumber\": \"" . $data['mobile'] . "\",\n    \"callbackData\": \"some text here\",\n    \"type\": \"Template\",\n    \"template\": {\n        \"name\": \"service_request\",\n        \"languageCode\": \"en\",\n        \"bodyValues\": [\n            \"" . $data['name'] . "\",\n            \"" . $data['ticket'] . "\"\n   ,\n            \"product\"\n       ],\n        \"buttonValues\" : {\n             \"0\" : [\n                \"" . $data['ticket'] . "\"\n            ]\n        }\n    }\n}");

        $headers = array(
            'Authorization: Basic enVoRFZBYzBEZi1CNVBmWVh4X0lWMmI2OUJna3VvSHhFT3VzaHVPRVE1VTo=',
            'Content-Type: application/json'
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;

    }
    public function send_notification_alert($data)
    {
        $ch = curl_init();

        // Determine phone number and agent name based on routes
        $phone_number = '';
        $agent_name = '';
        switch ($data['routes']) {
            case 1:
                $phone_number = '7871903732'; // Ravi - Route 1 phone number
                $agent_name = 'Ravi'; // Route 1 agent name
                break;
            case 2:
                $phone_number = '9384437907'; // Kalai - Route 2 phone number
                $agent_name = 'Kalai'; // Route 2 agent name
                break;
            case 3:
                $phone_number = '7871903732'; // Ravi - Route 3 phone number
                $agent_name = 'Ravi'; // Route 3 agent name
                break;
            case 4:
                $phone_number = '9384437907'; // Kalai - Route 4 phone number
                $agent_name = 'Kalai'; // Route 4 agent name
                break;
            case 5:
                $phone_number = '9566008938'; // Tamizh - Route 5 phone number
                $agent_name = 'Akash'; // Route 5 agent name
                break;
            case 6:
                $phone_number = '7871903732'; // Ravi - Route 6 phone number
                $agent_name = 'Ravi'; // Route 6 agent name
                break;
            case 7:
                $phone_number = '9444502082'; // Ravi - Route 7 phone number
                $agent_name = 'Suthakar'; // Route 7 agent name
                break;
            default:
                // Provide default values or handle this case differently
                break;
        }

        curl_setopt($ch, CURLOPT_URL, 'https://api.interakt.ai/v1/public/message/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            "{\n    \"countryCode\": \"+91\",\n    \"phoneNumber\": \"" . $phone_number . "\",\n    \"callbackData\": \"some text here\",\n    \"type\": \"Template\",\n    \"template\": {\n        \"name\": \"agent_notification\",\n        \"languageCode\": \"en\",\n        \"bodyValues\": [\n            \"" . $agent_name . "\",\n            \"" . $data['name'] . "\",\n            \"" . $data['location'] . "\",\n            \"" . $data['model'] . "\",\n            \"" . $data['contact_number'] . "\"\n        ],\n        \"buttonValues\": {\n            \"0\": [\n                \"" . $data['ticket'] . "\"\n            ]\n        }\n    }\n}"
        );

        $headers = array(
            'Authorization: Basic enVoRFZBYzBEZi1CNVBmWVh4X0lWMmI2OUJna3VvSHhFT3VzaHVPRVE1VTo=',
            'Content-Type: application/json'
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        return $result;
    }





    public function view($ticket_id)
    {
        $data['feedback'] = $this->product_feedback_model->get_feedback_by_ticket_id($ticket_id);

        if ($data['feedback']) {

            $this->load->view('sonashi/view', $data);

        } else {
            // Handle the case where the feedback with the given ticket_id doesn't exist
            echo 'Feedback not found';
        }
    }
    // Function to get warranty period based on product model and purchase date
    private function calculateRemainingWarranty($warrantyPeriod, $purchaseDate)
    {
        // Implement the logic to calculate remaining warranty in PHP
        // You can use the same logic you used in the JavaScript function parseWarrantyPeriod
        // to calculate the remaining warranty in days.

        // Example:
        $parsedWarrantyPeriod = $this->parseWarrantyPeriod($warrantyPeriod);
        $purchaseTimestamp = strtotime($purchaseDate);
        $currentTimestamp = time();
        $remainingWarranty = $parsedWarrantyPeriod - floor(($currentTimestamp - $purchaseTimestamp) / (60 * 60 * 24));

        return max(0, $remainingWarranty); // Ensure the remaining warranty is not negative
    }
    private function parseWarrantyPeriod($warrantyString)
    {
        // Extract numeric value and unit from the warranty string
        $match = preg_match('/(\d+)\s*(Year|Month)/i', $warrantyString, $matches);

        if ($match) {
            $value = intval($matches[1]);
            $unit = strtolower($matches[2]);

            // Convert all periods to days for consistency
            if ($unit === 'year') {
                return $value * 365; // Assuming 1 year = 365 days
            } elseif ($unit === 'month') {
                return $value * 30; // Assuming 1 month = 30 days
            }
        }

        return 0; // Default to 0 days if parsing fails
    }
    public function edit($id)
    {
        $feedback = $this->product_feedback_model->get_feedback($id);

        if ($feedback) {
            $data['feedback'] = $feedback;
            // Load the edit view
            $this->load->view('includes/header', $page_data);
            $this->load->view('sonashi/edit', $data);
            $this->load->view('includes/footer', $page_data);
        } else {
            // Handle error if feedback with given ID is not found
            show_404();
        }
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'name' => $this->input->post('name'),
            'model' => $this->input->post('product'),
            'purchase_location' => $this->input->post('purchase_location'),
            'purchase_date' => $this->input->post('purchase_date'),
            'warranty_status' => $this->input->post('warranty_status'), // If available
            'location' => $this->input->post('location'),
            'contact_number' => $this->input->post('contact_number'),
            'alt_contact_number' => $this->input->post('alt_contact_number'),
            'status' => $this->input->post('status'),
            'agent_name' => $this->input->post('agent_name'),
            // Add other fields you want to update
        );


        $this->product_feedback_model->update_feedback($id, $data);

        // Redirect to appropriate page after update
        redirect(base_url('Repair/index'));
    }




    public function delete($id)
    {
        $this->product_feedback_model->delete_feedback($id);

        // Redirect to appropriate page after delete
        redirect(base_url('Repair/index'));
    }
    public function agent_edit($ticket_id)
    {
        $data['feedback'] = $this->product_feedback_model->get_feedback_by_ticket_id($ticket_id);

        if ($data['feedback']) {

            $this->load->view('sonashi/agent_edit', $data);

        } else {
            // Handle the case where the feedback with the given ticket_id doesn't exist
            echo 'Feedback not found';
        }
    }
    public function agent_update($ticket_id)
    {
        // Assuming you have a function to get feedback details by ticket ID
        $feedback = $this->product_feedback_model->get_feedback_by_ticket_id($ticket_id);

        if (!$feedback) {
            // Handle the case where the feedback with the given ticket ID doesn't exist
            // Redirect or show an error message
        }

        // Handle form submission to update status and charges
        if ($this->input->post()) {
            $id = $feedback['id']; // Assuming $feedback contains the ID
            $status = $this->input->post('status');
            $charges = $this->input->post('charges');

            // Update status and charges in the database
            $data = array(
                'status' => $status,
                'agent_name' => $this->input->post('agent_name'),
                'charges' => $charges // Add charges to the data array
            );
            $this->product_feedback_model->update_feedback($id, $data);

            // Redirect to view function with the same ticket ID
            redirect(base_url('Repair/view/' . $ticket_id));
        }

        // Load the view with the ticket ID and feedback data
        $data['feedback'] = $feedback; // Pass feedback data to the view
        $this->load->view('agent_update_view', $data);
    }

    public function agent_view($ticket_id)
    {
        $data['feedback'] = $this->product_feedback_model->get_feedback_by_ticket_id($ticket_id);

        if ($data['feedback']) {

            $this->load->view('sonashi/agent_view', $data);

        } else {
            // Handle the case where the feedback with the given ticket_id doesn't exist
            echo 'Feedback not found';
        }
    }

}
