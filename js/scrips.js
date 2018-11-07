$(document).ready(function(){
     var sessao = $('.addCar').data('session');
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
                                        
                                      
                    //     $.post({
                    //         url:'../conexao.php?func=session',
                    //         data: {'sessaoCar': JSON.stringify(car)},
                    //         success: function(data){
                    //             alert(data);
                    //         console.log('entrou..');
                    //     }
                    // });  
                });
            }
});

    
