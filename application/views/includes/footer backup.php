

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>CodeInsect</b> Admin System | Version 1.5
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="<?php echo base_url(); ?>">CodeInsect</a>.</strong> All rights reserved.
    </footer>
    
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js" type="text/javascript"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/validation.js" type="text/javascript"></script>
    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>
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
  </body>
</html>