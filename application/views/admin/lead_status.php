<?php 	$this->load->view('includes/header',$page_data);   ?>
<!-- lead_status_list.php -->
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
    <h4 class="card-title">Lead status Table</h4>
    </div>
                                    <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php } ?>
   
    
    <a  href="<?php echo base_url('admin/add_lead_status'); ?>" class="btn btn-primary mb-3 ">Create New Lead status</a>
  
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
            <th>Status Name</th>
            <th>Actions</th>
        </tr>
            </thead>

            <tbody>
            <?php
        $number = 1; // Initialize the number to 1.
        foreach ($lead_statuses as $lead_status):
        ?>
            <tr>
                <td><?php echo $number; ?></td>
                <td><?php echo $lead_status['status_name']; ?></td>
                <td>
                    <a href="<?php echo base_url('admin/edit_lead_status/' . $lead_status['status_id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?php echo base_url('admin/delete_lead_status/' . $lead_status['status_id']); ?>"   class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this lead status?')">Delete</a>
                </td>
            </tr>
        <?php
        $number++; // Increment the number for the next row.
        endforeach;
        ?>
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
<!-- lead_status_list.php -->



<?php 	$this->load->view('includes/footer',$page_data);   ?>