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



<section class="hero is-medium is-primary is-bold" style="background-image:url('<?php echo base_url();?>images/Career-Banner.png');background-size:cover;height:400px">

<?php $this->load->view('common/navbar'); ?>

  <div class="hero-body">

    <div class="container">

      <h1 class="title has-text-info openSans">

        FIND A JOB THAT SUITS YOU

      </h1>



    </div>

  </div>

</section>

<section class="hero is-fullheight">



    <main class="hero-foot" style="padding:0px 50px;  margin-bottom:100px;">



    <div class="columns " >

        <div class="column is-two-third "><br>



        <section class="content">

          <div class="">

              <div class="field has-addons">

                  <div class="control is-expanded has-icons-left">

                      <input class="input has-text-centered is-info" type="text" name="search_text" id="search_text" placeholder="Type :Job title, field, location, Reqiurement">

                      <span class="icon is-left  desktop " style="width:150px">

                      <i class="fa fa-search has-text-success" aria-hidden="true"></i><p class="has-text-success desktop">&nbsp;Quick Search</p>

                      </span>

                      <span class="icon is-left in-mobile   " style="width:60px;padding:7px;">

                      <i class="fa fa-search has-text-success" aria-hidden="true"></i><p></p>

                      </span>

                  </div>



              </div>

          </div>

          <div id="result" style="padding:0px 20px;">





          </div>



        </section>

        <div id="jobs">

        <p class="subtitle heading  is-5 has-text-info openSans"> Latest Jobs Openings</p>

        <?php

          foreach($firstnames as $object )

          {

        ?>

        <a href=Jobs\jobsId\<?php echo $object->temp_id;?>>

          <div  class="columns" style="border-bottom: 2px solid green; box-shadow: 1px 1px 5px 1px #E0E0E0;margin-top:0px; " >

            <!-- <div class="column is-one-third"style="padding:0;" >

              <figure class="image is-4by3" >

                <img src="<?php echo base_url();?>images/download.png" alt="Placeholder image" class="modal-button" data-target="modal-image2">

              </figure>

            </div> -->



            <div class="column is-two-third" style="padding:10px 10px;background-color:white;">

              <div class="content content-align-right">

                <div id="grid">

                  <div id="b" class="">

                    <h4 class=has-text-black ><?php echo $object->temp_title;?></h4>

                    <p class="heading has-text-info has-text-bold is-6" style="margin-top:-10px"><?php echo $object->type;?></p>

                  </div>

                  <div id="d" class="">

                    <img  class=hovershedow src="<?php echo base_url();?>images/download.png" alt="Placeholder image" class="modal-button" style="height:60px;">

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





                <p class="has-text-black shortpara" style="margin-top:10px"><?php echo $object->job_description;?></p>

              </div>

            </div>

          </div>

          </a>

          <br>

          <?php } ?>

          </div>

        </div>



        <div class="column is-one-third " style=" margin-top:20px;">

          <div class=" is-shady borderless " style=" box-shadow: 1px 1px 5px 1px #E0E0E0; 10px;background-color:white; ">

            <div class="card-table ">

                    <div class="content">

                        <table class="table is-fullwidth is-striped">

                            <tbody>

                              <tr>

                                <td colspan=2 class="has-text-info openSans">Popular Jobs</td>



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

          <br>

          <div class=" is-shady borderless " style=" box-shadow: 1px 1px 5px 1px #E0E0E0; 10px;background-color:white; ">



                    <div class="content">

                        <table class="table is-fullwidth is-striped">

                            <tbody>

                              <tr>

                                <td colspan=2>Featured Companies</td>



                              </tr>

                              <tr>

                                <td><a href="http://www.bitartkohima.com"><img src="<?php echo base_url();?>images/mwc.png" style="width:80%"></td>



                                <td><a><img src="<?php echo base_url();?>images/amazone.jpg" style="width:100%;padding-top:30px;"></td>

                                <td><a><img src="<?php echo base_url();?>images/bird.png" style="width:100%"></td>

                              </tr>

                              <tr>

                              <td><a><img src="<?php echo base_url();?>images/bird.png" style="width:100%"></td>

                              <td><img src="<?php echo base_url();?>images/infosis.png" style="width:100%"></td>

                              <td><img src="<?php echo base_url();?>images/taj.png" style="width:100%"></td>

                              </tr>

                              <tr>

                              <td><a><img src="<?php echo base_url();?>images/de.png" style="width:100%"></td>

                              <td><img src="<?php echo base_url();?>images/bitart.png" style="width:100%"></td>

                              <td><img src="<?php echo base_url();?>images/nk.jpg" style="width:100%"></td>

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

                    <a class="button hovershedow is-lite has-text-info  is-bold">

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





<script>



$(document).ready(function(){





    function load_data(query)

    {

       $.ajax({

           url:"<?php echo base_url() ?>Jobs/fetch",

           method:"POST",

           data:{query:query},

           success:function(data){

               $('#result').html(data);

           }

       })

    }

    var search = document.getElementById("search_text");

    search.addEventListener("keydown", function (e) {

    if (e.keyCode === 13) {



      var search=$(this).val();

        if(search !='')

        {

            load_data(search);

        }

        else{load_data()}



    }

});

    /* $('#search_text').keyup(function()

    {

        var search=$(this).val();

        if(search !='')

        {

            load_data(search);

        }

        else

        {

            load_data();

        }

    }); */

});

</script>

<body>

