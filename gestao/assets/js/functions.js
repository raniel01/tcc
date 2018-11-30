$(document).ready(function(){
    
    $(document).on('click','.atualizar',function(){
        var nome = $('.perfil').attr('nome');
        var sobre = $('.perfil').attr('sobrenome');
        var endere = $('.perfil').attr('endereco');
        var mail  = $('.perfil').attr('email');
        var cel   = $('.perfil').attr('celular');
        var pic   = $('perfil').attr('picture');
        /*manipulating values to update in form*/
    	$('#nome').val(nome);
    	$('#sobrenome').val(sobre);
    	$('#celular').val(cel);
    	$('#email').val(mail);
    	$('#endereco').val(endere);
    	
    });
    
    $(document).on('click','.info',function(){
    var cd = $(this).attr('titulo');
    var sobre = $(this).attr('sobrenome');
    var mail  = $(this).attr('email');
    var pic   = $(this).attr('picture');
      /*manipulating values to update in form*/
    	$('#nomeuser').html(cd);
    	$('#sobrenomeuser').html(sobre);
    	$('#emailuser').html(mail);
    	$('#fotouser').attr('src','../'+pic);
    console.log(cd + '\n' +sobre + '\n' +mail + '\n');
    });
    
    /*filter*/
    $(document).on('keyup','#myInput',function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
     
    
