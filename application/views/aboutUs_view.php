<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>About us</title>
	<?php $this->load->view('common/css'); ?>
	<!-- .inline-css -->
     <style type="text/css">
      .header-fixed {
       
        }

        .about-heading1
		 {
		 	color: #3ac7c7;font-weight: 200;
		 }
		 
		 .about-heading2
		 {
		 	color: black;
		 }

        .hero {
            background:  url('<?php echo base_url(); ?>images/.jpg') center / cover;
        }
        .quot
            {
                padding:5px 80px;
            }
        @media (max-width: 1024px) { .hero { background:  url('<?php echo base_url(); ?>.jpg') center / cover; } 
        .quot
            {
                padding:5px 10px;
            }
        }
        @media (max-width:  768px) { .hero { background:  url('<?php echo base_url(); ?>images/bg_4newx.jpg') center / cover; } 
        .quot
            {
                padding:5px 10px;
            }
			
        }
        @media (max-width: 600px) {
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
			.about-heading1
			 {
				color: #3ac7c7;font-weight: 200;font-size:4rem;
			 }

			 .about-heading2
			 {
				color: black;font-size:4rem;
			 }
			.mobile-view
			{
				padding:60px 20px !important;
			}
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
<body bgcolor=#d0dbdd>
<!-- .hero -->

<section class="hero is-medium "style="height:100%" >
<?php $this->load->view('common/navbar-2'); ?>
    <!-- /.navbar -->
 
    <div class="columns mobile-view" style="padding:120px 100px;">
        <div class="column ">
            <div class="card-image" >
              <h1 class="roboto" style=""><strong class="about-heading1">EVERY</strong><br> <strong class="about-heading2">SUCCESS </strong><strong class="about-heading1">HAS<br>A </strong><strong class="about-heading2">STORY</strong></h1>
            </div>
        </div>
        <div class="column">
            <h1 class="subtitle heading  is-3 openSans " style="color:#1b3f58 !important;font-weight:800 !important;"> About Us</h1>
            <hr>
            <p class="openSans has-text-white" style="font-weight:50;color:#355758 !important;">Bitart exists to empower our clients with technology that creates meaningful social impact in their world. Our clients utilize Bitarts’s passion expertise in custom software development to create solutions that bring positive change. Join us in our crusade to make the world a better place through technology.</p>
            <br>
            <p  class="openSans has-text-white" style="font-weight:50;color:#355758 !important;"></p>
        </div>
    </div>
</section>
<section class="section medium" style="background:white;">	
   
    <main class="hero-foot center" style="padding: 2rem; ">
            <div id="grid2" style="width: 920px;">
                <div id="f" class="center-column">
                    <div class="">
                        <div class="center">
                            
                            <a href="#" ><img class=hovershedow  style="width:128px;height:128px;border-radius: 50%;" src="<?php echo base_url() ?>images/rajive.jpg" alt="Placeholder image"></a>
                            
                        </div>
                        <div class="card-content">
                            <div class="media">
                            
                            <div class="media-content">
                                <p class="title center is-4 ">Rajive Dasgupta</p>
                                <p class="subtitle center is-6  ">Founder / Programer</p>
                            </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <div id="g" class="center-column" style="">
                    <div class="">
                        
                        <div class="center">
                            
                            <img class=hovershedow  style="width:128px;height:128px;border-radius: 50%;" src="<?php echo base_url() ?>images/Ketu.jpg" alt="Placeholder image">
                            
                        </div>
                        <div class="card-content">
                            <div class="media">
                            
                            <div class="media-content">
                                <p class="title center is-4 ">Ketou Zhasa</p>
                                <p class="subtitle center is-6  ">Founder / Programer</p>
                            </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <div id="h" class="center-column" style="">
                    <div class="">
                        <div class="center">
                            
                            <img class=hovershedow  style="width:128px;height:128px;border-radius: 50%;" src="<?php echo base_url() ?>images/pradeep.jpg" alt="Placeholder image">
                            
                        </div>
                        <div class="card-content">
                            <div class="media">
                            
                            <div class="media-content">
                                <p class="title center is-4 ">Pradeep Sengupta</p>
                                <p class="subtitle center is-6  ">Database Developer</p>
                            </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <div id="i" class="center-column">
                    <div class="">
                        <div class="center">
                            
                            <img class=hovershedow  style="width:128px;height:128px;border-radius: 50%;" src="<?php echo base_url() ?>images/maren.jpg" alt="Placeholder image">
                            
                        </div>
                        <div class="card-content">
                            <div class="media">
                            
                            <div class="media-content">
                                <p class="title center is-4 ">Meren Lemtur</p>
                                <p class="subtitle center is-6  ">Programer</p>
                            </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <div id="j" class="center-column">
                   
                </div>
              
                <div id="l" class="center-column" style="">
                    <div class="">
                        <div class="center">
                            
                            <img class=hovershedow  style="width:128px;height:128px;border-radius: 50%;" src="<?php echo base_url() ?>images/as.png" alt="Placeholder image">
                            
                        </div>
                        <div class="card-content">
                            <div class="media">
                            
                            <div class="media-content">
                                <p class="title center is-4 ">Manshom </p>
                                <p class="subtitle center is-6  ">Programer</p>
                            </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <div id="m" class="center-column" style="">
                    <div class="">
                        <div class="center">
                            
                            <img class=hovershedow   style="width:128px;height:128px;border-radius: 50%;" src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                            
                        </div>
                        <div class="card-content">
                            <div class="media">
                            
                            <div class="media-content">
                                <p class="title center is-4 ">Bidu Ghosh</p>
                                <p class="subtitle center is-6  ">Trainer</p>
                            </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
    </main>	
  
    
    
</section>
<!--/.section carouso -->

<!-- .Footer -->
<?php $this->load->view('common/footer'); ?>
<!-- /.Footer -->

<!-- .Scripts -->
<?php $this->load->view('common/scripts'); ?>
<!-- /.Scripts -->	

	<!-- .inline-script	 -->	
    <script type="text/javascript">
	
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


	<!-- /.inline-script	 -->		
</body>
</html>			