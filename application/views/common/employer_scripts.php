<script  src="<?php echo base_url(); ?>assets/scripts/jquery-3.3.1.min.js"></script>
<script  src="<?php echo base_url(); ?>assets/scripts/side_menu.js"></script>

<script  type="text/javascript">

 
  $(document).ready(function(){


    // var burger = document.querySelector('.burger');
	   //  var menu = document.querySelector('#'+burger.dataset.target);
	   //  burger.addEventListener('click', function() {
	   //      burger.classList.toggle('is-active');
	   //      menu.classList.toggle('is-active');
	   //  });

   $('nav').addClass('layer1');
      

   //  $(window).scroll(function(){
   //    var scroll = $(window).scrollTop();
   //    if(scroll > 50){
   //      $("header").addClass("header-hidden", 1000);
   //      $('header').removeClass('layer0');
   //    }else {
   //      $("header").removeClass("header-hidden", 1000);
   //      $('header').addClass('layer0');
   //      $('header').removeClass('layer1');
   //    }
   //  });

    // var burger = document.querySelector('.burger');
    // var menu = document.querySelector('#'+burger.dataset.target);
    // burger.addEventListener('click', function() {
    // burger.classList.toggle('is-active');
    // menu.classList.toggle('is-active');
    // });

     

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




        // var windowURL = window.location.href;
        // pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        // var x= $('a[href="'+pageURL+'"]');
        //     x.addClass('active');
        //     x.parent().addClass('active');
        // var y= $('a[href="'+windowURL+'"]');
        //     y.addClass('active');
        //     y.parent().addClass('active');

        //   var burger = document.querySelector('.burger');
        //   var nav = document.querySelector('#'+burger.dataset.target);
        //   burger.addEventListener('click', function(){
        //     burger.classList.toggle('is-active');
        //     nav.classList.toggle('is-active');
        //   });


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
        else{   $('#content').html('xyz')}
      });



    // var carousels = bulmaCarousel.attach(); 



    });//end of ready()


</script>
