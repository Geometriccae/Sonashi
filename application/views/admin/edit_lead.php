<?php 	$this->load->view('includes/header',$page_data);   ?>



        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">GES</h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">GES</a></li>
                        <li class="breadcrumb-item"><a href="#">Lead</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Lead</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <div class="float-end d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
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

                                        <h4 class="card-title">Edit Lead</h4>
                     
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
    <form action="<?php echo base_url('admin/edit_lead/' . $id); ?>" method="post" class="row g-3 needs-validation" novalidate style="padding: 20px;">
    <div class="col-md-6">
    <label for="ServicesRequired" class="form-label">Services Required:</label>
    <select class="form-select" id="ServicesRequired" name="ServicesRequired" required>
        <option value="">Select Services Required</option>
        <?php foreach ($lead_services_required as $service_required) { ?>
            <option value="<?php echo $service_required->ServicesRequired; ?>" <?php echo ($service_required->ServicesRequired === $ServicesRequired) ? 'selected' : ''; ?>>
                <?php echo $service_required->ServicesRequired; ?>
            </option>
        <?php } ?>
    </select>
    <div class="invalid-feedback">
        Please select a service.
    </div>
</div>
<div class="col-md-6">
    <label for="TypeOfCustomer" class="form-label">Type of Customer:</label>
    <select class="form-select" id="TypeOfCustomer" name="TypeOfCustomer" required>
        <option value="Individual" <?php echo ($TypeOfCustomer === 'Individual') ? 'selected' : ''; ?>>Individual</option>
        <option value="Organization" <?php echo ($TypeOfCustomer === 'Organization') ? 'selected' : ''; ?>>Organization</option>
    </select>
    <div class="invalid-feedback">
        Please select a type of customer.
    </div>
</div>



        <div class="col-md-4">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required value="<?php echo $name; ?>">
            <div class="invalid-feedback">
                Please enter your name.
            </div>
        </div>
        <div class="col-md-3">
            <label for="company" class="form-label">Company:</label>
            <input type="text" class="form-control" id="company" name="company" placeholder="Enter your company" required value="<?php echo $company; ?>">
            <div class="invalid-feedback">
                Please enter your company name.
            </div>
        </div>
        <div class="col-md-4">
            <label for="contact" class="form-label">Contact No:</label>
            <input type="text" class="form-control" id="contact" name="contact_no" placeholder="Enter your contact number" required value="<?php echo $contact_no; ?>">
            <div class="invalid-feedback">
                Please enter your contact number.
            </div>
        </div>
        <div class="col-md-4">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required value="<?php echo $email; ?>">
            <div class="invalid-feedback">
                Please enter a valid email address.
            </div>
        </div>
        <div class="col-md-4">
            <label for="gst" class="form-label">GST No:</label>
            <input type="text" class="form-control" id="gst" name="gst_no" placeholder="Enter your GST number" value="<?php echo $gst_no; ?>">
        </div>
        <div class="col-md-4">
            <label for="location" class="form-label">Location:</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Enter your location" required value="<?php echo $location; ?>">
            <div class="invalid-feedback">
                Please enter your location.
            </div>
        </div>
        <div class="col-md-4">
            <label for="country" class="form-label">Country:</label>
            <input type="text" class="form-control" id="country" name="country" placeholder="Enter your country" required value="<?php echo $country; ?>">
            <div class="invalid-feedback">
                Please enter your country.
            </div>
        </div>
        <div class="col-md-4">
            <label for="followup" class="form-label">Follow up Date:</label>
            <input type="date" class="form-control" id="followup" name="follow_up_date" required value="<?php echo $follow_up_date; ?>">
            <div class="invalid-feedback">
                Please select a follow-up date.
            </div>
        </div>
        <div class="col-md-4">
            <label for="industry" class="form-label">Industry:</label>
            <input type="text" class="form-control" id="industry" name="industry" placeholder="Enter your industry" required value="<?php echo $industry; ?>">
            <div class="invalid-feedback">
                Please enter your industry.
            </div>
        </div>
        <div class="col-md-12">
            <label for="address" class="form-label">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" required><?php echo $address; ?></textarea>
            <div class="invalid-feedback">
                Please enter your address.
            </div>
        </div>
        <div class="col-md-4">
            <label for="lead_source" class="form-label">Select Lead Source:</label>
            <select name="lead_source" class="form-select" required>
                <option value="">Select a Source</option>
                <?php foreach ($lead_sources as $lead_source) { ?>
                    <option value="<?php echo $lead_source->source_name; ?>" <?php echo ($lead_source->source_name === $l_source) ? 'selected' : ''; ?>>
                        <?php echo $lead_source->source_name; ?>
                    </option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
                Please select a lead source.
            </div>
        </div>
        <div class="col-md-6">
            <label for="lead_status" class="form-label">Select Lead Status:</label>
            <select name="l_status" class="form-select" required>
                <option value="">Select a Status</option>
                <?php foreach ($lead_status as $lead_stat) { ?>
                    <option value="<?php echo $lead_stat->status_name; ?>" <?php echo ($lead_stat->status_name === $l_status) ? 'selected' : ''; ?>>
                        <?php echo $lead_stat->status_name; ?>
                    </option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">
                Please select a lead status.
            </div>
        </div>
        <!-- Add Line of Business field -->
    <div class="col-md-6">
        <label for="line_of_business" class="form-label">Line of Business:</label>
        <select class="form-select" id="line_of_business" name="line_of_business" required>
            <option value="">Select Line of Business</option>
            <?php foreach ($line_of_business_options as $lob) { ?>
                <option value="<?php echo $lob->line_of_business; ?>" <?php echo ($lob->line_of_business === $line_of_business) ? 'selected' : ''; ?>>
                    <?php echo $lob->line_of_business; ?>
                </option>
            <?php } ?>
        </select>
        <div class="invalid-feedback">
            Please select a Line of Business.
        </div>
    </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Update Lead</button>
        </div>
    </form>

</div>
</div></div></div></div>





                                       
                <!-- End Page-content -->
<?php 	$this->load->view('includes/footer',$page_data);   ?>