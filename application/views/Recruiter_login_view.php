<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CodeInsect | Admin System Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition login-page">
  <?php $this->load->view('common/css'); ?>
  <div class="login-box">
      <div class="login-logo">
        <a href="#"><b></b> </a><br>
        <a href="<?php echo base_url(); ?>"><b>Admin</b>&nbsp;Pannel</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
       
      <p class="login-box-msg">Sign In</p>
        <?php $this->load->helper('form'); ?>
        <form action="<?php echo base_url(); ?>Login/loginMe" method="post"> 

        <div class="field">
          <p class="control has-icons-right ">
            <input class="input" name="Email_id" type="email" placeholder="Email">
            <span class="icon is-small is-right">
              <i class="fas fa-envelope"></i>
            </span>
           
          </p>
        </div>
        <div class="field">
          <p class="control  has-icons-right">
            <input class="input" type="password" name="Password" placeholder="Password">
            <span class="icon is-black is-small is-right">
              <i class="fas fa-lock "></i>
            </span>
          </p>
        </div>
          <br>
          <div class="field is-grouped center is-right">
            <div class="control center">
              <button class="button is-link is-right" value="Submit">Submit</button>
            </div>
    
            <div class="control">
              <a href="<?php echo base_url() ?>forgotPassword" class="button is-text">Forgot Password</a>
            </div>
          </div>

        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>