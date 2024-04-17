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
    <h4 class="card-title">Lead Source Table</h4>
    </div>
                                   
   
    
    <a href="<?php echo base_url('admin/create'); ?>" class="btn btn-primary mb-3 ">Create New Lead Source</a>
  
   
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
            <th>Source ID</th>
            <th>Source Name</th>
            <th>Action</th>
           
        </tr>
            </thead>

            <tbody>
            <?php
             $counter = 1; // Initialize the counter variable
             foreach ($lead_sources as $lead_source) { ?>
            <tr>
            <td><?php echo $counter; ?></td>
                <td><?php echo $lead_source->source_name; ?></td>
                <td><a href="<?php echo base_url('admin/update/'.$lead_source->source_id); ?>"  class="btn btn-primary btn-sm">Edit</a><a href="<?php echo base_url('admin/delete/'.$lead_source->source_id); ?>"  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this lead source?');">Delete</a></td>
               
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