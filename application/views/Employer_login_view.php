<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>

<html lang="en">

<head>

	<title>Admin Login</title>

	<?php $this->load->view('common/css'); ?>

    <!-- .inline-css -->

    <style type="text/css">

      .header-fixed {

       

        }



        



        .hero {

            background:  url('<?php echo base_url(); ?>images/youthx.jpg') center / cover;

        }

        .quot

            {

                padding:5px 80px;

            }

        @media (max-width: 1024px) { .hero { background:  url('<?php echo base_url(); ?>images/youthx.jpg') center / cover; } 

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

<body bgcolor=#d0dbdd>

<section class="hero" >

	<!-- .navbar -->

	<?php $this->load->view('common/navbar'); ?>

    <!-- /navbar -->

    <main class="hero-foot " >

        <div class="columns " style="padding:50px 0px;">

            <div class="column is-two-third desktop"  style="padding-left:100px;padding-top:80px;">

                <div class="" style=""> 

                <h1 class="roboto" style=" font-size: 4.5rem !important;line-height: 70px !important;font-weight: 800;color:#1b3f58;">Employer's</h1>

                <br>

                <h1 class="openSans " style=" font-size: 1.8rem !important;line-height: 40px !important;color:#052429;font-weight: 100;">Now get the best <strong class=has-text-primary> Employees </strong> from us</h1>     

                

                    

                </div>

                <br>

               

                <div class="field is-grouped">

                    

                        <p class="control">

                            <a href="<?php echo base_url() ?>registerMe" class="button is-primary">

                            Register Now

                            </a>

                        </p>

                        

                </div>

            </div>

            <div class="column" >

                <div class="columns">

                    <div class="column is-one-fifth">



                    </div>

                        

                    

                    <div id="login" class="login">

                        

                                <div class="login-card login">



                                    <div class="card-title">

                                    <h1>Sign In</h1>

                                    </div>



                                    <div class="content">

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

                                            <div class="IS-text-info alert alert-success alert-dismissable">

                                              

                                                <?php echo $success; ?>                    

                                            </div>

                                        <?php } ?>

                                       

                                    <form action="<?php echo base_url(); ?>Login/loginMe" method="post">



                                        <input id="email" type="email" name="Email_id" title="email" type="email form-control" placeholder="Email" name="email" required>

                                        <span class="info is-danger"><?php echo form_error('email'); ?></span>

                                        <input id="password" type="password" name="Password" title="password" type="password form-control" placeholder="Password" name="password" required>



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

                                                <a href="<?php echo base_url() ?>registerMe" class="button in-mobile  is-primary">

                                                Register

                                                </a>

                                            </p>      

                                    </div>

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

<section class="hero" style="height:500px;background:url('<?php echo base_url(); ?>images/emp_1.jpg') center / cover;">

    <div class="columns " style="padding:50px 0px;">

        <div class="column"></div>

        <div class="column is-two-third desktop"  style="padding-left:100px;padding-top:80px;">

            <div class="" style=""> 

            <h1 class="roboto" style=" font-size: 2.5rem !important;line-height: 20px !important;font-weight: 800;color:#1b3f58;">Find a unique  candidate.</h1>

            <br>

            <h1 class="openSans " style=" font-size: 1.8rem !important;line-height: 40px !important;color:#052429;font-weight: 100;">Now get the best <strong class=has-text-primary> Employees </strong> from us</h1>     

            

                

            </div>

            <br>

            

            

        </div>

     </div>                               

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