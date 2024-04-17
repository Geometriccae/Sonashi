<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Store Locations</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>#">GES</a></li>
                <li class="breadcrumb-item active" aria-current="page">Store Locations</li>
            </ol>
        </div>
        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti-settings me-1"></i> Settings <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <!-- Your dropdown menu goes here if needed -->
                </div>
            </div>
        </div>
    </div>
</div><!-- sonashi/products.php -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h2 class="card-title">Store Locations</h2>
                    </div>
                    <a href="<?= site_url('store_location/create') ?>" class="btn btn-primary">Add New Location</a>
                    <!-- Store locations list table -->
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Location</th>
            <th>Routes</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $start_n = 0; ?>
        <?php foreach ($locations as $location): ?>
            <tr>
                <td><?= ++$start_n ?></td>
                <td><?= $location['location'] ?></td>
                <td><?= $location['routes'] ?></td>
                <td>
                    <a href="<?= site_url('store_location/update/' . $location['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?= site_url('store_location/delete/' . $location['id']) ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
