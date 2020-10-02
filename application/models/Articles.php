<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Career and Events</title>
	<?php $this->load->view('common/css'); ?>
    <style type="text/css">
      .header-fixed {
       
        }

        .header-hidden {
	       
            position: fixed;
        }

        .hero {
            background:  url('<?php echo base_url(); ?>images/career_bg1.jpg') center / cover;
        }
        
        @media (max-width: 1024px) { .hero { background:  url('<?php echo base_url(); ?>images/career_bg1.jpg') center / cover; } 
        
        }
        @media (max-width:  768px) { .hero { background:  url('<?php echo base_url(); ?>images/career_bg1.jpg') center / cover; } 
       
        }
        @media (max-width: 768px) {
            :root {
                font-size: 100%;
            }
            .footer-mobile
            {
                padding-left:20px;
                padding-right:20px;
            }
           
        }
        hr{
   height:3px;
   background-color:yellow;
   border:none;
   width:20%;
   
}
    </style>
</head>
<body bgcolor=#F8F8F8>
<section class="hero is-fullheight">
	<!-- .navbar -->
	<?php $this->load->view('common/navbar'); ?>
	<!-- /.navbar -->
    <div class="hero-body ">
        <div class="is-overlay has-text-centered single-spaced" style="top: 140px;">
            <div> 
                
				<h1 class="title is-1 has-text-white">Make the Most of Your Experience</h1>	
                <h2 class="subtitle is-4 has-text-weight-light has-text-white"><br>Making connections early is incredibly valuable.<br> The important thing is to arrive prepared. Review our  Career Fair and Meetup tips. </h2>						
                <div class="subtitle has-text-centered control">
                    <a class="button is-success">
                        Up coming events 
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>
<section class=section>
    <main class="hero-foot" >
        <div class="columns">
            <div class="column is-one-quarter">
                <h1 class="subtitle is-2 has-text-weight-bold">The Latest</h1>
               
                 <?php
                  foreach($articles as $object )
                  {
                ?>
                <a   name="search_text" onclick="load_data(<?php echo $object->articles_id;?>)" id="search_text">
                <h1 class="title is-5 "><?php echo $object->description;?> </h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:Sunday March 10th 2019 </p>
                  </a>
                <div class="divider-top-marginless is-divider"></div>
              
                <?php } ?>
                  
            </div>
             <div class="is-divider-vertical" ></div>
            <div class="column">
              <div id="view1">
                <img src="<?php echo base_url(); ?>images/img-20180821-wa0004_2.jpg" width=100%>
                <h2 class="subtitle is-5 has-text-weight-bold center ">We caught up with Aolemba Pongen, who after the hospitality training, successfully got through the interview and is now working as a Front Office Associate at</h2>
              </div>
              <div id="view2">
                    
              </div>
                
            </div>
            <div class="is-divider-vertical"></div>
            <div class="column is-one-quarter">
            <img src="<?php echo base_url(); ?>images/film.jpg" width=100%>
                <h2 class="subtitle is-4 has-text-weight-bold center ">Dignity of Work</h2>
                <img src="<?php echo base_url(); ?>images/bg.jpg" width=100%>
                <h2 class="subtitle is-4 has-text-weight-bold center ">Bird Avaition Academy</h2>
            </div>
        </div> 
    </main>			
</section>
<section class=section>
    <div class='columns '>
      <div class='column '>
        <div class='card'>
          <div class='card-image'>
            <figure class='image is-4by3'>
              <img alt='' src='http://placehold.it/300x225'>
            </figure>
          </div>
          <div class='card-content'>
            <div class='content'>
              <span class='tag is-dark subtitle'>#1</span>
              <p>Personal Notes on the Property (can be edited and saved automatically by clicking in and clicking out of text area) - these are unique to the user - they will show up as part of a saved listings' info here - but adding notes to a property does not automatically create a saved listing. Likewise, removing this proeprty from saved listings does not auto remove the notes.</p>
            </div>
          </div>
          <footer class='card-footer'>
            <a class='card-footer-item'>Compare</a>
            <a class='card-footer-item'>Share</a>
            <a class='card-footer-item'>Delete</a>
          </footer>
        </div>
        <br>
      </div>
      <div class='column '>
        <div class='card'>
          <div class='card-image'>
            <figure class='image is-4by3'>
              <img alt='' src='http://placehold.it/300x225'>
            </figure>
          </div>
          <div class='card-content'>
            <div class='content'>
              <span class='tag is-dark subtitle'>#2</span>
              <p>Personal Notes on the Property (can be edited and saved automatically by clicking in and clicking out of text area) - these are unique to the user - they will show up as part of a saved listings' info here - but adding notes to a property does not automatically create a saved listing. Likewise, removing this proeprty from saved listings does not auto remove the notes.</p>
            </div>
          </div>
          <footer class='card-footer'>
            <a class='card-footer-item'>Compare</a>
            <a class='card-footer-item'>Share</a>
            <a class='card-footer-item'>Delete</a>
          </footer>
        </div>
        <br>
      </div>
      <div class='column is-3'>
        <div class='card'>
          <div class='card-image'>
            <figure class='image is-4by3'>
              <img alt='' src='http://placehold.it/300x225'>
            </figure>
          </div>
          <div class='card-content'>
            <div class='content'>
              <span class='tag is-dark subtitle'>#3</span>
              <p>Personal Notes on the Property (can be edited and saved automatically by clicking in and clicking out of text area) - these are unique to the user - they will show up as part of a saved listings' info here - but adding notes to a property does not automatically create a saved listing. Likewise, removing this proeprty from saved listings does not auto remove the notes.</p>
            </div>
          </div>
          <footer class='card-footer'>
            <a class='card-footer-item'>Compare</a>
            <a class='card-footer-item'>Share</a>
            <a class='card-footer-item'>Delete</a>
          </footer>
        </div>
        <br>
      </div>
      <div class='column is-3'>
        <div class='card'>
          <div class='card-image'>
            <figure class='image is-4by3'>
              <img alt='' src='http://placehold.it/300x225'>
            </figure>
          </div>
          <div class='card-content'>
            <div class='content'>
              <span class='tag is-dark subtitle'>#4</span>
              <p>Personal Notes on the Property (can be edited and saved automatically by clicking in and clicking out of text area) - these are unique to the user - they will show up as part of a saved listings' info here - but adding notes to a property does not automatically create a saved listing. Likewise, removing this proeprty from saved listings does not auto remove the notes.</p>
            </div>
          </div>
          <footer class='card-footer'>
            <a class='card-footer-item'>Compare</a>
            <a class='card-footer-item'>Share</a>
            <a class='card-footer-item'>Delete</a>
          </footer>
        </div>
        <br>
      </div>
    </div>
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
<section class=section>
    <main class="hero-foot" >
        <div class="columns">
            <div class="column is-half">
                <img src="<?php echo base_url(); ?>images/img-20180821-wa0004_2.jpg" width=100%>
                <h2 class="subtitle is-4 has-text-weight-bold center ">Exclusive: McKinsey's Global Boss Talks Controversy—and Transparency—With Fortune</h2>
            </div>
            <div class="column is-one-quarter">
                <h1 class="subtitle is-2 has-text-weight-bold">The Latest</h1>
                <h1 class="title is-5 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:Sunday March 10th 2019 </p>
                <div class="divider-top-marginless is-divider"></div>
                <h1 class="title is-5 ">Eaque fugiat, repellat obcaecati molestias voluptate nobis.</h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:Saturday March 9th 2019 </p>
                <div class="divider-top-marginless is-divider"></div>
                <h1 class="title is-5 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:Saturday March 9th 2019 </p>
                <div class="divider-top-marginless is-divider"></div>
                <h1 class="title is-5 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:friday March 8th 2019 </p>
                <div class="divider-top-marginless is-divider"></div>
                
               
            </div>
          
           
        </div>
    </main>
</section>
<section class=section>
    <main class="hero-foot" >
        <div class="columns">
            <div class="column is-half">
                <img src="<?php echo base_url(); ?>images/img-20180821-wa0004_2.jpg" width=100%>
                <h2 class="subtitle is-4 has-text-weight-bold center ">Exclusive: McKinsey's Global Boss Talks Controversy—and Transparency—With Fortune</h2>
            </div>
            <div class="column is-one-quarter">
                <h1 class="subtitle is-2 has-text-weight-bold">The Latest</h1>
                <h1 class="title is-5 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:Sunday March 10th 2019 </p>
                <div class="divider-top-marginless is-divider"></div>
                <h1 class="title is-5 ">Eaque fugiat, repellat obcaecati molestias voluptate nobis.</h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:Saturday March 9th 2019 </p>
                <div class="divider-top-marginless is-divider"></div>
                <h1 class="title is-5 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:Saturday March 9th 2019 </p>
                <div class="divider-top-marginless is-divider"></div>
                <h1 class="title is-5 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:friday March 8th 2019 </p>
                <div class="divider-top-marginless is-divider"></div>
                
               
            </div>
          
           
        </div>
    </main>
</section>
<section class=section>
    <main class="hero-foot" >
        <div class="columns">
            <div class="column is-half">
                <img src="<?php echo base_url(); ?>images/img-20180821-wa0004_2.jpg" width=100%>
                <h2 class="subtitle is-4 has-text-weight-bold center ">Exclusive: McKinsey's Global Boss Talks Controversy—and Transparency—With Fortune</h2>
            </div>
            <div class="column is-one-quarter">
                <h1 class="subtitle is-2 has-text-weight-bold">The Latest</h1>
                <h1 class="title is-5 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:Sunday March 10th 2019 </p>
                <div class="divider-top-marginless is-divider"></div>
                <h1 class="title is-5 ">Eaque fugiat, repellat obcaecati molestias voluptate nobis.</h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:Saturday March 9th 2019 </p>
                <div class="divider-top-marginless is-divider"></div>
                <h1 class="title is-5 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:Saturday March 9th 2019 </p>
                <div class="divider-top-marginless is-divider"></div>
                <h1 class="title is-5 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
                <p class="heading top-marginless is-5 has-text-grey-light has-text-bold"> Date:friday March 8th 2019 </p>
                <div class="divider-top-marginless is-divider"></div>
                
               
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
<script>
$(() => {
  $('#edit-preferences').click(function(){
   $('#edit-preferences-modal').addClass('is-active');
  });
  $('.modal-card-head button.delete, .modal-save, .modal-cancel').click(function(){
    $('#edit-preferences-modal').removeClass('is-active');
  });
});
</script>
<script>

function load_data(query)
    {
      var x = document.getElementById("view1");
      x.style.display = "none";

       $.ajax({
           url:"<?php echo base_url() ?>Articles/articlesfetch",
           method:"POST",
           data:{query:query},
           success:function(data){
               $('#view2').html(data);

           }
       }) 
    }
</script>
<body>
