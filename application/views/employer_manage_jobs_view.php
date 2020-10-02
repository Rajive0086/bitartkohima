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
         
        <!--   .container -->
       <!--  <div class="container" > -->
            <!----- .flash-message ------>
            <div class="columns">
                 <div class="column is-half is-offset-one-quarter">
                    <?php 
                        if($this->session->flashdata('job_post_message')==true){
                            echo '<div class="notification is-success">'.$this->session->flashdata("job_post_message").'</div>';
                        }  
                    ?>
                 </div>
             </div>
            <!----- /.flash-message ------>

            <!------- .table-container -------> 
            <div class="table-container">
                <table class="table is-striped is-bordered  is-fullwidth is-hoverable">
                <thead >
                        <th >Job Id</th>
                        <th>Company/Firm Name</th>
                        <th>Job Location</th>
                        <th>Job Title</th>
                        <th>Job Experience Required</th>
                        <th>Job Description</th>
                        <th>Salary</th>
                        <th>Date</th>
                        <th colspan="2">Action</th>
                </thead>
                <tbody>
                <?php 
                    if($jobsByEmployer->num_rows() > 0)
                    {
                        foreach($jobsByEmployer->result() as $row)
                        {
                ?>          
                        <tr >
                            <td class="$table-row-active-background-color"><?php echo $row->job_id; ?></td>
                            <td><?php echo $row->company; ?></td>
                            <td><?php echo $row->job_location; ?></td>
                            <td><?php echo $row->job_title; ?></td>
                            <td><?php echo $row->job_experience; ?></td>
                            <td><?php echo $row->job_description; ?></td>
                            <td><?php echo $row->salary; ?></td>
                            <td><?php echo $row->posted_on; ?></td>
                            <td><a href="#" class="delete_data button is-danger" id="<?php echo $row->job_id; ?>">Delete</a></td>
                            <td><a href="#" class="button is-info">Edit</a></td>
                        </tr>
                <?php  
                        }
                    }else
                    {
                ?>
                        <tr>
                            <td colspan="3">No data found</td>
                        </tr>
                <?php   
                    }
                 ?> 
                
                    
                </tbody>
            </table>
       </div>
        <!------- /.table-container ------->

<!-- 
         </div> -->
         <!----- /.container ----->
           
             

               
     </main>
    <!-------------- /.main-content ---------->






















<!-- .Footer -->
<?php //$this->load->view('common/footer'); ?>
<!-- /.Footer -->
<?php $this->load->view('common/employer_scripts'); ?>
</body>
</html>
