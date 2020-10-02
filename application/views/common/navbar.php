 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <section class="">
  
  <header class="header-fixed  navbar "style=" width:100%; ">
    <div id="navbar-container" class="container" style="padding-right:20px;padding-left:20px;max-width:100% !important">
        <div class="navbar-brand is-mobile is-marginless heading has-text-weight-bold" style="padding:0;">
          <figure class="image" style="padding:0;" >
             

          </figure>
           <h1 class=" " style="color:white !important;font-size: 0.6rem !important;line-height: 0px !important;color:#052429;font-weight: 400;padding-top:5px;padding-left:7px; "><strong ><a href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>images/newlogo.png" style="margin-top:30px:;width: 5rem;margin-top:  "></a></strong> <br></h1> </a>
          <span class="navbar-burger burger" data-target="navMenu" style="color:white;font-size:20px">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navMenu" class="navbar-menu" >
	        <div class="navbar-end  ">
      				<p class=" -white navbar-item is-mobile is-marginless"><a   style="color:#002046" class=" nav-hover" href="<?php echo base_url() ?>">HOME</a></p>
      				<p class="<?php echo activate_menu('About'); ?>  has-text-primary navbar-item is-mobile is-marginless"><a style="color:#002046" class=" nav-hover" href="<?php echo base_url() ?>about">ABOUT</a></p>
          		<p class="<?php echo activate_menu('Articles'); ?>has-text-primary navbar-item is-mobile is-marginless"><a style="color:#002046" class=" nav-hover" href="<?php echo base_url() ?>articles">TEMPLATES</a></p>
          			<!-- <p class="<?php echo activate_menu('JobSearch'); ?> has-text-primary navbar-item is-mobile is-marginless"><a style="color:white !important" class=" nav-hover" href="<?php echo base_url() ?>Jobs">CLIENTS</a> </p>-->
          		<p class="<?php echo activate_menu('skillCareer'); ?> has-text-primary navbar-item is-mobile is-marginless"><a style="color:#002046" class=" nav-hover" href="<?php echo base_url() ?>Career">SERVICES</a> </p>
          	  
              <?php if(!$this->session->userdata('user_id')): ?>
            		<p class="<?php echo activate_menu('Employer'); ?> has-text-link navbar-item is-mobile is-marginless"><a style="color:#002046 " class=" nav-hover" href="<?php echo base_url() ?>Candidate_login">LOGIN</a> </p>
               <?php endif; ?> 
               <p class="<?php echo activate_menu('Recruiter'); ?>  navbar-item is-mobile is-marginless"><a style="color:#002046" class=" nav-hover" href="<?php echo base_url() ?>Login">ADMIN</a></p> 
               
	        </div>
	      </div>
	  </div>
</header>
</section>
