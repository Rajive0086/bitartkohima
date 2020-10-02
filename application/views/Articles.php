<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>

<html lang="en">

<head>

	<title>Teplates</title>

	<?php $this->load->view('common/css'); ?>

    <style type="text/css">

     
body, html {
  height: 100%
}

.bgimg {
  /* Background image */
 
  /* Full-screen */
  height: 50%;
  /* Center the background image */
  background-position: center;
  /* Scale and zoom in the image */
  background-size: cover;
  /* Add position: relative to enable absolutely positioned elements inside the image (place text) */
  position: relative;
  /* Add a white text color to all elements inside the .bgimg container */
  color: white;
  /* Add a font */
  font-family: "Courier New", Courier, monospace;
  /* Set the font-size to 25 pixels */
  font-size: 25px;
}

/* Position text in the top-left corner */
.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

/* Position text in the bottom-left corner */
.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

/* Position text in the middle */
.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the <hr> element */
hr {
  margin: auto;
  width: 40%;
}

    </style>

</head>

<body bgcolor=#F8F8F8>



	<!-- .navbar -->

	<?php $this->load->view('common/navbar-2'); ?>

	<!-- /.navbar -->












<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('/images/25553.jpg');
  height: 50%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: black;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">

  <div class="middle">
    <h1>This Page is under Construction</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
  <div class="bottomleft">
  
  </div>
</div>


<!-- .Footer -->

<?php $this->load->view('common/footer'); ?>

<!-- /.Footer -->



<!-- .Scripts -->

<?php $this->load->view('common/scripts'); ?>
</body>
</html>
