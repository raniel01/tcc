$(document).ready(function(){
     var sessao = $('.addCar').data('session');
     /*var remover = parseInt($('.rCar').data('codigo'));
     console.log(remover+" ALGO DE ERRADO NAO ESTA CERTO");*/
            if(sessao == ''){
                 $(".addCar").on("click",function(){
                    $('.modallogin').modal('show');
                 });
            }else{
                  $(".addCar").on("click",function(){
                        /*cria um json e verifica a sessao*/
                        let car = JSON.parse(localStorage.getItem('car')) || [];
                        /*pegando id*/
                        let id = parseInt($(this).data('id'));
                        /*pegando o nome do produto*/
                        let produto = $(this).data('produto');
                        /*pegando sessao*/
                       
                     
                        /*se o produto ja estiver no carrinho*/
                        if($.inArray(id,car) != -1){
                            alert(produto+" Já Está No Carrinho");
                            
                            return false;
                        }else{
                             alert(produto+" Adicionado No Carrinho");
                        }
                        /*adicionando itens*/
                        car.push(id);
                        localStorage.setItem('car',JSON.stringify(car));
                });
            }
          
        setInterval(function(){
            let car = JSON.parse(localStorage.getItem('car')) || [];
            $('.contador').text(car.length);
        },100);
  
});
$(document).on("click",".rCar",function(){
     /*cria um json e verifica a sessao*/
    let car = JSON.parse(localStorage.getItem('car')) || [];
    /*pegando id*/
    let id = parseInt($(this).data('codigo'));
    /*pegando o nome do produto*/
    let produto = $(this).data('produto');
    /*pegando em array produto no local storage*/
    let pr = $.inArray(id,car);
    /*removendo itens no array*/
    car.splice(pr,1);
    localStorage.setItem('car',JSON.stringify(car));
    alert(produto+" Removido do carrinho");
    $('#produto'+id).slideUp(600).clear();
  
});
$(document).ready(function(){
    $(document).on("click",".finalizar",function(){
    //chamando light box e enviando dados
  	        $.ajax({
				url:'pag.php',
				type:'POST'
			}).done(function(resp){
				$("#code").val(resp);
				$("#comprar").submit();
			}).fail(function(){
				alert("erro ao finalizar compra");
			});
    });
     
});

