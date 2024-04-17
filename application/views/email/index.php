<div class="row">
                            <div class="col-12">
                                <!-- Left sidebar -->
                                <div class="email-leftbar">
                                    <div class="d-grid">
                                        <a href="email-compose.html" class="btn btn-danger rounded btn-custom  waves-effect waves-light">Compose</a>
                                    </div>

                                    <div class="mail-list mt-3">
                                        <a href="#" class="active">Inbox <span class="ms-1"></span></a>
                                        <a href="#">Starred</a>
                                        <a href="#">Important</a>
                                        <a href="#">Draft</a>
                                        <a href="#">Sent Mail</a>
                                        <a href="#">Trash</a>
                                    </div>


                                    
                                </div>
                                <!-- End Left sidebar -->


                                <!-- Right Sidebar -->
                                <div class="email-rightbar">
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group me-2 mb-2 mb-sm-0">
                                            <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                                            <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                                            <button type="button" class="btn btn-primary waves-light waves-effect"><i class="far fa-trash-alt"></i></button>
                                        </div>
                                        <div class="btn-group me-2 mb-2 mb-sm-0">
                                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-folder"></i>
                                                <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Updates</a>
                                                <a class="dropdown-item" href="#">Social</a>
                                                <a class="dropdown-item" href="#">Team Manage</a>
                                            </div>
                                        </div>
                                        <div class="btn-group me-2 mb-2 mb-sm-0">
                                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-tag"></i>
                                                <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Updates</a>
                                                <a class="dropdown-item" href="#">Social</a>
                                                <a class="dropdown-item" href="#">Team Manage</a>
                                            </div>
                                        </div>

                                        <div class="btn-group me-2 mb-2 mb-sm-0">
                                            <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                More <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Mark as Unread</a>
                                                <a class="dropdown-item" href="#">Mark as Important</a>
                                                <a class="dropdown-item" href="#">Add to Tasks</a>
                                                <a class="dropdown-item" href="#">Add Star</a>
                                                <a class="dropdown-item" href="#">Mute</a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card mt-4">
                                        <div class="card-body">
                                        <form method="post" action="<?php echo base_url('ActivityController/submit_form'); ?>">
                                            <div>
                                                
                                             
                                                <div class="mb-3">
                                               
        <div class="row">
        <div class="col-md-6 mb-3">
        <input type="email" class="form-control" placeholder="To" name="to_email">
                                                </div>
            
                                                <div class="col-md-6 mb-3">
                                                <input type="text" class="form-control" placeholder="Subject" name="subject">
                                                </div>
                                                    <div class="col-md-4">
        <label for="TypeOfActivity" class="form-label">Type of Activity:</label>
        <input type="text" class="form-control" id="TypeOfActivity" name="TypeOfActivity"
               value="<?= $activity->TypeOfActivity ?>" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <!-- Project -->
    <div class="col-md-4">
        <label for="Project" class="form-label">Project:</label>
        <input type="text" class="form-control" id="Project" name="Project"
               value="<?= $activity->Project ?>" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <!-- Assigned To -->
    <div class="col-md-4">
        <label for="AssignedTo" class="form-label">Assigned To:</label>
        <input type="text" class="form-control" id="AssignedTo" name="AssignedTo"
               value="<?= $activity->AssignedTo ?>" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <!-- Priority -->
    <div class="col-md-4">
        <label for="Priority" class="form-label">Priority:</label>
        <select class="form-select" id="Priority" name="Priority">
            <option value="High" <?php if ($activity->Priority === 'High') echo 'selected'; ?>>High</option>
            <option value="Medium" <?php if ($activity->Priority === 'Medium') echo 'selected'; ?>>Medium</option>
            <option value="Low" <?php if ($activity->Priority === 'Low') echo 'selected'; ?>>Low</option>
        </select>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <!-- Status -->
    <div class="col-md-4">
        <label for="Status" class="form-label">Status:</label>
        <select class="form-select" id="Status" name="Status">
            <option value="Pending" <?php if ($activity->Status === 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="In Progress" <?php if ($activity->Status === 'In Progress') echo 'selected'; ?>>In Progress</option>
            <option value="Completed" <?php if ($activity->Status === 'Completed') echo 'selected'; ?>>Completed</option>
        </select>
    </div>

    <!-- Start Date -->
    <div class="col-md-4">
        <label for="StartDate" class="form-label">Start Date:</label>
        <input type="date" class="form-control" id="StartDate" name="StartDate"
               value="<?= $activity->StartDate ?>" required>
    </div>

    <!-- End Date -->
    <div class="col-md-4">
        <label for="EndDate" class="form-label">End Date:</label>
        <input type="date" class="form-control" id="EndDate" name="EndDate"
               value="<?= $activity->EndDate ?>" required>
    </div>
    <div class="col-md-4">
        <label for="Links" class="form-label">Links:</label>
        <input type="text" class="form-control" id="Links" name="Links" value="<?= $activity->Links ?>">
    </div>
    <!-- Description -->
    <div class="col-md-6">
        <label for="Description" class="form-label">Description:</label>
        <textarea class="form-control" id="Description" name="Description"><?= $activity->Description ?></textarea>
        
    </div>
    <div class="col-md-6">
        <label for="Description" class="form-label">Message:</label>
        <textarea class="form-control" placeholder="Message" name="message"></textarea>
        
    </div>
    <!-- Links -->
   </div>

                                                </div>

                                                <div class="btn-toolbar mb-0">
    <div class="ms-auto">
    <button type="submit" class="btn btn-purple waves-effect waves-light">
        <span>Send</span>
        <i class="fab fa-telegram-plane ms-2"></i>
    </button>
    </div>
</div>


                                            </div>
                                         </form>
                                        </div>

                                    </div>


                                </div> <!-- end Col-9 -->

                            </div>

                        </div><!-- End row -->
<style>
    label.form-label {
    margin-top: 10px;
    margin-bottom: 10px;
}button.btn.btn-purple.waves-effect.waves-light.position-absolute.bottom-0.end-0 {
    margin: 20px;
}
</style>