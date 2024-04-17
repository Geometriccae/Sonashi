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
										<img src="<?php echo base_url();?>assets/images/new.png" alt="" height="40">
                                        </a>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <h4 class="font-size-18">Welcome Back !</h4>
                                        <p class="text-muted mb-0">Sign in to continue to GES/Admin.</p>
                                    </div>
                                </div>
                                <div class="p-3">
    
                                <form method="POST" action="<?php echo base_url('index.php/admin/index'); ?>" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email_id" value="" required autofocus>
									
								</div>

								<div class="mb-3">
								
                                    <label class="mb-2 text-muted" for="password">Passsword</label>
									<input id="password" type="password" class="form-control" name="password" required>
								  
								</div>

								<div class="d-flex align-items-center">
								
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="<?php echo base_url();?>admin/register" class="text-dark">Create One</a>
							</div>
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
