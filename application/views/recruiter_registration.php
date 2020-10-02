<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Recruiter</title>
	<?php $this->load->view('common/css'); ?>
    <!-- .inline-css -->
  
    <!-- /.inline-css -->
</head>
<body>
<section class="hero" >
	<!-- .navbar -->
	<?php $this->load->view('common/navbar'); ?>
    <!-- /navbar -->
    <main class="hero-foot " >
        <div class="columns recruiter-login center" style="padding:80px 20px;padding-buttom:20px;">
		<div id="login" class="login_reg" >
                        
						<div class="login-card login-reg" style="">

							<div class="card-title">
							<h1>Sign up</h1>
							</div>

							<div class="content">
						
							<?php 
								if($this->session->flashdata('message')==true){
									echo '<div class="notification is-success">'.$this->session->flashdata("message").'</div>';
								}	
							?>
							
							<form  method="post" action="<?php echo base_url() ?>recruiterAdd">
								<div class="columns">
									<div class="column">
										First Name
										<input id="email" type="text" name="First_Name" title="email"  value="<?php echo set_value('First_Name'); ?>"  required>
										<p class="help is-success"><?php echo form_error('First_name'); ?></p>
									</div>
									<div class="column">
										Last Name
										<input id="email" type="text" name="Last_Name" title="email"  value="<?php echo set_value('Last_Name'); ?>"  required>
										<p class="help is-success"><?php echo form_error('Last_name'); ?></p>
									</div>	
									
								</div>

								<div class="columns">
									<div class="column">
										Company
										<input id="email" type="text" name="Company" title="email" value="<?php echo set_value('Company'); ?>"   required>
										<p class="help is-success"><?php echo form_error('Company'); ?></p>
									</div>
									<div class="column">
										Official Job Title
										<input id="email" type="text" name="Designation" title="email" value="<?php echo set_value('Designation'); ?>" required>
										<span class="info is-danger"><?php echo form_error('Designation'); ?></span>
									</div>	
									
								</div>
								<div class="columns">
									<div class="column">
										Work Email Address
										<input id="email" type="email" name="Email_id" title="email" value="<?php echo set_value('Email_id'); ?>"  required>
										<span class="info is-danger"><?php echo form_error('Email'); ?></span>
									</div>
									<div class="column">
										Password
										<input id="email" type="password" name="Password" title="email" value="<?php echo set_value('Password'); ?>"  required>
										<span class="info is-danger"><?php echo form_error('password'); ?></span>
									</div>	
								</div>
								<div class="columns">
									<div class="column">
										Conform password
										<input id="email" type="password" name="passconf"  title="email" value="<?php echo set_value('passconf'); ?>"  placeholder="">
	    								<span class="icon is-small is-left">
									</div>
									<div class="column">
										Phone Number
										<input id="email" type="text" name="Phone" title="email" value="<?php echo set_value('Phone'); ?>" required>
										<span class="info is-danger"><?php echo form_error('Phone'); ?></span>
									</div>
								</div>
								<div class="columns">
									<div class="column">
										<div class="checkbox level-left">
										<?php 
											echo form_checkbox('terms','agreed',set_value('agreed')); ?>
											I agree to the <a href="#">terms and conditions</a>
											</label>
										</div>
									</div>
								</div>
								
								<div class="columns">
									<div class="column center ">
									<input class="button is-primary"style="padding:0px 60px;" type="submit" value="Sign up">
									
								</div>
								</div>
							</form><br>
							<p class="in-mobile has-text-black is-size-6"> Are you new to us?<p>
							<div class="in-mobile  field is-grouped">
									<p class="control">
										<a href="<?php echo base_url() ?>registerMe" class="button in-mobile  is-primary">
										Register
										</a>
									</p>      
							</div>
							</div>
						</div>
			</div> 
           
        </div>
    </main>
</section>

<!-- .Footer -->
<?php $this->load->view('common/footer'); ?>
<!-- /.Footer -->

<!-- .Scripts -->
<?php $this->load->view('common/scripts'); ?>
<!-- /.Scripts -->	

	<!-- .inline-script	 -->	
    <script type="text/javascript">
		$(document).ready(function(){
		var burger = document.querySelector('.burger');
          var nav = document.querySelector('#'+burger.dataset.target);
          burger.addEventListener('click', function(){
            burger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
          });
		});

		$(document).ready(function(){
           
			$('button').click(function(){
				var job_no = $(this).attr('id'); //$('.job_no').val();
				if(job_no!='')
				{
					$.ajax({
						url:"<?php echo base_url();?>Main_con/ajaxRequestDetails",
						method:"POST",
						data:{job_no:job_no},
						success:function(data)
						{
							$('#content').html(data);
						},
					});
				}
				else{ 	$('#content').html('xyz')}
			});
		});
        $( document ).ready(function() {
            var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances
           // CarouselInstance.on('carousel:ready', function(item) {});
        });
        
    </script>

    </body>