<!-- Chamando Navbar -->
<?php include('header_navbar.php');?>

<!DOCTYPE html>
<!-- Conteúdo nesta página -->
<body>
    
    <!-- Style "Temporári0" -->
    <style>
        
        body{
            background-image: url('/imgs/fundocarrinho.jpg');
            background-repeat: no-repeat;
            background-position: top;
            background-size: cover;
        }
        
        .div-form{
            margin: 2rem 0 0 0;
            width: 90%;
            background-color: white;
            padding: 20px 17px;
            outline: 1px solid #ff7400;
            float: right;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
            min-height: 426px;
        }
        
        .div-form-msg{
            margin: 2rem 0 1rem 0;
            width: 90%;
            background-color: white;
            padding: 20px 17px 2px 17px;
            outline: 1px solid #ff7400;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }
        
        .div-titulo{
            margin-bottom: 3rem;
        }
        .titulo{
            transition: 0.5s;
            position: relative;
            animation: contato 0.7s infinite alternate;
            
        }
        .titulo:hover{
            color: #ff7400;
        }
        
        @keyframes contato{
            0%  {transform: translateY(3px);}
            100%{transform: translateY(-3px);}
        }
        
        .form-control:focus{
            box-shadow: 0px 0px 5px 1px #ff7400;
            border: 1px solid #ff7400;
        }
        
        .msg{
            max-height: 292px;
            min-height: 292px;
        }
        
        .msg-mobile{
            display: none;
        }
        
        .div-button{
            text-align: right;
            width: 100%;
        }
        
        .button-mobile{
            display: none;
        }
        
        @media only screen and (max-width: 1023px){
            
            .div-form{
                width: 100%;
                outline: none;
                box-shadow: none;
                float: none;
                border-radius: 10px;
                box-shadow: 0.2rem 0.3rem 1rem rgba(246,140,33,0.5);
            }
            .div-form-msg{
                width: 100%;
                outline: none;
                box-shadow: -0.2rem 0.3rem 1rem rgba(246,140,33,0.5);
                color: #ff7400;
                border-radius: 10px;
            }
            
        }
        
        @media only screen and (max-width: 576px){
            
            body{
                background-image: none;
            }
            
            .button-mobile{
                display: block;
            }
            
            .div-form{
                width: 100%;
                margin: 2rem 0 0 0;
                float: none;
                border: none;
                outline: none;
                box-shadow: 0px 0px 0px 0px;
                padding: 0 0 0 0;
            }
            
            .msg-mobile{
                display: block;
            }
            
            .div-form-msg{
                width: 100%;
                display: none;
            }
            
            .div-button{
                padding: 0  0 1rem 0;
            }
            
        }
        
    </style>
    <!-- /Style -->
    
    <!-- Container -->
    <div class = "container-fluid">
        
        <!-- Row -->
        <div class = "row">
            
            <!-- Tamanho -->
            <div class = "col-12 col-sm-6">
                
                <!-- Div div-form -->
                <div class = "div-form">
                    
                    <!-- Div título -->
                    <div class = "div-titulo">
                        
                        <!-- Título -->
                        <h3 class = "titulo">Contato</h3>
                        <hr>
                        
                    </div>
                    <!-- /Div título -->
                
                    <!-- Form -->
                    <form>
                        
                        <!-- Div form-group -->
                        <div class = "form-group">
                            
                            <!-- Nome -->
                            <label for = "name">Nome</label>
                            <input type = "text" class = "form-control">
                            <!-- /Nome -->
                            
                        </div>
                        <!-- /Div form-group -->
                        
                        
                        <!-- Div form-group -->
                        <div class = "form-group">
                            
                            <!-- Email -->
                            <label for = "name">Email</label>
                            <input type = "email" class = "form-control">
                            <!-- /Email -->
                            
                        </div>
                        <!-- /Div form-group -->
                        
                        <!-- Div form-group -->
                        <div class = "form-group">    
                            
                            <!-- Telefone -->
                            <label for = "name">Telefone</label>
                            <input type = "text" class = "form-control">
                            <!-- /Telefone -->
                            
                        </div>
                        <!-- /Div form-group -->
                        
                        <!-- Div form-group -->
                        <div class = "form-group msg-mobile">
                            
                            <!-- Mensagem "visível somente em Telas pequenas"- -->
                            <label for = "mensagem">Escreva sua Mensagem</label>
                            <textarea for = "mensagem" class = "form-control msg" rows = "12"></textarea>
                            <!-- /Mensagem -->
                            
                        </div>
                        <!-- /Div form-group -->
                        
                        <!-- Div Botão -->
                        <div class = "div-button button-mobile">
                            
                            <!-- Botão Enviar -->
                            <button type = "submit" class = "btn btn-lg btn-success">Enviar</button>
            
                        </div>
                        <!-- /Botão -->
                        
                    </form>
                    <!-- /Form -->
                    
                </div>
                <!-- /Div div-form -->
                
            </div>
            <!-- /Tamanho -->
            
            <!-- Tamanho -->
            <div class = "col-12 col-sm-6">
                
                <!-- Div div-form -->
                <div class = "div-form-msg">
                    
                    <!-- Form -->
                    <form>
                        
                        <!-- Div form-group -->
                        <div class = "form-group">
                            
                            <!-- Mensagem -->
                            <label for = "mensagem">Escreva sua Mensagem</label>
                            <textarea for = "mensagem" class = "form-control msg" rows = "12"></textarea>
                            <!-- /Mensagem -->
                            
                        </div>
                        <!-- /Div form-group -->
                        
                        <!-- Div Botão -->
                        <div class = "div-button">
                            
                            <!-- Botão Enviar -->
                            <button type = "submit" class = "btn btn-lg btn-success">Enviar</button>
            
                        </div>
                        <!-- /Botão -->
                        
                    </form>
                            <!-- /Form -->
                    
                </div>
                <!-- /Div div-form -->
                
            </div>
            <!-- /Tamanho -->
            
        </div>
        <!-- /Row -->
        
    </div>
    <!-- /Container -->
    
</body>
<!-- /Fim do conteúdo nesta página -->

<!-- Chamando Footer -->
<?php include('Footer_teste.php'); ?>