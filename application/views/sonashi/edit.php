<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">GES</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">GES</a></li>
                <li class="breadcrumb-item"><a href="#">Repair</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Repair</li>
            </ol>
        </div>
        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti-settings me-1"></i> Settings <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Repair Table</h4>
                <!-- Display success/error messages if any -->

                <form action="<?= base_url('Repair/update') ?>" method="post" class="row g-3 needs-validation"
                    novalidate style="padding: 20px;">
                    <input type="hidden" name="id" value="<?= $feedback['id'] ?>">

                    <div class="col-md-4">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?= $feedback['name'] ?>"
                            required>
                    </div>

                    <div class="col-md-4">
                        <label for="product" class="form-label">Product:</label>
                        <input type="text" id="product" name="product" class="form-control"
                            value="<?= $feedback['model'] ?>" required>
                    </div>

                    <div class="col-md-4">
                        <label for="purchase_location" class="form-label">Purchase Location:</label>
                        <input type="text" id="purchase_location" name="purchase_location" class="form-control"
                            value="<?= $feedback['purchase_location'] ?>" required>
                    </div>

                    <div class="col-md-4">
                        <label for="purchase_date" class="form-label">Purchase Date:</label>
                        <input type="date" id="purchase_date" name="purchase_date" class="form-control"
                            value="<?= $feedback['purchase_date'] ?>" required>
                    </div>

                    <div class="col-md-4">
                        <label for="warranty_status" class="form-label">Warranty Status:</label>
                        <input type="text" id="warranty_status" name="warranty_status" class="form-control"
                            value="<?= $feedback['warranty_status'] ?>">
                    </div>

                    <div class="col-md-4">
                        <label for="location" class="form-label">Location:</label>
                        <input type="text" id="location" name="location" class="form-control"
                            value="<?= $feedback['location'] ?>" required>
                    </div>

                    <div class="col-md-4">
                        <label for="contact_number" class="form-label">Contact Number:</label>
                        <input type="text" id="contact_number" name="contact_number" class="form-control"
                            value="<?= $feedback['contact_number'] ?>" required>
                    </div>

                    <div class="col-md-4">
                        <label for="alt_contact_number" class="form-label">Alternative Contact Number:</label>
                        <input type="text" id="alt_contact_number" name="alt_contact_number" class="form-control"
                            value="<?= $feedback['alt_contact_number'] ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="alt_contact_number" class="form-label">Agent Name:</label>
                        <input type="text" id="alt_contact_number" name="agent_name" class="form-control"
                            value="<?= $feedback['agent_name'] ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="status" class="form-label">Status:</label>
                        <select name="status" class="form-control" required>
                            <option value="pending" <?= ($feedback['status'] == 'pending') ? 'selected' : '' ?>>Pending
                            </option>
                            <option value="in process" <?= ($feedback['status'] == 'in process') ? 'selected' : '' ?>>In
                                Process</option>
                            <option value="completed" <?= ($feedback['status'] == 'completed') ? 'selected' : '' ?>>
                                Completed</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>