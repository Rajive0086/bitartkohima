<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nagaland Job Centre</title>
    <?php $this->load->view('common/employer_zone_css'); ?>
<!-- .inline-css -->
<style type="text/css">

    @media (max-width: 768px){
        :root { font-size: 100%; }
        .footer-mobile {
                padding-left:20px;
                padding-right:20px;
        }
        .quot { padding:5px 10px; }
    }
</style>
 <!-- /.inline-css -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- .hero -->

    <!-- .navbar -->
    <?php $this->load->view('common/employer_navbar'); ?> 
    <!-- /.navbar -->

      
   <!-------------- .main-content ---------->
     <main class="content content-push-right ">
         
        <!--   /.container -->
        <div class="container" >
            <div class="columns">
                 <div class="column is-half is-offset-one-quarter">
                <?php 
                    if($this->session->flashdata('job_post_message')==true){
                        echo '<div class="notification is-success">'.$this->session->flashdata("job_post_message").'</div>';
                    }  
                ?>
            </div>
            </div>
           
             

                 <!-- .column -->
                <div class="column is-8 is-offset-2">
                        <form method="post" action="<?= base_url() ;?>employer_post_job/submit_job">
                          <!--   .box -->
                          <div class="box">
                            <div class="field">
                                <div class="control">
                                    <label>Company/Firm Name</label>
                                    <input class="input" name="company"  autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <label>Location of Job (city/state)</label>
                                    <input class="input" name="job_location"  >
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <label>Job title</label>
                                    <input class="input" name="job_title"  >
                                </div>
                            </div>
                             <div class="field">
                                <div class="control">
                                    <label>Job Experience Required</label>
                                    <input class="input" name="job_experience"  >
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                  <label>Job Description</label>
                                  <textarea class="textarea is-info" name="job_description" placeholder="Info textarea"></textarea>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <label>Salary (optional)</label>
                                    <input class="input" name="salary"  >
                                </div>
                            </div>
                          </div>
                          <!--   .box -->
                            <button type="submit" name="insert" value='insert' class="button is-block is-info">Post</button>
                        </form>
                    </div>
                    <!-- /.column -->
                </div>
              <!--   /.container -->
     </main>
    <!-------------- /.main-content ---------->






















<!-- .Footer -->
<?php //$this->load->view('common/footer'); ?>
<!-- /.Footer -->
<?php $this->load->view('common/employer_scripts'); ?>
</body>
</html>
