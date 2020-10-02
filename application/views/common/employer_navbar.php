<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


  <!-------------------- .navbar ----------------------->
  <section class="hero " style="">
     <nav class="hero navbar header-fixed is-white" style="width:100% ;">
        <div class="navbar-brand columns  is-mobile is-marginless heading has-text-weight-bold">
            <div class="column left">
                <figure class="image" >
               <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url() ?>images/yn_logo.jpg" style="width: 6.25rem; z-index:999;   height:40px;width:41px;margin:-3px 0 0 0;"></a>
            </figure>  
            <h1 style="font-size:18px;font-weight:800;margin:0 0 0 10px;line-height:19px;border-left:2px solid #000;padding-left:9px; ;">NAGALAND JOB<br> CENTRE</h1>
            </div>
            <div class="column center desktop">
                <p class="navbar-item has-text-black">Kohima: 999-999-9999 </p>
                <p class="navbar-item has-text-black">Dimapur: 999-999-9999 </p>
            </div>
            <div class="column right">
              <?php if(!($this->session->userdata('user_id') || $this->session->userdata('employer_id'))):  ?>
                <a href="<?php echo base_url() ?>register" class="navbar-item  has-text-black desktop"><?php echo $this->session->userdata('user_id')? '': 'REGISTER';  ?></a>
              <?php endif; ?>
           
                <?php if($this->session->userdata('user_id') || $this->session->userdata('employer_id')): ?>
                   <div class="dropdown is-right">
                     <div class="dropdown-trigger">
                     
                        <span><?php echo $this->session->userdata('first_name'); ?></span>
                       <span class="icon is-small"><i class="fas fa-angle-down"></i></span>
                   
                     </div>
                     <div class="dropdown-menu" id="dropdown-menu1" role="menu">
                       <div class="dropdown-content">
                          <a class="dropdown-item">Profile</a>
                          <?php if($this->session->userdata('user_id')): ?>
                             <a href="<?php echo base_url() ?>private_area/logout" class="dropdown-item ">Logout</a> 
                           <?php elseif($this->session->userdata('employer_id')): ?> 
                             <a href="<?php echo base_url() ?>employer_zone/logout" class="dropdown-item ">Logout</a> 
                          <?php endif; ?>
                       </div>
                     </div>
                   </div> 
                <?php else : ?>
                   <a href="<?php echo base_url() ?>Candidate_login" class="navbar-item  has-text-black desktop">LOGIN</a>
                <?php endif; ?>
            </div>
        </div>
      </nav>
      <header class="hero navbar header-fixed is-warning" style="width:100%;">
          <!-------- .container -------->
           <div class="container" >
            <!------------ .side-menu-humburger ------------->
            <?php if($this->session->userdata('employer_id')): ?>
              <div id="navbar-menu" class="navbar-menu is-static">
                <div class="navbar-start">
                  <a class="navbar-item is-hidden-mobile">
                    <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                      <svg width="1000px" height="1000px">
                        <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                        <path class="path2" d="M 300 500 L 700 500"></path>
                        <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                      </svg>
                      <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                    </div>
                  </a>
                </div>
              </div>
            <?php endif; ?>
              <!------------ /.side-menu-humburger ------------->

              <div class="navbar-brand is-mobile is-marginless heading has-text-weight-bold">
                <!------------ /.side-menu-humburger-@mobile-view ------------->
                 <?php if($this->session->userdata('employer_id')): ?>
                  <div class="navbar-brand" id="hamburger" style="">
                      <a class="navbar-item is-hidden-desktop is-hidden-tablet">
                        <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                          <svg width="1000px" height="1000px">
                            <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                            <path class="path2" d="M 300 500 L 700 500"></path>
                            <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                          </svg>
                          <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                        </div>
                      </a>
                  </div>
                <?php endif; ?>
                  <!------------ /.side-menu-humburger-@mobile-view ------------->
                  <!------------ .main-menu-humburger-@mobile-view -------------->
                  <span class="navbar-burger burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                  <!------------ /.main-menu-humburger-@mobile-view -------------->
              </div>
              <div id="navMenu" class="navbar-menu" style="padding-right:20px">
                  <div class="navbar-end">
                        <p class="<?php echo activate_menu('Home'); ?> navbar-item is-mobile is-marginless heading has-text-black has-text-weight-bold"><a class=" nav-hover" href="<?php echo base_url() ?>">HOME</a></p>
                      <p class="<?php echo activate_menu('About'); ?>  navbar-item is-mobile is-marginless heading has-text-black has-text-weight-bold"><a class=" nav-hover" href="<?php echo base_url() ?>about">ABOUT</a></p>
                      <p class="<?php echo activate_menu('Articles'); ?>  navbar-item is-mobile is-marginless heading has-text-black has-text-weight-bold"><a class=" nav-hover" href="<?php echo base_url() ?>articles">ARTICLES</a></p>
                      <p class="<?php echo activate_menu('JobSearch'); ?> navbar-item is-mobile is-marginless heading has-text-black has-text-weight-bold"><a class=" nav-hover" href="<?php echo base_url() ?>Jobs">JOB SEARCH</a> </p>
                      <p class="<?php echo activate_menu('skillCareer'); ?>  navbar-item is-mobile is-marginless heading has-text-black has-text-weight-bold"><a class=" nav-hover" href="<?php echo base_url() ?>Career">SKILL & CAREER</a> </p>
                      <!-- <p class=" nav-hover navbar-item is-mobile is-marginless heading has-text-black has-text-weight-bold"><a href="http://localhost:8080/njc_dev2/Recruiter_login">RECRUITER</a></p>
                      <?php if(!$this->session->userdata('user_id')): ?> -->
                        <p class=" nav-hover navbar-item is-mobile is-marginless heading has-text-black has-text-weight-bold"><a href="<?php echo base_url() ?>employer_login">EMPLOYER</a></p>
                      <?php endif; ?>  

                  </div>
              </div>
          </div>
          <!-------- .container -------->
      </header>
  </section>
  <!------------------- /.navbar ------------------>





    <!-------------- .SIDE-MENU ------------------->
    <?php if($this->session->userdata('employer_id')): ?>
    <div class="sidebar">
      <div class="sidebar-header">

        <a class="sidebar-close-icon" href="javascript:void(0);" style="right:15px;position:absolute;">
            <i class="fas fa-times-circle " style="height:30px;width:30px;color:#fff"></i>
        </a>

      </div>
      <div class="inner" style="top:32px;">
        <ul class="sidebar-menu">
          <li class="have-children <?php if($this->uri->segment(1)=='employer_manage_jobs' || $this->uri->segment(1)=='Employer_manage_jobs'){echo "active";} ?>">
            <a href="<?php echo base_url() ?>employer_manage_jobs">
              <!-- fas fa-angle-right -->
              <span class="fas fa-user"></span>
              Manage Job(s)
            <!--  <span class="fas fa-angle-right" style="float:right;"></span> -->
            </a>
          </li>
          <li class="have-children <?php if($this->uri->segment(1)=='employer_post_job'){echo "active";} ?>">
            <a href="<?php echo base_url() ?>employer_post_job">
              <!-- fas fa-angle-right -->
              <span class="fas fa-user"></span>
              Post Job
            <!--  <span class="fas fa-angle-right" style="float:right;"></span> -->
            </a>
          </li>
       <!--    <li class="have-children">
            <a href="#">
 
              <span class="fas fa-user"></span>
              User
             <span class="fas fa-angle-right" style="float:right;"></span>
            </a>
          <ul>
              <li>
                <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                  Profile
                </a>
              </li>
              <li>
                <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                  Account
                </a>
              </li>
              <li>
                <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                  Settings
                </a>
              </li>
            </ul>
          </li> -->
         <!--  <li class="have-children">
            <a href="#">
              <span class="fas fa-envelope"></span>
              Messages
              <span class="fas fa-angle-right" style="float:right;"></span>
            </a>
            <ul>
              <li>
                <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                  Inbox
                </a>
              </li>
              <li>
                <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                  Compose
                </a>
              </li>
            </ul>
          </li> -->
         <!--  <li class="have-children">
            <a href="#">
              <span class="fa fa-image"></span>
              Images
              <span class="fas fa-angle-right" style="float:right;"></span>
            </a>
            <ul>
              <li>
                <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                  Library
                </a>
              </li>
              <li>
                <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                  Upload
                </a>
              </li>
            </ul>
          </li> -->
    <!--       <li class="have-children">
            <a href="#">
              <span class="fa fa-cog"></span>
              Settings
              <span class="fas fa-angle-right" style="float:right;"></span>
            </a>
            <ul>
              <li>
                <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                  User settings
                </a>
              </li>
              <li>
                <a href="https://themes.gohugo.io//theme/hugo-fresh/">
                  App settings
                </a>
              </li>
            </ul>
          </li> -->
        </ul> 
      </div>
    </div>
     <?php endif; ?>
    <!-------------- /.SIDE-MENU ------------------->


  