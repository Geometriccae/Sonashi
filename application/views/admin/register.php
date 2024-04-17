<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/foxia/layouts/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 17:50:33 GMT -->
<head>
    
        <meta charset="utf-8">
        <title>Login | Foxia - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon"  href="<?php echo base_url();?>assets/images/favicon.ico">
    
        <!-- Bootstrap Css -->
        <link  href="<?php echo base_url();?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link  href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link  href="<?php echo base_url();?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    
    </head>

    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="account-pages mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-5 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="d-flex p-3">
                                    <div>
                                        <a  href="<?php echo base_url();?>index.html" class="">
										<img src="http://gesdigit.com/ican_images/mainlogo.png" alt="" height="40">
                                        </a>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <h4 class="font-size-18">Free Register</h4>
                                        <p class="text-muted mb-0">Register in to Login to GES/Admin.</p>
                                    </div>
                                </div>
                                <div class="p-3">
    
							<!-- admin/register.php -->

<?php echo validation_errors(); ?>
<?php echo form_open('admin/register'); ?>
<div class="row">
    <div class="col-md-6">
    <div class="mb-3">
  <label class="mb-2" for="first_name">First Name:</label>
  <input type="text" name="first_name"  class="form-control" required>
  </div>
    </div>
    <div class="col-md-6">
    <div class="mb-3">
  <label class="mb-2"  for="last_name">Last Name:</label>
  <input type="text" name="last_name"  class="form-control" required>
  </div>
    </div>
</div>

<div class="mb-3">
    <label class="mb-2" for="type">Type:</label>
    <select name="type" class="form-control" required>
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
</div>

  <div class="mb-3">
  <label class="mb-2"  for="email_id">Email:</label>
  <input type="email" name="email_id"  id="email"   class="form-control" required>
  </div>
  <div class="mb-3">
  <label class="mb-2"  for="password">Password:</label>
  <input type="password" name="password"  class="form-control" required>
  </div>
  <div class="mb-3">
  <label class="mb-2"  for="confirm_password">Confirm Password:</label>
  <input type="password" name="confirm_password"  class="form-control" required>
  </div>
  <input type="submit"  class="btn btn-primary ms-auto" value="Register">
<?php echo form_close(); ?>
</div>
                            </div>
                        </div>
                        <div class="mt-5 text-center position-relative">
                            
                            <p class="text-white-50"> © <script>document.write(new Date().getFullYear())</script>  GES</p>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

                             
        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url();?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/foxia/layouts/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 17:50:33 GMT -->
</html>
