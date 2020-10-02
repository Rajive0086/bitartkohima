<section class="section has-background-black footer-mobile" style="padding-left:60px;padding-right:60px;">
	<footer  class="columns"> 
	    <div class="column " >
	   		<h6 class="title is-size-5 has-text-white">Important Links</h6>		
	        <ul class="nospace linklist">
	            <li class=has-text-white><a href="#" class=" has-text-white">Clients</a></li>
	            <li class=has-text-white><a href="#" class=has-text-white>Services </a></li>
				<li class=has-text-white><a href="#" class=has-text-white>Templates</a></li>
	            <li><a href="#" class=has-text-white>Events</a></li>

	            <li><a href="#" class=has-text-black>Gallery</a></li>
	            <li></li>
	        </ul>
	        <span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=lBir8vCMS9kiUURLIlOuRjiN3I9Jc7sy9giK510O3ppTsY2JxMdNThNKxTzY"></script></span>
	    </div>
	    <div class="column">			
	        <h2 class="title is-size-5 has-text-white">Contact</h2>
	        <ul class="nospace linklist contact">
	            <li  class=has-text-white><i class="fa fa-map-marker has-text-danger"></i>
	                 Razhü Point, Super Market Road opp. Ozone Cafe, Kohima, 797001
	            </li>
	            <li class=has-text-white><i  class="fas fa-phone has-text-success"></i> +91 700-538-0610</li>
				<li class=has-text-white><i class="fab fa-whatsapp has-text-success"></i> +91 879-411-4690</li>
				<li class=has-text-white><i class="fas fa-envelope has-text-white"></i>info@bitartkohima.com</li>
			</ul>
								
			  <a class="nav-item" href="">
			    <span class="icon">
			      <i class="fab fa-twitter"></i>
			    </span>
			  </a>
			  <a class="nav-item" href="">
			    <span class="icon">
			      <i class="fab fa-facebook"></i>
			    </span>
			  </a>
			  <a class="nav-item" href="">
			    <span class="icon">
			      <i class="fab fa-instagram"></i>
			    </span>
			  </a>
			  <a class="nav-item" href=""> 
			    <span class="icon">
			      <i class="fab fa-linkedin"></i>
			    </span>
			  </a>
		</div>
		<div class="column">
			<h6 class="title is-size-5 has-text-white">About Bitart</h6>
			<ul class="nospace linklist contact">
				<li class=has-text-white>   
					<p>Bitart was launched on the 10th of june 2015 by a group of young  professionals.</p>
				</li>
				<li>
					
				</li>
			</ul>
		</div>
	</footer>                
</section>  
<!-- .credit-section     -->  
<section class="has-background-white">
	<div id="copyright" class="hoc clear"> 
	    <div class="content has-text-centered">
			<p>Copyright <i class="far fa-copyright"></i> 2020-2021 - All Rights Reserved - 
			<strong><a href="https://bitartkohima.com/">Bitart</a></strong> 
			</p>
		</div>
	</div>
</section>   
<script type="text/javascript">
		$(document).ready(function(){
		var burger = document.querySelector('.burger');
          var nav = document.querySelector('#'+burger.dataset.target);
          burger.addEventListener('click', function(){
            burger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
          });
		});

		$(document).ready(function(){
           
			$('button').click(function(){
				var job_no = $(this).attr('id'); //$('.job_no').val();
				if(job_no!='')
				{
					$.ajax({
						url:"<?php echo base_url();?>Main_con/ajaxRequestDetails",
						method:"POST",
						data:{job_no:job_no},
						success:function(data)
						{
							$('#content').html(data);
						},
					});
				}
				else{ 	$('#content').html('xyz')}
			});
		});
        $( document ).ready(function() {
            var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances
           // CarouselInstance.on('carousel:ready', function(item) {});
        });
        
    </script>
<!-- /.credit-section     -->  