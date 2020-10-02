<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/logo.ico" type="image/x-icon">
    <link href="<?php echo base_url(); ?>assets/css/bulma.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/side_nav.css" > 
    <link href="<?php echo base_url(); ?>assets/css/njc.css" rel="stylesheet" type="text/css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/grid.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/helpers.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/debug.css"> -->
<style type="text/css">
	.header-hidden {
        margin-top:47x;
        position: fixed;
    }
    .layer0{ z-index:0;}
    .layer1{ z-index:1;}
    .layer2{ z-index:2;}
    .hide{display:none;}

    /*********  .side-navbar  ************/
            html{
              position:relative;
            }
            .center{
              display:flex;
              justify-content: center;
              align-items:center;
            }
            main.hero{
              margin-left:228px;
            }
           .content-push-right{
              position:;
              top:120px;
              left:228px;
              padding:20px!important;
           }
           .container-width{
             width:100%;
           }

          @media  (min-width:769px) {
           section.hero{
              margin-left:228px!important;
            }
          }
            
          @media screen and (max-width:768px) {
           section.hero{
              margin-left:0px!important;
            }
            .content-push-right{
                left:0;
            }
          }

          @media screen and (min-width:768px){
            .content-push-right{
                position:absolute;
            }
            .sidebar{
               transform: translateX(0px);   
            }
            .menu-icon-wrapper{
              display:none;
            }
            .sidebar-close-icon{
              display:none;
            }
          }

    /*********  /.side-navbar  ************/

    /********** .employer-login ***********/
    @media screen and (max-width:1245px){
       .empty-width-1{
        width:0%!important;
      }
    }
    @media screen and (max-width:1126px){
      .empty-width-1 + .column{
        width:54%!important;
      }
    }
    @media screen and (max-width:1034px){
       .columns:not(.is-desktop){
         /* display:initial!important;*/
       }
      .empty-width-1 + .column{
          display:none;
      }
    }
    /********** /.employer-login ***********/
 
</style>

