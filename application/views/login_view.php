<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <?php $this->load->view('common/css'); ?>
</head>
<body  bgcolor=#d0dbdd>
   
<section class="hero is-fullheight">
<?php $this->load->view('common/navbar-2'); ?>
    <main class="hero-foot " style="  margin-bottom:100px;"> 
        <div class=" columns "style="padding:40px 0px;">
            <div class="column container is-7  is-vcentered      is-bold desktop"style="padding-left:100px;padding-top:50px">
                <h1 class="roboto" style="">Take charges of<br> your career</h1>
               <br> <h1 class="openSans " style=" font-size: 1.8rem !important;line-height: 40px !important;color:#052429;font-weight: 100;">We support <strong class=has-text-primary> professionels </strong> through <br>training and Opportunaties</h1>  
               <br><p class="control">
                    <a href="<?php echo base_url() ?>register" class="button is-primary" >
                    Register Now
                    </a>
                </p> 
            </div>
            <div class="column is-5"style="" >
                <div class="  has-text-centered">
                    <div id="login" class="login">
                        <div class="login-card login">

                            <div class="card-title">
                            <h1>Please Sign In</h1>
                            </div>

                            <div class="content">
                            <form method="post" action="<?= base_url( ); ?>login/validation">

                                <input id="email" type="email" name="email" title="email" placeholder="Email" required value="<?php echo set_value('email'); ?>"   autofocus="">
                                <span class="info is-danger"><?php echo form_error('email'); ?></span>
                                <input id="password" type="password" name="password" title="password" placeholder="Password"  value="<?php echo set_value('password') ?>"   required>

                                <div class="level options">
                                <div class="checkbox level-left">
                                    <input type="checkbox" id="checkbox" class="regular-checkbox">
                                    <label for="checkbox"></label>
                                    <span>Remember me</span>
                                </div>

                                <a class="btn btn-link level-right" href="#">Forgot Password?</a>
                                </div>

                                <button type="submit" class="btn btn-primary">Login</button>
                                <?php echo $this->session->flashdata('error'); ?>
                            </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
        
</section>
 <!-- /.hero -->

    <!--  .navbar -->
    <?php $this->load->view('common/footer'); ?>
    <!--  /.navbar -->
  <!-- .Scripts -->
    <?php $this->load->view('common/scripts'); ?>
<!-- /.Scripts -->  
</body>


</html>