    $(document).on('click','.addCar',function(){
     var sessao = $('.addCar').data('session');
     var link   = $(this).data('cd');
    /* var remover = parseInt($('.rCar').data('codigo'));*/
            if(sessao == ''){
                 /*$(".addCar").on("click",function(){*/
                    $('.modallogin').modal('show');
                 /*});*/
            }else{
                   /*$(".addCar").on("click",function(){*/
                      /* window.location('produto.php?cd='+link);*/
                       /*href = "<?php echo 'produto.php?cd='.$produto['CD_INTERNO'];?>"*/  
                      
                       /*alert(link);*/
                       window.location.href = "produto.php?cd="+link;
                        /*cria um json e verifica a sessao*/
                        //let car = JSON.parse(localStorage.getItem('car')) || [];
                        /*pegando id*/
                        //let id = parseInt($(this).data('id'));
                        /*pegando o nome do produto*/
                        //let produto = $(this).data('produto');
                        /*pegando sessao*/
                       
                     
                        /*se o produto ja estiver no carrinho*/
                        //if($.inArray(id,car) != -1){
                        //    alert(produto+" Já Está No Carrinho");
                            
                        //    return false;
                        //}else{
                        //     alert(produto+" Adicionado No Carrinho");
                        //}
                        /*adicionando itens*/
                        //car.push(id);
                        //localStorage.setItem('car',JSON.stringify(car));
                /*});*/
            }
    /*      
        setInterval(function(){
            let car = JSON.parse(localStorage.getItem('car')) || [];
            $('.contador').text(car.length);
        },100);
  */
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
    $(document).on('click','#finalizar',function(){
         // $('.qtdade').each(function(){
               /*var carrinho = $(this).data('produto');
               maiscarrinho = new Array ();
               maiscarrinho.push(carrinho);*/
           //    carrinho = new Array($(this).data('produto'));
        //       console.log(carrinho); 
               
               //mandar a variavel via load e transformar ela via session 
         // });
         // console.log(carrinho);
        
         /*$("#finalizar").on('click',function(){**/
             
    			$.ajax({
    				url:'pagseguro/pagseguro.php',
    				type:'POST'
    			}).done(function(resp){
    				$("#code").val(resp);
    				$("#comprar").submit();
    			}).fail(function(){
    				alert("erro ao finalizar compra");
    			});
    		
    		/*});*/
    });
    $(document).on('click','#valor',function(){
            var qt = $(this).attr('quantidade');
           /*transformando em valor padrao do form*/
           $(this).val(qt);
       
    });
    
    
    $(document).ready(function(){
            /*var total = $(".valor").size();*/
       /*  $( document.body ).append( $( "#valor" ) );*/
            var contagem = $('.container .quantidade').length;
            /*$('#valor[]').childre[]
            
            var qt = $('#valor').attr('quantidade');
           /*transformando em valor padrao do form*/
          /* $('#valor').val(qt);*/
           console.log(contagem);
           var i = 1;
           $('.quantidade').each(function(i){ 
              var qt = $(this).attr('quantidade');
                /*transformando em valor padrao do form*/
                $(this).val(qt);
            
                i++ ;
           });
       
    });