<head>
<style>
.header-hidden {
	       
         position: fixed;
       }	
</style>
</head>
 
 <header class="hero header-fixed  navbar is-warning"style=" width:100%; ">
   <div class="container "> 
      
      <div class="navbar-brand is-mobile is-marginless heading has-text-weight-bold">
      <figure class="image" >  
      </figure>
        <span class="navbar-burger burger" data-target="navMenu">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
      <div id="navMenu" class="navbar-menu ">
        <div class="navbar-end  ">
            <p class=" <?php echo activate_menu('about'); ?> nav-hover navbar-item is-mobile is-marginless heading has-text-black has-text-weight-bold"><a href="<?php echo base_url() ?>about">ABOUT</a></p>
            <p class="<?php echo activate_menu('articles'); ?> nav-hover navbar-item is-mobile is-marginless heading has-text-black has-text-weight-bold"><a href="<?php echo base_url() ?>articles">Articles</p>  </p> 
            <p class="<?php echo activate_menu('Jobs'); ?> nav-hover navbar-item is-mobile is-marginless heading has-text-black has-text-weight-bold"><a href="<?php echo base_url() ?>Jobs">Job Search</a> </p>
            <p class="<?php echo activate_menu('Career'); ?> nav-hover navbar-item is-mobile is-marginless heading has-text-black has-text-weight-bold"><a href="<?php echo base_url() ?>Career">Skill & Career</a> </p>
            <p class="<?php echo activate_menu('Recruiter'); ?> nav-hover navbar-item is-mobile is-marginless heading has-text-black has-text-weight-bold"><a href="<?php echo base_url() ?>Recruiter">RECRUITER </a> </p>    
        </div>
      </div>
 </div>  
</header>
