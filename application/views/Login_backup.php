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
                <div class="" style="border-bottom: 4px solid white"> 
                    <h1 class="title  has-text-white is-1 " >RECRUITER'S</h1>
                    <h1 class="title  has-text-white is-1">LOGIN</h1>
                    <h1 class="heading  has-text-success is-size-6" >Now get the best employes for your organisation</h1>
                </div>
           
            </div>
            <div class="column" >
                <div class="columns">
                    <div class="column is-one-fifth">

                    </div>
                        
                    <div class="column has-background-white">
                        <h1 class="title center has-text-info is-size-3">Login</h1>
                            <div class="has-text-centered">
                                <br>
                        
                
                                <?php $this->load->helper('form'); ?>
                                
                                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                                
                                <?php
                                $this->load->helper('form');
                                $error = $this->session->flashdata('error');
                                if($error)
                                {
                                    ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        
                                        <?php echo $error; ?>                    
                                    </div>
                                <?php }
                                $success = $this->session->flashdata('success');
                                if($success)
                                {
                                    ?>
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $success; ?>                    
                                    </div>
                                <?php } ?>
                                <form action="<?php echo base_url(); ?>Login/loginMe" method="post">
                                
                                    <div class="field">
                                        <p class="control has-icons-left has-icons-right">
                                            <input class="input is-primary  is-medium " type="email form-control" placeholder="Email" name="email" required>
                                            <span class="icon is-small is-left">
                                            <i class="fas fa-envelope"></i>
                                            </span>
                                            
                                        </p>
                                    </div>
                                
                                    <div class="field">
                                        <p class="control has-icons-left">
                                            <input class="input is-primary  is-medium" type="password form-control" placeholder="Password" name="password" required>
                                            <span class="icon is-small is-left">
                                            <i class="fas fa-lock"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="field">
                                        <p class="control">
                                            <button type="submit" class="button is-primary is-medium is-fullwidth   " value="Sign In">
                                            Login
                                            </button>
                                        </p>
                                    </div>
                                
                                
                                </form>

                                <a href="<?php echo base_url() ?>forgotPassword">Forgot Password</a><br><br>
                                <p>Are you new to Us?<p>
                                <div class="field">
                                        <p class="control">
                                            <button type="submit" class="button is-primary is-medium is-fullwidth   " value="Sign In">
                                            Register
                                            </button>
                                        </p>
                                    </div>
                            </div>
                    </div>
                    
               
                    <div class="column is-one-fifth">

                    </div>
                </div>
                
            </div>
        </div>
    </main>
</section>
<section class="section" >
    
    <h1 class=" subtitle center  is-4 has-text-weight-bold">Job Posting Services</h1>
    <p>Thank God for Nagaland Job Centre!!
        It has really become convenient for business persons like us to employ staffs, all we have to do is make a call, tell them our preferences and the interview is arranged. The service is quick and the staffs are pleasant to talk to. I wish them all the best and more success in coming years.
        <div id="e" class="" style="">
            <p  class="is-danger center is-inverted is-rounded is-white is-outlined has-text-weight-bold"
                style="color:;width: 100%; ">
                Zubeni Kikon, Reliance Motors
            </p>
        </div>
        <br> 
        <p class="center"><input type="submit" name="Register" value="Post Jobs" class="button  is-primary  ">
                         <?php echo $this->session->flashdata('error'); ?>  </p>
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