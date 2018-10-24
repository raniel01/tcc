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
                    $(".header").removeClass("navbar-transparent fixed-top");
                }
            });
        };
    };
    navbarFixed();
     /*-------------------------------------------------------------------------------
	  Input 
	-------------------------------------------------------------------------------*/
})(jQuery)
/*------------------------------------------------------------------------------
                            MASCARA DE CPF/TELEFONE/CEP
------------------------------------------------------------------------------*/
 $("#telefone").mask("(00) 0000-0000");
 $("#celular").mask("(00) 00000-0000"); 
 $("#cep").mask("00000-000");
 $("#cpf").mask("000.000.000-00");
//------------------------------------------------------------------------------

/* Password strength indicator */
function forcaSenha(password) {

	var desc = [{'width':'0px'}, {'width':'20%'}, {'width':'40%'}, {'width':'60%'}, {'width':'80%'}, {'width':'100%'}];
	
	var descClass = ['', 'bg-danger', 'bg-danger', 'bg-warning', 'bg-info', 'bg-success'];

	var score = 0;

	//if password bigger than 6 give 1 point
	if (password.length > 6) score++;

	//if password has both lower and uppercase characters give 1 point	
	if ((password.match(/[a-z]/)) && (password.match(/[A-Z]/))) score++;

	//if password has at least one number give 1 point
	if (password.match(/\d+/)) score++;

	//if password has at least one special caracther give 1 point
	if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) )	score++;

	//if password bigger than 12 give another 1 point
	if (password.length > 10) score++;
	
	// display indicator
	$("#medida").removeClass(descClass[score-1]).addClass(descClass[score]).css(desc[score]);
}
//------------------------------------------------------------------------------

