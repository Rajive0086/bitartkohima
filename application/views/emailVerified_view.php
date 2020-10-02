<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>NJC- Registration</title>
	 <?php $this->load->view('common/css'); ?>
</head>
<body>
<!-- .navbar -->
<?php $this->load->view('common/navbar'); ?>
<!-- /.navbar -->
	<div class="container">
	    <div class="notification">
	  	   
	  	    	<?php echo $message;  ?>
	  	</div><!-- end of notification div -->
	</div>


<!-- .Footer -->
<?php $this->load->view('common/footer'); ?>
<!-- /.Footer -->	
<!-- .Scripts -->
<?php $this->load->view('common/scripts'); ?>
<!-- /.Scripts -->	
</body>
</html>