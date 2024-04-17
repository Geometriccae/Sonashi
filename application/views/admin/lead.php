<?php 	$this->load->view('includes/header',$page_data);   ?>
<div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Dashboard</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>#">GES</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Lead</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti-settings me-1"></i> Settings <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>




   <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
           


    

<style>
    th{
       color: #655be6;
    }
   
</style>
<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="text-center">
    <h4 class="card-title">Lead Table</h4>
    </div>
                                    <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php } ?>
   
    
    <a href="<?php echo base_url('admin/add_lead'); ?>" class="btn btn-primary mb-3 ">Add Lead</a>
  
    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php } ?>
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                <tr>
                    <th>ID</th>
                    <th>Services Required</th>
                    <th>Type Of Customer</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>GST No</th>
                    <th>Location</th>
                    <th>Country</th>
                    <th>Follow Up Date</th>
                    <th>Industry</th>
                   <th>line of business</th>
                    <th>lead Soruce</th>
                    <th>lead Status</th>
                    <th>Action</th>
                    
                </tr>
            </thead>

            <tbody>
    <?php
    $counter = 1; // Initialize the counter variable
    foreach ($leads as $lead) {
    ?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $lead['ServicesRequired']; ?></td>
            <td><?php echo $lead['TypeOfCustomer']; ?></td>
            <td><?php echo $lead['name']; ?></td>
            <td><?php echo $lead['company']; ?></td>
            <td><?php echo $lead['contact_no']; ?></td>
            <td><?php echo $lead['email']; ?></td>
            <td><?php echo $lead['address']; ?></td>
            <td><?php echo $lead['gst_no']; ?></td>
            <td><?php echo $lead['location']; ?></td>
            <td><?php echo $lead['country']; ?></td>
            <td><?php echo date('d-m-Y', strtotime($lead['follow_up_date'])); ?></td>
            <td><?php echo $lead['industry']; ?></td>
           <td><?php echo $lead['line_of_business']; ?></td>
            <td><?php echo $lead['l_source']; ?></td>
            <td><?php echo $lead['l_status']; ?></td>
            <td>
                <a href="<?php echo base_url('admin/edit_lead/' . $lead['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="<?php echo base_url('admin/delete_lead/' . $lead['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this lead?')">Delete</a>
            </td>
        </tr>
        <?php
          $counter++; // Increment the counter variable after each iteration
     } ?>
</tbody>
                                        </table>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        <!-- end row -->
                        <script>
    $(document).ready(function () {
        // Call the DataTables construction function on the table with the ID "myTable"
        $('#myTable').DataTable();
    });
</script>

<?php 	$this->load->view('includes/footer',$page_data);   ?>