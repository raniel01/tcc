;(function($){
     "use strict"
    var nav_offset_top = $('.header').height()+50; 
    var carrinho = localStorage.car;
    var session = $('.header').data('sessao');
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
     /*-------------------------------------------------------------------------
      /*-------------------------------------------------------------------------------
	  carrinho
	-------------------------------------------------------------------------------*/
      function MostrarCarrinho(){
            $('#produto').load('conexao.php?func=session&carrinho='+carrinho);
      };
    MostrarCarrinho();
     /*-------------------------------------------------------------------------------
	  icon
	---------------------------------------------------------------------------
     /*------------------------------------------------------------------------
     ------
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

//Indicador de força da senha
function forcaSenha(password) {

	var desc = [{'width':'0px'}, {'width':'20%'}, {'width':'40%'}, {'width':'60%'}, {'width':'80%'}, {'width':'100%'}];
	
	var descClass = ['', 'bg-danger', 'bg-danger', 'bg-warning', 'bg-info', 'bg-success'];

	var score = 0;

	//se a senha for maior que 6 caracteres dê 1 ponto
	if (password.length > 6) score++;

	//se a senha tiver caracteres maiúsculos e minúsculos, dê 1 ponto	
	if ((password.match(/[a-z]/)) && (password.match(/[A-Z]/))) score++;

	//se a senha tiver pelo menos um número, dê 1 ponto
	if (password.match(/\d+/)) score++;

	//se a senha tiver pelo menos uma caracther especial, dê 1 ponto
	if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) )	score++;

	//se a senha for maior que 12 caracteres, dê outro ponto
	if (password.length > 10) score++;
	
	// indicador de exibição
	$("#medida").removeClass(descClass[score-1]).addClass(descClass[score]).css(desc[score]);


}
//------------------------------------------------------------------------------

