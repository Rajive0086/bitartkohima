<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<?php $this->load->view('common/css'); ?>
</head>
<body>

<!-- .navbar -->
<?php $this->load->view('common/navbar'); ?>
<!-- /.navbar -->

<!-- .form -->
<section style="padding-top:50px;">
	<div class="  column center is-half is-6">
		 <?php 
  	   		if($this->session->flashdata('message')==true){
  	   			echo '<div class="notification is-success">'.$this->session->flashdata("message").'</div>';
  	   		}	
	  	   ?>
	</div>


<!-- .container -->
<div class="container column is-7">

<!-- .form -->
<div id="login" class="login_reg" style="margin-top:-60px">           
    <div class="login-card login-reg" style="">

        <div class="card-title">
            <h1>Candidate Register</h1>
        </div>

        <div class="content">
            <form method="post" action="<?php echo base_url() ?>register/validation">
                <div class="field">
                <label class="label">First Name</label>
                <div class="control">
                    <input class="input" type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" placeholder="e.g. John">
                </div>
                <p class="help is-success"><?php echo form_error('first_name'); ?></p>
                </div>
                <div class="field">
                <label class="label">Last Name</label>
                <div class="control">
                    <input class="input" name="last_name" value="<?php echo set_value('last_name'); ?>" type="text" placeholder="e.g. Reeves">
                </div>
                <p class="help is-danger"><?php echo form_error('last_name'); ?></p>
                </div>
                <div class="field">
                <div class="columns">
                        <div class="column">
                            <label class="label">Gender</label>
                            <div class="control">
                                <div class="select" >
                                    <?php echo form_dropdown('gender',[''=>'Select Gender','male'=>'male', 'female'=>'female','other'=>'other'], set_value('gender')); ?>
                            
                                </div>
                                <p class="help is-danger"><?php echo form_error('gender'); ?></p>
                            </div>
                        </div>
                        <div class="column">
                            <label class="label">Email</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="e.g. xyz@gmail.com">
                                <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle"></i>
                                </span>
                            </div>
                            <p class="help is-danger"><?php echo form_error('email'); ?></p>
                        </div>
                        
                    </div>
                </div>
                <div class="field">
                    <div class="columns">
                        <div class="column">
                            <label class="label">Password</label>
                            <p class="control has-icons-left">
                                <input class="input" type="password" name="password" value="<?php echo set_value('password'); ?>"  placeholder="Password">
                                <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                                </span>
                            </p>
                            <p class="help is-danger"><?php echo form_error('password'); ?></p>
                        </div>
                        <div class="column">
                            <label class="label">Confirm Password</label>
                            <p class="control has-icons-left">
                                <input class="input" type="password" name="passconf" value="<?php echo set_value('passconf'); ?>"  placeholder="Confirm Password">
                                <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                                </span>
                            </p>
                            <p class="help is-danger"><?php echo form_error('passconf'); ?></p>
                        </div>
                    </div> 
                </div>

                

                <div class="field">
                <div class="control">
                    <label class="checkbox">
                    <?php 
                    echo form_checkbox('terms','agreed',set_value('agreed')); ?>
                    I agree to the <a href="#">terms and conditions</a>
                    </label>
                </div>
                <p class="help is-danger"><?php echo form_error('terms'); ?></p>
                </div>

                
                <div class="field is-grouped">
                <div class="control">
                    <input type="submit" name="form" "value="register" class="button is-link" style="height:40px">
                </div>
                <div class="control">
                    <button type="reset" class="is-link" style="border-radius: 0;width:150px ;height:40px">Cancel</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>  
<!-- /.form -->
</div>
<!-- /.container -->
</section>
<!-- /.form -->

	

<!-- .Footer -->
<?php $this->load->view('common/footer'); ?>
<!-- /.Footer -->	

<!-- .Scripts -->
<?php $this->load->view('common/scripts'); ?>
<!-- /.Scripts -->	
</body>
</html>