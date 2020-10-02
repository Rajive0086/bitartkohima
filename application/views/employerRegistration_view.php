<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nagaland Job Centre</title>
	<?php $this->load->view('common/employer_css'); ?>
<!-- .inline-css -->
<style type="text/css">

    @media (max-width: 768px){
        :root { font-size: 100%; }
        .footer-mobile {
                padding-left:20px;
                padding-right:20px;
        }
        .quot { padding:5px 10px; }
    }
    hr{
       height:3px;
       background-color:yellow;
       border:none;
       width:20%;
    }
</style>
 <!-- /.inline-css -->
</head>
<body>
<!-- .hero -->

    <!-- .navbar -->
    <?php $this->load->view('common/employer_navbar'); ?>
    <!-- /.navbar -->

    <!-- /.hero -->



 <main class="hero-foot" id="employer_registration">
        <div class="columns recruiter-login center"  style="padding:80px 20px;padding-buttom:20px;">
            <!------------ .login -------------->
            <div id="login" class="login_reg" >
                <!---------- .login-card ---------->
                <div class="login-card login-reg" style="">
                    <div class="card-title">
                        <h1>EMPLOYER REGISTRATION</h1>
                    </div>
                    <!------- .content ------------>
                    <div class="content">

                        <?php 
                        if($this->session->flashdata('message')==true){
                            $status=$this->session->userdata('status');
                            if($status=='1'){
                                echo '<div class="notification is-success">'.$this->session->flashdata("message").'</div>';
                            }else{
                                echo '<div class="notification is-danger">'.$this->session->flashdata("message").'</div>';
                            }
                           
                        }   
                        ?>
                    

                        <form  method="post" action="<?php echo base_url(); ?>employer_registration/validation">
                            <div class="columns">
                                <div class="column">
                                    First Name
                                    <input  type="text" id="email" name="first_name"   value="<?php echo set_value('first_name'); ?>" >
                                    <p class="form-error-message" style="margin-top:-19px;"><?php echo form_error('first_name'); ?></p>
                                </div>
                                <div class="column">
                                    Last Name
                                    <input  type="text" id="email" name="last_name"  value="<?php echo set_value('last_name'); ?>"  >
                                    <p class="form-error-message" style="margin-top:-19px;"><?php echo form_error('last_name'); ?></p>
                                </div>  
                            </div>
                            <div class="columns">
                                <div class="column">
                                    Gender
                                    <div class="select"  style="margin-top:-5px;font-size:.9em;margin-left:10px;">
                                        <?php echo form_dropdown('gender',[''=>'Select Gender','male'=>'male', 'female'=>'female','other'=>'other'], set_value('gender')); ?>
                                    </div>
                                    <p class="form-error-message"><?php echo form_error('gender'); ?></p>
                                </div>
                                <div class="column">
                                    Street Address
                                    <input id="email" type="text" name="address"  value="<?php echo set_value('address'); ?>" >
                                    <p class="form-error-message" style="margin-top:-19px;"><?php echo form_error('address'); ?></p>
                                </div>  
                            </div>
                       
                            <div class="columns">
                                <div class="column">
                                    City/Town
                                    <input id="email" type="text" name="city_town"  value="<?php echo set_value('city_town'); ?>"  >
                                    <p class="form-error-message"  style="margin-top:-19px;"><?php echo form_error('city_town'); ?></p>
                                </div>
                                <div class="column">
                                    State
                                    <input id="email" type="text" name="state" value="<?php echo set_value('state'); ?>" >
                                    <p class="form-error-message"  style="margin-top:-19px;"><?php echo form_error('state'); ?></p>
                                </div>  
                            </div>
                            <div class="columns">
                                <div class="column">
                                    Email Id
                                    <input id="email" type="email" name="email"  value="<?php echo set_value('email'); ?>" >
                                    <p class="form-error-message"  style="margin-top:-19px;"><?php echo form_error('email'); ?></p>
                                </div>
                                <div class="column">
                                    Mobile No.
                                    <input id="email" type="number" name="mobile_no" value="<?php echo set_value('mobile_no'); ?>"  >
                                    <p class="form-error-message"  style="margin-top:-19px;"><?php echo form_error('mobile_no'); ?></p>
                                </div>   
                            </div>
                            <div class="columns">
                                <div class="column">
                                    Company/Firm Name
                                    <input id="email" type="text" name="company_firm_name" value="<?php echo set_value('company_firm_name'); ?>" >
                                    <p class="form-error-message" style="margin-top:-19px;"><?php echo form_error('company_firm_name'); ?></p>
                                </div>  
                            </div>
                            <div class="columns">
                                <div class="column">
                                    Password
                                    <input id="email" type="password" name="password" value="<?php echo set_value('password'); ?>"  >
                                    <p class="form-error-message" style="margin-top:-12px;"><?php echo form_error('password'); ?></p>
                                </div>  
                                <div class="column">
                                    Conform password
                                    <input id="email" type="password" name="passconf"  title="email" value="<?php echo set_value('passconf'); ?>"  placeholder="">
                                    <p class="form-error-message" style="margin-top:-12px;"><?php echo form_error('passconf'); ?></p>
                                </div>
                                
                            </div>
                            
                            <div class="columns">
                                <div class="column">
                                    <div class="checkbox level-left" >
                                        <label class="employer-registration-checkbox">
                                            <?php echo form_checkbox('terms','agreed',set_value('agreed')); ?>
                                            <span>I agree to the <a href="#">terms and conditions</span></a>
                                        </label>
                                       
                                    </div>
                                </div>
                                
                            </div>
                            <p class="form-error-message"  style="margin-top:-13px;"><?php echo form_error('terms'); ?></p>
                            <div class="columns">
                                <div class="column center employer-registration-submitButton">
                                    <input class="button is-primary" style="padding:0px 60px;" type="submit" value="Sign Up">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!------- /.content ------------>
                </div>
                <!---------- /.login-card ---------->
            </div> 
            <!------------ .login -------------->
        </div>
    </main>





    
<!-- .Footer -->
<?php $this->load->view('common/footer'); ?>
<!-- /.Footer -->
<?php $this->load->view('common/employer_scripts'); ?>
</body>
</html>
