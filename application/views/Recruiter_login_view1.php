<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Recruiter</title>
	<?php $this->load->view('common/css'); ?>
    <!-- .inline-css -->
    <style type="text/css">
      .header-fixed {
       
        }

        

        .hero {
            background:  url('<?php echo base_url(); ?>images/youth.jpg') center / cover;
        }
        .quot
            {
                padding:5px 80px;
            }
        @media (max-width: 1024px) { .hero { background:  url('<?php echo base_url(); ?>images/youth.jpg') center / cover; } 
        .quot
            {
                padding:5px 10px;
            }
        }
        @media (max-width:  768px) { .hero { background:  url('<?php echo base_url(); ?>images/.jpg') center / cover; } 
        .quot
            {
                padding:5px 10px;
            }
        }
        @media (max-width: 768px) {
            :root {
                font-size: 100%;
            }
            .footer-mobile
            {
                padding-left:20px;
                padding-right:20px;
            }
            .quot
            {
                padding:5px 10px;
            }
        }
  
        }
    </style>
    <!-- /.inline-css -->
</head>
<body bgcolor=#F8F8F8>
<section class="hero" >
	<!-- .navbar -->
	<?php $this->load->view('common/navbar'); ?>
    <!-- /navbar -->
    <main class="hero-foot " >
        <div class="columns recruiter-login" style="padding:80px 20px;padding-buttom:20px;">
            <div class="column is-two-third desktop">
            <div class="" style="border-bottom: 4px solid #17365d"> 
                <h1 class="title  has-text-white is-1 " >RECRUITER'S</h1>
                <h1 class="title  has-text-white is-1">LOGIN</h1>
                <h1 class="heading  has-text-success is-size-6" >Now get the best employes for your organisation</h1>
            </div>
           
            </div>
            <div class="column" >
                <div class="columns">
                <div class="column is-one-fifth"></div>
                
                <div class="column has-background-white">
                <h1 class="title center has-text-info is-size-3">Login</h1>
                <div class="has-text-centered">
                      <br>
                        <div class="">
                            <figure class="avatar">
                            
                            </figure>
                            <form method="post" action="<?= base_url( ); ?>login/validation">
                                <div class="field">
                                    <div class="control">
                                        <input type="text" class="input is-info is-medium" name="email" value="<?php echo set_value('email'); ?>"  placeholder="Your Email" autofocus="">
                                        <span class="info is-danger"><?php echo form_error('email'); ?></span>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input type="password" class="input is-info  is-medium" name="password" value="<?php echo set_value('password') ?>"   placeholder="Your Password">
                                        <span class="info is-danger"><?php echo form_error('password'); ?></span>
                                    </div>
                                </div>
                               
                                <input type="submit" name="login" value="Login" class="button  is-primary is-medium is-fullwidth ">
                                <?php echo $this->session->flashdata('error'); ?>
                            </form>
                        </div>
                        <p class="has-text-grey">           
                            <a href="../">Forgot Password</a>;               
                        </p>
                        <br>
                        <p class="has-text-grey">           
                            Are you new to us?               
                        </p>
                        <input type="submit" name="Register" value="Register" class="button is-primary is-medium is-outlined has-text-weight-bold is-fullwidth">
                         <?php echo $this->session->flashdata('error'); ?>
                </div>
                </div>
                <div class="column is-one-fifth"></div>
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