<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <?php $this->load->view('common/css'); ?>
</head>
<body  bgcolor=#F8F8F8>

    <section class="hero is-fullheight">
<?php $this->load->view('common/navbar'); ?>
    <main class="hero-foot center" style="  margin-bottom:100px;">
    <div class="columns  " >
        <div class="column is-two-third ">

          <div class=" columns box" style=" margin:30px;padding:0; " >
            <div class="column is-5"style="padding:100px 30px;" >
            <div class="  has-text-centered">
                <div class="column  ">
                    <h3 class="title is-size-3 has-text-primary">Sign in </h3>
                    <p class="heading is-text-bold has-text-warning">Please login to proceed.</p>

                    <div class="">
                        <figure class="avatar">

                        </figure>
                        <form method="post" action="<?= base_url( ); ?>Candidate_login/validation">
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input is-primary is-rounded is-medium" name="email" value="<?php echo set_value('email'); ?>"  placeholder="Your Email" autofocus="">
                                    <span class="info is-danger"><?php echo form_error('email'); ?></span>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input type="password" class="input is-primary is-rounded is-medium" name="password" value="<?php echo set_value('password') ?>"   placeholder="Your Password">
                                    <span class="info is-danger"><?php echo form_error('password'); ?></span>
                                </div>
                            </div>
                            <div class="field">
                                <label class="checkbox">
                  <input type="checkbox">
                  Remember me
                </label>
                 </div>
                 <input type="submit" name="login" value="Login" class="button  is-primary is-medium is-fullwidth   is-rounded ">
                  <?php echo $this->session->flashdata('error'); ?>
                        </form>
                    </div>
                    <p class="has-text-grey">

                        <a href="../">Forgot Password</a>;

                    </p>
                </div>
            </div>
          </div>
           <div class="column container is-7  is-vcentered has-background-primary     is-bold" style="padding: 100px 30px">
           <h3 class=" has-text-white ftStaatliches is-size-4" align=left>Are you new to us?</h3><br>
                 <h3 class="subtitle is-info has-text-white"></h3>

                    <div class="  has-text-white">
                    <p class=" has-text-white"></p>
                    <article class="media">
                        <div class="media-left">

                        </div>
                        <div class="media-content">
                        <div class="content">
                            <p has-text-white>
                            <strong class="has-text-primary  has-text-warning">NJC</strong> <small >powered by Youth Net</small>
                            <br>
                                <p>Now searching job with NJC is in your finger tip, you will get easy notification , calender events, job alerts and many more.
                            </p>
                        </div><br><br><br>
                        <nav class="level is-mobile">
                            <div class="level-left">
                            <a class="level-item has-text-warning" aria-label="reply">

                                <a class="has-text-warning" href="../">Register with NJC</a> &nbsp;·&nbsp;

                            </a>
                            <a class="level-item has-text-warning" aria-label="retweet">
                                  <a class="has-text-warning" href="../">Need Help?</a>
                            </a>

                            </div>
                        </nav>
                        </div>
                    </article>
                            <p class="has-text-grey">



                    </p>
                        </form>
                    </div>

            </div>
          </div>

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
