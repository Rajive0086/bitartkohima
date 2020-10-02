<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $currentPage = 'JobSearch';?>

<!DOCTYPE html>

<html lang="en">

<head>

	<title>Career and Events</title>

	<?php $this->load->view('common/css'); ?>



    </style>

</head>

<body bgcolor=#d0dbdd>



<section class="hero is-medium  is-bold" >

<?php $this->load->view('common/navbar'); ?>



 <!-- Content Header (Page header) -->



<section class="content">

	<main role="main" class="container" style="margin-bottom: 60px;">

	    <div class="container" style="padding-top:50px !important;padding:0px 30px">





            <!-- print the data in left side container -->



                <!-- print the main features -->



                <!-- print the other features using a table -->



                <table class="table is-fullwidth is-striped">

                    <tbody>

                        <tr>



                            <th>Job Title</th>

                            <td class=roboto style="font-size: 1rem !important;line-height: 20px !important;color:#052429;"id="phone-name"><strong class=has-text-primary><?php echo strtoupper($row->job_title);?></strong></td>

                        </tr>

                        <tr>



                            <th>Company</th>

                            <td><?php echo strtoupper($row->company)?></td>

                        </tr>

                        <tr>



                            <th>Location</th>

                            <td><?php echo $row->job_location; ?></td>

                        </tr>

                        <tr>



                            <td>Description</td>

                            <td><?php echo $row->job_description; ?></td>

                        </tr>

                        <tr>

                            <td>Address</td>

                            <td><?php echo $row->address; ?></td>

                        </tr>

                        <tr>

                            <th rowspan="">Posted On</th>



                            <td></td>

                        </tr>

                        <tr>

                            <td>Salary</td>

                            <td><?php echo $row->salary; ?></td>

                        </tr>

                        <tr>

                            <td></td>

                            <td>

                                <div>

                                    <p class="control">

                                        <a href="<?php echo base_url(); ?>fetch/compare_phones/<?php echo $row->job_id; ?>" class="button is-primary">

                                        Apply

                                        </a>

                                    </p>

                                </div>

                            </td>

                        </tr>



                    </tbody>



                </table>

            </div>



	    </div>

	</main>



    </section>

<!-- .Footer -->

<?php $this->load->view('common/footer'); ?>

<!-- /.Footer -->



<!-- .Scripts -->

<?php $this->load->view('common/scripts'); ?>

<!-- /.Scripts -->

</body>

