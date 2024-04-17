<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>#">GES</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti-settings me-1"></i> Settings <i class="mdi mdi-chevron-down"></i>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stats">
            <div class="p-3 mini-stats-content">
                <div class="mb-4">


                </div>
            </div>
            <div class="mx-3">
                <div class="card mb-0 border p-3 mini-stats-desc">
                    <h6 class="text-center">Total Repairs</h6>
                    <h5 class="text-center">30</h5>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6">
        <div class="card mini-stats">
            <div class="p-3 mini-stats-content">
                <div class="mb-4">


                </div>
            </div>
            <div class="mx-3">
                <div class="card mb-0 border p-3 mini-stats-desc">
                    <div class="text-center">
                        <h6>Current Month Repairs</h6>
                        <h5 class="text-center">6</h5>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stats">
            <div class="p-3 mini-stats-content">
                <div class="mb-4">

                </div>
            </div>
            <div class="mx-3">
                <div class="card mb-0 border p-3 mini-stats-desc">
                    <h6 class="text-center">Previous Month Repairs</h6>
                    <h5 class="text-center">8</h5>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stats">
            <div class="p-3 mini-stats-content">
                <div class="mb-4">

                </div>
            </div>
            <div class="mx-3">
                <div class="card mb-0 border p-3 mini-stats-desc">
                    <h6 class="text-center">Fixed</h6>
                    <h5 class="text-center">20</h5>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    i {
        color: #655be6;
    }

    .float-left {
        color: #655be6;
    }
</style>

<!-- sonashi/index.php -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h4 class="card-title">Repairs of the purchased product</h4>
                    </div>

                    <!-- Display success/error messages if any -->
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


                    <!-- Product feedback table -->
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Model</th>
                                <th>Ticket ID</th>
                                <th>Purchase Location</th>
                                <th>Purchase Date</th>
                                <th>Warranty Status</th>
                                <th>Location</th>
                                <th>Contact Number</th>
                                <th>Agent Name</th>
                                <th>Alt Contact Number</th>
                                <th>Complained Registered Date & Time</th>
                                <th>Status</th>
                                <th>charges</th> <!-- New column header -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 1; // Initialize the counter variable
                            foreach ($feedback as $row):
                                ?>
                                <tr>
                                    <td>
                                        <?= $counter++; ?> <!-- Increment the counter and display it as the ID -->
                                    </td>
                                    <td>
                                        <?= $row['name']; ?>
                                    </td>
                                    <td>
                                        <?= $row['model']; ?>
                                    </td>
                                    <td>
                                        <?= $row['ticket_id']; ?>
                                    </td>
                                    <td>
                                        <?= $row['purchase_location']; ?>
                                    </td>
                                    <td>
                                        <?= $row['purchase_date']; ?>
                                    </td>
                                    <td>
                                        <?= $row['warranty_status']; ?>
                                    </td>
                                    <td>
                                        <?= $row['location']; ?>
                                    </td>
                                    <td>
                                        <?= $row['contact_number']; ?>
                                    </td>
                                    <td>
                                        <?= $row['agent_name']; ?>
                                    </td>
                                    <td>
                                        <?= $row['alt_contact_number']; ?>
                                    </td>
                                    <td>
                                        <?php
                                        if (!empty($row['submission_date'])) {
                                            $formattedDateTime = date('m/d/Y h:i:s A', strtotime($row['submission_date']));
                                            echo $formattedDateTime;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?= $row['status']; ?>
                                    </td>
                                    <td>
                                        <?= $row['Charges']; ?>
                                    </td>
                                    <!-- Display complained_registered_date_time -->
                                    <td>
                                        <a href="<?= base_url('Repair/edit/' . $row['id']); ?>"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?= base_url('Repair/delete/' . $row['id']); ?>"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    h6 {}

    h5 {
        color: #655be6;
    }
</style>