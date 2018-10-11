;(function($){
     "use strict"
    var nav_offset_top = $('.header').height()+50; 
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

	//* Navbar Fixed  
    function navbarFixed(){
        if ( $('.header').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    $(".header").addClass("fixed-top");
                } else {
                    $(".header").removeClass("fixed-top");
                }
            });
        };
    };
    navbarFixed();
     /*-------------------------------------------------------------------------------
	  Input 
	-------------------------------------------------------------------------------*/
})(jQuery)