<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
	<link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <?php $this->load->view('common/css'); ?>
    <style>
		
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <script src="<?php echo base_url(); ?>assets/scripts/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 
  </head>
  <body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">
  <header class="hero header-fixed  navbar is-warning"style=" width:100%; ">
    <div id="navbar-container" class="container" style="padding-right:20px;padding-left:20px;max-width:100% !important">
      <div class="navbar-brand is-mobile is-marginless heading has-text-weight-bold">
          <figure class="image" style="padding:0;" >  
              <img src="<?php echo base_url() ?>images/newlogo.jpg" style="margin-top:30px:;width: 3.88rem;   ">
            
          </figure>
          <h1 class=" " style=" font-size: 1rem !important;line-height: 21px !important;color:#052429;font-weight: 400;padding-top:5px;padding-left:7px; "><strong>Nagaland</strong> <br>Job Centre</h1>
      
        <span class="navbar-burger burger" data-target="navMenu">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
      <div id="navMenu" class="navbar-menu ">
      
           <div class="navbar-end  ">
              <p class=" <?php echo activate_menu('about'); ?> nav-hover navbar-item is-mobile is-marginless has-text-black "><a  href="<?php echo base_url() ?>about">ABOUT</a></p>
              <p class="<?php echo activate_menu('articles'); ?> nav-hover navbar-item is-mobile is-marginless has-text-black"><a href="<?php echo base_url() ?>articles">ARTICLES</p>  </p> 
              <p class="<?php echo activate_menu('Jobs'); ?> nav-hover navbar-item is-mobile is-marginless  has-text-black "><a href="<?php echo base_url() ?>Jobs">JOB SEARCH</a> </p>
              <p class="<?php echo activate_menu('Career'); ?> nav-hover navbar-item is-mobile is-marginless  has-text-black"><a href="<?php echo base_url() ?>Career">SKILL & CAREER</a> </p>
              <p><div class="navbar-item has-dropdown has-background-warning is-hoverable">
            <a class="navbar-link  nav-hover navbar-item is-mobile is-marginless  has-text-black  ">
              
            <?php echo $this->session->userdata('First_Name');?>&nbsp;<?php echo $this->session->userdata('Last_Name'); ?>
            </a>

            <div class="navbar-dropdown is-right has-background-warning">
                <a class="nav-hover navbar-item is-mobile is-marginless  has-text-black" href="<?php echo base_url(); ?>profile" class="button btn-warning"><i class="fa fa-user-circle"></i> &nbsp;&nbsp;&nbsp;Profile</a>
                
                <a class="nav-hover navbar-item is-mobile is-marginless  has-text-black " href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp; Sign out</a>
            
          </div>
      </div>
  </div>
		</div>
	  </div>
</header> 
   
     
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" style="z-index: 0!important;height:100%">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
          
            <li class="treeview">
              <a href="<?php echo base_url(); ?>dashboard">
              <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>calendar" >
              <i class="far fa-calendar-alt"></i>
                <span>Calendar view Evets</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#" >
              <i class="fas fa-poll-people"></i>
                <span>Candidate</span>
              </a>
            </li>
            
            
           
            <li class="treeview">
              <a href="<?php echo base_url(); ?>jobPosted" >
              <i class="fas fa-tasks"></i>
                <span>Manage Jobs</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>scheduleInterview" >
              <i class="fas fa-clipboard-list"></i>
                <span>Schedule Interview</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>profile" >
              <i class="fal fa-sms"></i>
                <span>Send Message</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>JobPost">
              <i class="fas fa-address-card"></i>
                <span>Jobs Post</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#" >
              <i class="fas fa-comments"></i>
                <span>Chat</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>profile" >
              <i class="fas fa-user-circle"></i>
                <span>Profile</span>
              </a>
            </li>
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>