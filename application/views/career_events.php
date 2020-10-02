<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>

<html lang="en">

<head>

	<title>Services</title>

	<?php $this->load->view('common/css'); ?>

    <style type="text/css">

      .header-fixed {

       

        }



        .header-hidden {

	       

            position: fixed;

        }



        .hero {

            background:  url('<?php echo base_url(); ?>images/.jpg') center / cover;

        }

        

        @media (max-width: 1024px) { .hero { background:  url('<?php echo base_url(); ?>images/.jpg') center / cover; } 

        .mobile{padding:0px 20px !important}

        }

        @media (max-width:  768px) { .hero { background:  url('<?php echo base_url(); ?>images/.jpg') center / cover;  } 

               

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

           

        }

        hr{

   height:3px;

   background-color:yellow;

   border:none;

   width:20%;

   

}

    </style>

</head>

<body bgcolor=#F8F8F8>

<section class="hero is-medium" style="background-color:#d0dbdd !important ;height:300px !important;">

	<!-- .navbar -->

	<?php $this->load->view('common/navbar-2'); ?>

	<!-- /.navbar -->

    <div class="hero-body ">

        <div class="is-overlay has-text-centered single-spaced" style="top: 140px;">

            <div> 

                

				<h3 class="  roboto" style="color: #3ac7c7;font-weight:600;font-size:2.5rem !important;line-height:0px !important">Support & Services</h1>	

                <h2 class="subtitle is-4 has-text-weight-light has-text-white " style="line-height:29px !important"><br>Areas what we serve </h2>						

                <div class="subtitle has-text-centered control">

                   

                </div>

            </div>

        </div>

    </div>

    </section>

<section class=section>

 <!--  <main class="hero-foot center" style="padding:0px 20px; margin-top:-200px; margin-bottom:100px;">

    <div class="columns " >

        <div class="column is-4 "style="padding:0px px;"  >

          <div class=" is-shady borderless box" style=" box-shadow: 1px 15px 20px 1px #E0E0E0 " >

            <div class="card-image" >

              <figure class="image is-4by3" style="padding:60px;">

                <img src="<?php echo base_url();?>images/illustration-one.svg" alt="Placeholder image" class="modal-button" data-target="modal-image2">

              </figure>

            </div>

            <div class="card-content">

              <div class="content content-align-center">

                <h4 class=has-text-black>Articles</h4>

                <p class=has-text-black>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum vero quibusdam asperiores deleniti, ducimus odio illo? Natus mollitia ducimus, reprehenderit fugiat pariatur incidunt. </p>

                <span class="button is-link modal-button" data-target="modal-image2">Image modal</span>

              </div>

            </div>

          </div>

        </div>

        <div class="column is-4  " style="padding:0px 20px;">

          <div class=" is-shady borderless box" style=" box-shadow: 1px 15px 20px 1px #E0E0E0 ">

            <div class="card-image">

              <figure class="image is-4by3" style="padding:60px;">

                <img src="<?php echo base_url();?>images/illustration-two.svg" alt="Placeholder image">

              </figure>

            </div>

            <div class="card-content">

              <div class="content content-align-center">

                <h4 class=has-text-black>Articles</h4>

                <p class=has-text-black>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium labore quod saepe perspiciatis harum voluptatibus qui quo atque velit distinctio et iure est laudantium, </p>

                <span class="button is-link modal-button" data-target="modal-card">Modal Card</span>

              </div>

            </div>

          </div>

        </div>

        <div class="column is-4 " style="padding:0px 20px;">

          <div class=" is-shady borderless box" style=" box-shadow: 1px 15px 20px 1px #E0E0E0 ">

            <div class="card-image" >

              <figure class="image is-4by3" style="padding:60px;">

                <img src="<?php echo base_url();?>images/illustration-three.svg" alt="Placeholder image">

              </figure>

            </div>

            <div class="card-content">

              <div class="content content-align-center">

                <h4 class=has-text-blacke>Articles</h4>

                <p class=has-text-black>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eligendi sit id omnis temporibus tempora sequi officiis molestias repellat in quis qui possimus dolores, </p>

                <span class="button is-link modal-button" data-target="modal-image">Image modal</span>

              </div>

            </div>

          </div>

        </div>

      </div>

      

  </main>		 -->	



  	

  <main class="hero-foot center mobile" style="padding:0px 100px; ; margin-bottom:100px;">

    <div class="columns " >

        <div class="column is-4 "style="padding:0px 1px;"  >

          <div class=" is-shady borderless box" style=" box-shadow: 1px 15px 20px 1px #E0E0E0 " >

            <div class="card-image" >

              <figure class="image is-4by4" style="padding:2  0px;">

                <img src="<?php echo base_url();?>images/net.jpg" alt="Placeholder image" class="modal-button" data-target="modal-image2">

              </figure>

            </div>

            <div class="card-content">

              <div class="content content-align-center">

                <h4 class=has-text-black>Infrastructure  & Network</h4>

                <p class=has-text-black>Bitart provider focused on Digital Infrastructure, Business , Cloud, Security. We deliver this technology expertise through a full life cycle , managed, and support services including strategy, consulting, implementation and design.y taking the time to deeply understand how our clients define success, we help them harness technology advances, simplify IT complexity and optimize their environments </p>

                <span class="button is-link modal-button" data-target="modal-image2">Explore</span>

              </div>

            </div>

          </div>

        </div>

        <div class="column is-4  " style="padding:0px 1px ; ">

          <div class=" is-shady borderless box" style=" box-shadow: 1px 15px 20px 1px #E0E0E0 ">

            <div class="card-image">

              <figure class="image is-4by4" style="padding:20px;">

                <img src="<?php echo base_url();?>images/cctv.png" alt="Placeholder image">

              </figure>

            </div>

            <div class="card-content">

              <div class="content content-align-center">

                <h4 class=has-text-black>Securuty Servilance</h4>

                <p class=has-text-black>  For the very best in security, you need a complete protection plan that includes electronic security and video surveillance. If you have been looking into security systems for your business, surveillance solutions from Bitart are the cost-effective, state-of-the-art answer.</p>

                <span class="button is-link modal-button" data-target="modal-card">Explore</span>

              </div>

            </div>

          </div>

        </div>

        <div class="column is-4 " style="padding:0px 1px;">

          <div class=" is-shady borderless box" style=" box-shadow: 1px 15px 20px 1px #E0E0E0 ">

            <div class="card-image" >

              <figure class="image is-4by4" style="padding:20px;">

                <img src="<?php echo base_url();?>images/comm.jpg" alt="Placeholder image">

              </figure>

            </div>

            <div class="card-content">

              <div class="content content-align-center">

                <h4 class=has-text-blacke>Comminication System</h4>

                <p class=has-text-black>Business communication systems are the means by which businesses pass the information along. This can be internal, among employees or external, to the general public and to customers. The most basic form of a communication system is email support and/or phone. More robust business communication systems come with support for instant messaging, video conferencing, and audio transmissions</p>

                <span class="button is-link modal-button" data-target="modal-image">Explore<span>

              </div>

            </div>

          </div>

        </div>

        

      </div>

      

  </main>		

  <main class="hero-foot center mobile" style="padding:0px 100px; margin-top:-20px; margin-bottom:100px;">

    <div class="columns " >

        <div class="column is-4 "style="padding:0px 1px;"  >

          <div class=" is-shady borderless box" style=" box-shadow: 1px 15px 20px 1px #E0E0E0 " >

            <div class="card-image" >

              <figure class="image is-4by4" style="padding:20px;  ">

                <img src="<?php echo base_url();?>images/cutom-dev.jpg" alt="Placeholder image" class="modal-button" data-target="modal-image2">

              </figure>

            </div>

            <div class="card-content">

              <div class="content content-align-center">

                <h4 class=has-text-black>Custom Software</h4>

                <p class=has-text-black>Our team is skilled at developing solutions using pretty much any modern programming language.</p>

                <span class="button is-link modal-button" data-target="modal-image2">Explore</span>

              </div>

            </div>

          </div>

        </div>

        <div class="column is-4  " style="padding:0px 1px ; ">

          <div class=" is-shady borderless box" style=" box-shadow: 1px 15px 20px 1px #E0E0E0 ">

            <div class="card-image">

              <figure class="image is-4by4" style="padding:20px;">

                <img src="<?php echo base_url();?>images/Best-Development-company-1.png" alt="Placeholder image">

              </figure>

            </div>

            <div class="card-content">

              <div class="content content-align-center">

                <h4 class=has-text-black>Website</h4>

                <p class=has-text-black>We can build any type or size website you require, from small custom designed websites to highly advanced online stores.</p>

                <span class="button is-link modal-button" data-target="modal-card">Explore</span>

              </div>

            </div>

          </div>

        </div>

        <div class="column is-4 " style="padding:0px 1px;">

          <div class=" is-shady borderless box" style=" box-shadow: 1px 15px 20px 1px #E0E0E0 ">

            <div class="card-image" >

              <figure class="image is-4by4" style="padding:20px;">

                <img src="<?php echo base_url();?>images/mob.png" alt="Placeholder image">

              </figure>

            </div>

            <div class="card-content">

              <div class="content content-align-center">

                <h4 class=has-text-blacke>Mobile Application</h4>

                <p class=has-text-black> Your dream deserves more than a place in your imagination. How about a place in Apple App Store, and Google Play Store? Our mobile app developers can build the mobile app to your requirement, in your budget and as per your timeline.</p>

                <span class="button is-link modal-button" data-target="modal-image">Explore<span>

              </div>

            </div>

          </div>

        </div>

        

      </div>

      

  </main>	



</section>

<section class="hero is-fullheight" style="background-image:url('<?php echo base_url();?>images/);">

    <div class=columns>

        <div class="column is-one-third" style="padding:50px; padding-top:20px" >

        <div class="card-image" >

              <figure class="image is-4by4" >

                <img src="<?php echo base_url();?>images/mwc.png" alt="Placeholder image" class="modal-button" data-target="modal-image2">

              </figure>

            </div>

           

        </div>

        <div class="column is-two-third" style="padding:60px;" >

        <h1 class="title is-4 has-text-black">TRAINING & CAREER</h1>

            <p class=has-text-black>We also provide training in collaboration with Microworld Institution, an institution with bold ambition to be recognised as an innovative leader in the computer education sector. Our focus and approach have evolved since the organisation was founded in 1998, a history that provides important context on who we really are today.</p>

            <div class="subtitle  control">

                    <a class="button is-info">

                        More

                    </a>

            </div>

        </div>

    </div>

</section>





<!-- .Footer -->

<?php $this->load->view('common/footer'); ?>

<!-- /.Footer -->



<!-- .Scripts -->

<?php $this->load->view('common/scripts'); ?>

<!-- /.Scripts -->	

<script>

$(() => {

  $('#edit-preferences').click(function(){

   $('#edit-preferences-modal').addClass('is-active');

  });

  $('.modal-card-head button.delete, .modal-save, .modal-cancel').click(function(){

    $('#edit-preferences-modal').removeClass('is-active');

  });

});

</script>

<body>

