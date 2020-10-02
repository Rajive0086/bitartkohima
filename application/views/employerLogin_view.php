<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nagaland Job Centre</title>
    <?php $this->load->view('common/employer_css'); ?>
<!-- .inline-css -->
<style type="text/css">

    
</style>
 <!-- /.inline-css -->
</head>
<body>
<!-- .hero -->

<!-- .navbar -->
<?php $this->load->view('common/employer_navbar'); ?>
<!-- /.navbar -->

<!-------------- .main-content ------------------->
 
    <main id="employer-main" class="content content-push-right" style="margin-top:40px"> 

        <!------------------ .columns -------------->
        <div class="columns" >
        
            <div class="column is-2-desktop is-1-tablet  empty-width-1"  ></div>
            <div class="column "  style="background:">
                <div class="" style=""> 
                <h1 class="roboto" style=" font-size: 4.5rem !important;line-height: 70px !important;font-weight: 800;color:#1b3f58;">Employer's</h1>
                <br>
                <h1 class="openSans " style=" font-size: 1.8rem !important;line-height: 40px !important;color:#052429;font-weight: 100;">Now get the best <strong class=has-text-primary> Employees </strong> from us</h1>
                </div>
                <br>
               
                <div class="field is-grouped">
                    <p class="control">
                        <a href="<?php echo base_url() ?>employer_registration" class="button is-primary">
                        Register Now
                        </a>
                    </p>
                        
                </div>
            </div>
            <!--------- .login-box-column ----------------->
            <div class="column" id="login-card">
            
                    <!---------------- .login-box ------------>   
                    <div id="login" class="login">
                        <div class="login-card login ">
                            <div class="card-title">
                            <h1>Sign In</h1>
                            </div>
                            <div class="content">
             
                                   
                                <form action="<?php echo base_url(); ?>employer_login/validation" method="post">

                                    <input id="email" type="text" name="email" value="<?php echo set_value('email'); ?>" title="email"  placeholder="Email">
                                    <span class="info is-danger"><?php echo form_error('email'); ?></span>
                                    <input id="password" type="password" name="password" value="<?php echo set_value('password'); ?>" title="password" placeholder="Password">
                                    <span class="info is-danger"><?php echo form_error('password'); ?></span>
                                    <div class="level options">
                                        <div class="checkbox level-left">
                                            <input type="checkbox" id="checkbox" class="regular-checkbox">
                                            <label for="checkbox"></label>
                                            <span>Remember me</span>
                                        </div>
                                        <a class="btn btn-link level-right" href="<?php echo base_url() ?>forgotPassword">Forgot Password?</a>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <?php echo $this->session->flashdata('error'); ?>
                                    
                                </form><br>
                                <p class="in-mobile has-text-black is-size-6"> Are you new to us?<p>
                                <div class="in-mobile  field is-grouped">
                                        <p class="control">
                                            <a href="<?php echo base_url() ?>employer_registration" class="button in-mobile  is-primary">
                                            Register
                                            </a>
                                        </p>      
                                </div>
                            </div>

                        </div>
                    </div>
                    <!---------------- .login-box ------------>  
                    
               
                  
              
            </div>
            <!--------- /.login-box-column ----------------->
        </div>
        <!------------------ /.columns -------------->
       
    </main>
<!-------------- /.main-content ------------------>




   




    
<!-- .Footer -->
<?php $this->load->view('common/footer'); ?>
<!-- /.Footer -->
<?php $this->load->view('common/employer_scripts'); ?>
</body>
</html>
