<!DOCTYPE html>
<html>
    
    <!-- Head -->
    <head>
        
        <!-- Título da página -->
        <title>Card Horizontal</title>
        
        <!-- Meta tags -->
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap -->
        <link rel = "stylesheet" href= " https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">
        <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
        <!-- Style -->
        <style>
            
            /* Style do Card horizontal da exibição da lista - parecido com o do site Extra */
            
            .container{
                padding: 12px 16px;
            }
            
            .card{
                border-radius: 0;
            }
            
            .img-card-horizontal{
                width: 60px;
                height: 60px;
                object-fit: cover;
                border-radius: 50%;
            }
            
            .card-body{
                display: flex;
                flex-direction: row;
                min-height: 100px;
                padding: 0;
            }
            
            .card{
                padding: 0;
                border: 1px solid rgba(220,220,220,1);
            }
            
            .div-img{
                width: 10%;
                text-align: center;
                padding: 20px 0px;
                background-color: #f8f9fa;
            }
            
            .div-info{
                width: 60%;
                padding: 10px 0px 0px 0px;
                padding-left: 1rem;
            }
            
            .qtde{
                width: 10%;
                align-self: center;
                padding-right: 10px;
            }
            
            .preco{
                width: 20%;
                border-left: 1px solid rgba(220,220,220,1);
            }
            
            .preco label{
                line-height: 100px;
                margin: 0;
                padding-left: 20px;
                color: rgb(170,170,170);
            }
            
            .descricao{
                min-height: 0;
            }
            
            .ampliado{
                display: none;
                height: 250px;
                width: 250px;
                position: absolute;
                border: 1px solid red;
                top: 110px;
                left: 0px;
                z-index: 2;
            }
            
            .title-img-ampliado{
                position: absolute;
                color: white;
                background-color: rgba(0,0,0,0.5);
                left: 0;
                top: 0;
                width: 100%;
                padding: 6px 10px;
                font-size: 20px;
            }
            
            .img-ampliado{
                height: 248px;
                width: 248px;
            }
            
            .div-img:hover .ampliado{
                display: block;
            }
            
            .title-mobile{
                display: none;
            }
            
            .form-control{
                width: 75%;
            }
            
            @media only screen and (max-width: 960px){
                
                
                
            }
            
            @media only screen and (max-width: 540px){
                
                body{
                    background-color: rgba(170,170,170,0.1);
                }
                
                .card{
                    border: 1px solid #ff7800;
                    border-top: 5px solid #ff7800;
                }
                
                .card-body div {
                    width: 100%;
                }
                
                .card-body{
                    flex-direction: column;
                    min-height: 0;
                }
                
                .img-card-horizontal{
                    border-radius: 0;
                    width: 75%;
                    height: auto;
                }
                
                .div-img{
                    height: auto;
                    padding: 0;
                    background-color: white;
                }
                
                .div-info{
                    padding: 1rem 0 0 0.5rem;
                }
                
                .descricao{
                    min-height: 0;
                    padding: 0.5rem 0rem;
                }
                
                .qtde{
                    text-align: left;
                    padding: 0.5rem 0.5rem;
                }
                
                .form-control{
                    display: initial;
                    width: 25%;
                }
                
                .preco{
                    border-left: none;
                    border-top: 1px solid rgba(220,220,220,1);
                    background-color: #ff7800;
                }
                
                .preco label{
                    line-height: 70px;
                    margin: 0;
                    padding-left: 20px;
                    color: white;
                }
                
                .div-img:hover .ampliado{
                    display: none;
                }
                
                .title-mobile{
                    display: block;
                    padding-top: 0.5rem;
                }
                
            }
            
        </style>
        <!-- Style -->
        
    </head>
    <!-- Head -->
    
    <!-- Body -->
    <body>
        
        <!-- Container -->
        <div class = "container">
            
            <!-- Row -->
            <div class = "row">
                
                <!-- Tamanho -->
                <div class = "col-12">
                    
                    <!-- Card Horizontal -->
                    <div class = "card">
                        
                        <!-- Conteúdo do card -->
                        <div class = "card-body">
                            
                            <!-- Div Imagem -->
                            <div class = "div-img">
                                
                                <!-- Imagem do produto -->
                                <img src = "imgs/nuggets.jpg" class = "img-card-horizontal">
                                
                                <!-- Div de ampliação -->                                
                                <div class = "ampliado">
                                    
                                    <!-- Título na imagem -->
                                    <div class = "title-img-ampliado">
                                        
                                        <!-- Nome do produto -->
                                        <label>
                                            
                                            <?php 
                                                
                                                // Estes comandos irão retornar somente a primeira palavra de uma frase, nosso exemplo é: "Nuggets são resto das amigas u.u". Foi retornado da $string somente a primeira palavra: "NUGGETS".
                                                
                                                $string = "Nuggets são resto das amigas u.u";
                                                
                                                $string = explode(" ", $string);
                                                
                                                echo "$string[0]";
                                                
                                            ?>
                                            
                                        </label>
                                        <!-- /Nome do produto -->
                                        
                                    </div>
                                    <!-- Título na imagem -->
                                    
                                    <img src = "imgs/nuggets.jpg" class = "img-ampliado">
                                    
                                </div>
                                <!-- /Div de ampliação --> 
                                
                            </div>
                            <!-- /Div imagem -->
                            
                            <!-- Div descrição -->
                            <div class = "div-info">
                                
                                <!-- Título -->
                                <h3 class = "title-mobile">Nuggets</h3>
                                
                                <!-- Descrição -->
                                <p class = "descricao">Uma descrição breve do produto</p>
                                
                            </div>
                            <!-- /Div descrição -->
                            
                            <!-- Div quantidade -->
                            <div class = "qtde">
                                
                                <!-- Quantidade -->
                                <input type = "number" id="#number" class = "form-control" value = "1">
                                
                            </div>
                            <!-- /Div quantidade -->
                            
                            <!-- Div preço -->
                            <div class = "preco">
                                
                                <!-- Preço -->
                                <label class = "font-weight-bold">Preço: R$ 0,00</label>
                                
                            </div>
                            <!-- /Div preço -->
                            
                        </div>
                        <!-- /Conteúdo do card -->
                        
                    </div>
                    <!-- /Card -->
                    
                </div>
                <!-- /Tamanho -->
                
            </div>
            <!-- /Row -->
            
            <!-- Row -->
            <div class = "row pt-2">
                
                <!-- Tamanho -->
                <div class = "col-12">
                    
                    <!-- Card Horizontal -->
                    <div class = "card">
                        
                        <!-- Conteúdo do card -->
                        <div class = "card-body">
                            
                            <!-- Div Imagem -->
                            <div class = "div-img">
                                
                                <!-- Imagem do produto -->
                                <img src = "imgs/acucar.jpg" class = "img-card-horizontal">
                                
                                <!-- Div de ampliação -->                                
                                <div class = "ampliado">
                                    
                                    <!-- Título na imagem -->
                                    <div class = "title-img-ampliado">
                                        
                                        <!-- Nome do produto -->
                                        <label>
                                            
                                            <?php 
                                                
                                                // Estes comandos irão retornar somente a primeira palavra de uma frase, nosso exemplo é: "Nuggets são resto das amigas u.u". Foi retornado da $string somente a primeira palavra: "NUGGETS".
                                                
                                                $string = "Açucar Fresco";
                                                
                                                $string = explode(" ", $string);
                                                
                                                echo "$string[0]";
                                                
                                            ?>
                                            
                                        </label>
                                        <!-- /Nome do produto -->
                                        
                                    </div>
                                    <!-- Título na imagem -->
                                    
                                    <img src = "imgs/acucar.jpg" class = "img-ampliado">
                                    
                                </div>
                                <!-- /Div de ampliação --> 
                                
                            </div>
                            <!-- /Div imagem -->
                            
                            <!-- Div descrição -->
                            <div class = "div-info">
                                
                                <!-- Título -->
                                <h3 class = "title-mobile">Carne</h3>
                                
                                <!-- Descrição -->
                                <p class = "descricao">Uma descrição breve do produto</p>
                                
                            </div>
                            <!-- /Div descrição -->
                            
                            <!-- Div quantidade -->
                            <div class = "qtde">
                                
                                <!-- Quantidade -->
                                <input type = "number" class = "form-control" value = "1">
                                
                            </div>
                            <!-- /Div quantidade -->
                            
                            <!-- Div preço -->
                            <div class = "preco">
                                
                                <!-- Preço -->
                                <label class = "font-weight-bold">Preço: R$ 0,00</label>
                                
                            </div>
                            <!-- /Div preço -->
                            
                        </div>
                        <!-- /Conteúdo do card -->
                        
                    </div>
                    <!-- /Card -->
                    
                </div>
                <!-- /Tamanho -->
                
            </div>
            <!-- /Row -->
            
        </div>
        <!-- /Container -->
    <script>
    // $(document).ready(function(){
    //    $('input:hidden').css('background', 'black');
    //   $('input[type=number]').css('color', 'white');
    //});
        
    </script>
    </body>
    <!-- Body -->
    
</html>