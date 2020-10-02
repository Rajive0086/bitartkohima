$(document).ready(function(){
    

    // if ($('.navbar-burger').length) {
    //     $('.navbar-burger').on("click", function(){

    //         var menu_id = $(this).attr('data-target');
    //         $(this).toggleClass('is-active');
    //         $("#"+menu_id).toggleClass('is-active');
    //         $('.navbar.is-light').toggleClass('is-dark-mobile')
    //     });
    // }

    //Animate left hamburger icon and open sidebar
    $('.menu-icon-trigger').click(function(e){
        e.preventDefault();
        $('.menu-icon-wrapper').toggleClass('open');
        $('.sidebar').toggleClass('is-active');
    });

    //Close sidebar
    $('.sidebar-close-icon').click(function() {
        $('.sidebar').removeClass('is-active');
        $('.sidebar').addClass('sidebar-hide')
        $('.menu-icon-wrapper').removeClass('open');
    })

    //Sidebar menu
    if ($('.sidebar').length) {
        $(".sidebar-menu > li.have-children a").on("click", function(i){
            //i.preventDefault();
            if( ! $(this).parent().hasClass("active") ){
                $(".sidebar-menu li ul").slideUp();
                $(this).next().slideToggle();
                $(".sidebar-menu li").removeClass("active");
                $(this).parent().addClass("active");
            }
            else{
                $(this).next().slideToggle();
                $(".sidebar-menu li").removeClass("active");
            }
        });
    }

    var burger = document.querySelector('.burger');
        var menu = document.querySelector('#'+burger.dataset.target);
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
    });


   // feather.replace();

   //  //reveal elements on scroll so animations trigger the right way
   //  var $window           = $(window),
   //      win_height_padded = $window.height() * 1.1,
   //      isTouch           = Modernizr.touch;

   //  $window.on('scroll', revealOnScroll);

   //  function revealOnScroll() {
   //      var scrolled = $window.scrollTop();
   //      $(".revealOnScroll:not(.animated)").each(function () {
   //          var $this     = $(this),
   //              offsetTop = $this.offset().top;

   //          if (scrolled + win_height_padded > offsetTop) {
   //              if ($this.data('timeout')) {
   //                  window.setTimeout(function(){
   //                      $this.addClass('animated ' + $this.data('animation'));
   //                  }, parseInt($this.data('timeout'),10));
   //              } else {
   //                  $this.addClass('animated ' + $this.data('animation'));
   //              }
   //          }
   //      });
   //  }

})