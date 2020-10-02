<script  src="<?php echo base_url(); ?>assets/scripts/jquery-3.3.1.min.js"></script>
<script  src="<?php echo base_url(); ?>assets/scripts/bulma-tab.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bulma-carousel/dist/js/bulma-carousel.min.js"></script>

<script  type="text/javascript">
	$(function(){
		var burger = document.querySelector('.burger');
	    var menu = document.querySelector('#'+burger.dataset.target);
	    burger.addEventListener('click', function() {
	        burger.classList.toggle('is-active');
	        menu.classList.toggle('is-active');
	    });
	})
	//$('nav').addClass('layer1');


    $(window).scroll(function () {
        if ($(this).scrollTop() < 50) {
          $("header").removeClass("header-hidden", 1000);
          $('header').addClass('');
           $('header').removeClass('');
        }
        else if(($(this).scrollTop() > 50)){
        	$("header").addClass("header-hidden", 1000);
       	  $('header').removeClass('layer0');
        }

     });


    $(document).ready(function(){
      //adding hoverable class at the logout button
    	$('.dropdown').hover(function(){
    		$(this).addClass('is-hoverable');
        $('.dropdown-menu').addClass('layer2');
        $('.navbar-end').addClass('layer0');
        $('header').addClass('layer0');

        $('header').removeClass('layer1');

    	});
      // hiding home hero Message when clicking hamburger
      $('.navbar-burger').click(function(){
        $('#heroMessage').toggleClass('layer0');
        $('#heroMessage').toggleClass('hide');
        $('header').toggleClass('layer1');
      });

      $('header').hover(function(){
        $(this).addClass('layer1');
      });


    });//end of ready()


</script>
<script type="text/javascript">
     
	$( document ).ready(function() {
            var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances
           // CarouselInstance.on('carousel:ready', function(item) {});
        });
</script>
<script>
   
      $(window).scroll(function () { 
        if ($(this).scrollTop() < 50) {
          $("header").removeClass("header-hidden", 1000);
         
          
        }
                else
                  $("header").addClass("header-hidden", 1000);
      });
      $(document).ready(function($){
          var url = window.location.href;
          $('.navbar-end p a[href="'+url+'"]').addClass('active');
      });
    </script>