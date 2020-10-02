<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $currentPage = 'JobSearch';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Career and Events</title>
	<?php $this->load->view('common/css'); ?>

    </style>
</head>
<body bgcolor=#F8F8F8>

<section class="hero is-medium is-primary is-bold" style="background-image:url('<?php echo base_url();?>images/Career-Banner.jpg');background-size:cover;height:400px">
<?php $this->load->view('common/navbar'); ?>
  <div class="hero-body">
    <div class="container">
      <h1 class="title has-text-info ftStaatliches">
        Find a job that suits  you
      </h1>
      <h2 class="subtitle">
        Primary bold subtitle
      </h2>
    </div>
  </div>
</section>
<section class="hero is-fullheight">

    <main class="hero-foot" style="padding:0px 50px;  margin-bottom:100px;">

    <div class="columns ">
        <div class="column is-two-third ">
        <div class="" style="width:100% ;padding:10px; ">
         <p class="subtitle heading ftStaatliches is-5 has-text-info"> Jobs Openings
        </div>
        <?php
          foreach($firstnames as $object )
          {
        ?>
          <div class=" columns" style="border-bottom: 2px solid green; box-shadow: 1px 1px 5px 1px #E0E0E0;margin-top:0px; " >
            <!-- <div class="column is-one-third"style="padding:0;" >
              <figure class="image is-4by3" >
                <img src="<?php echo base_url();?>images/download.png" alt="Placeholder image" class="modal-button" data-target="modal-image2">
              </figure>
            </div> -->

            <div class="column is-two-third" style="padding:10px 10px;background-color:white;">
              <div class="content content-align-right">
                <div id="grid">
                  <div id="b" class="">
                    <h4 class=has-text-black ><?php echo $object->job_title;?></h4>
                    <p class="heading has-text-info has-text-bold is-6" style="margin-top:-10px"><?php echo $object->company;?></p>
                  </div>
                  <div id="d" class="">
                    <img src="<?php echo base_url();?>images/download.png" alt="Placeholder image" class="modal-button" style="height:60px;">
                  </div>
                </div>
                <div id="grid">
                    <div id="b" class="">
                      <p class=has-text-black style="margin-top:-25px">Exp. 2-3 yrs</p>
                    </div>
                    <div id="c" class=" ">
                    <p class=has-text-black style="margin-top:-25px"> <i class="fas fa-map-marker-alt is-warning" style="margin-top:-25px;color:green"></i>&nbsp;<?php echo $object->job_location;?></p>
                    </div>
                </div>


                <p class="has-text-black shortpara" style="margin-top:10px"><?php echo $object->job_summary;?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

        <div class="column is-one-third " style=" margin-top:20px;">
          <div class=" is-shady borderless " style=" box-shadow: 1px 1px 5px 1px #E0E0E0; 10px;background-color:white; ">
            <div class="card-table ">
                    <div class="content">
                        <table class="table is-fullwidth is-striped">
                            <tbody>
                              <tr>
                                <td colspan=2 class="has-text-info ftStaatliches">Popular Jobs</td>

                              </tr>
                              <tr>
                                <td>Graphic Designer</td>

                                <td><a class="button is-small is-primary"  href="">View</a></td>
                              </tr>
                              <tr>
                                <td>Markiting Executive</td>
                                <td><a class="button is-small is-primary"  href="">View</a></td>
                              </tr>
                              <tr>
                                <td>Manager</td>

                                <td><a class="button is-small is-primary"  href="">View</a></td>
                              </tr>
                              <tr>
                                <td>Hotel Management</td>

                                <td><a class="button is-small is-primary"  href="">View</a></td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
          </div>
        </div>
      </div>

    </main>
</section>
<section class="hero is-fullheight" style="background-image:url('<?php echo base_url();?>images/);">
    <div class=columns>
        <div class="column is-two-third" style="padding:50px;" >
            <h1 class="title is-4 has-text-black">CAREERS EVENTS</h1>
            <p class=has-text-black>Let’s meet up. We could be in a town near you soon and we’re ready to connect you with the next leaders in technology, communications and entertainment. So, come out and say hi.</p>
            <div class="subtitle  control">
                    <a class="button is-info">
                        Join Us
                    </a>
            </div>
        </div>
        <div class="column is-one-third">
            <div class="card-image" >
              <figure class="image is-4by3" >
                <img src="<?php echo base_url();?>images/illustration-shopping.svg" alt="Placeholder image" class="modal-button" data-target="modal-image2">
              </figure>
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

</script>
<body>
