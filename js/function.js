;(function($){
     "use strict"
    var nav_offset_top = $('.header').height()+50; 
   /* var carrinho = localStorage.car;*/
    var session = $('.dropdown').data('sessao');
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
	  modal
	-------------------------------------------------------------------------------*/
      
     /*-------------------------------------------------------------------------------
	  mostrar usuario
	---------------------------------------------------------------------------
	*/
	  function Drop(){
	      if(session == ''){
	         $("#nada").removeClass("dropdown-content");
	         $("#conta").removeClass("badge-danger");
	      }
	      else{
	           $("#conta").addClass("badge-danger");
	           $("#nada").addClass("dropdown-content");
	           $("#nada").removeClass("d-none d-lg-none d-md-none");
	      }
	     
	  };
	    Drop();
	    
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
   $('#atualizar').attr('disabled','disabled');
    if(score >= 4){
        var f = "valida";
        $('#atualizar').removeAttr("disabled");
    }else{
        var f= "invalida";
    }
    $("#forca").val(f);
}
//------------------------------------------------------------------------------
/*Validação de CPF*/
function is_cpf (c) {

  if((c = c.replace(/[^\d]/g,"")).length != 11)
    return false

  if (c == "00000000000")
    return false;

  var r;
  var s = 0;

  for (i=1; i<=9; i++)
    s = s + parseInt(c[i-1]) * (11 - i);

  r = (s * 10) % 11;

  if ((r == 10) || (r == 11))
    r = 0;

  if (r != parseInt(c[9]))
    return false;

  s = 0;

  for (i = 1; i <= 10; i++)
    s = s + parseInt(c[i-1]) * (12 - i);

  r = (s * 10) % 11;

  if ((r == 10) || (r == 11))
    r = 0;

  if (r != parseInt(c[10]))
    return false;

  return true /*, $("#valida").val("prossegue")*/;
}
cpfCheck = function (el) {
    document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<img src="imgs/botoes/checked.svg" style="width: 20px; "><span style="color: green"> &nbsp;Válido</span>' : '<img src="imgs/botoes/cancel.svg" style="width: 20px; "><span style="color: red"> &nbsp;Inválido</span>';
    if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
    
}