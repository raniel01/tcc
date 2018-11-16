<html>
    
    <head>
        
        <!-- Título da página -->
        <title>Cards</title>
        
        <meta charset = "utf-8">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">
        
        <style>
        
            .card{
                margin: 1rem 0;
                border-radius: 0;
            }
            
            .img-card{
                width: 100%;
                text-align: center;
                padding: 1.5rem 0 0.2rem 0;
            }
            
            .card-img-top{
                width:150px;
                height: 150px;
                object-fit: cover;
                border-radius: 50%;
            }
            
            .info{
                position: absolute;
                right:15px;
                top:15px;
                font-size: 20px;
                color: #ff7800;
            }
            
            .status{
                text-align: center;
                margin: 0.5rem 0;
            }
            
            .title{
                font-size: 20px;
                font-weight: bold;
                display: block;
                margin-top: 0.5rem;
            }
            
            .span-status{
                color: white;
                padding: 12px 16px;
                border-radius: 5px;
                font-weight: bold;
                margin-top: 0.5rem;
            }
            
        </style>
        
    </head>
    
    <body>
        
        <!-- Container -->
        <div class = "container">
            
            <!-- Row -->
            <div class = "row justify-content-center">
                
                <!-- Tamanho -->
                <div class = "col-8">
                    
                    <!-- Card -->
                    <div class = "card">
                        
                        <i class="fas fa-info-circle info"></i>
                        
                        <div class = "img-card">
                            
                            <!-- Imagem do Crad -->
                            <img class = "card-img-top" src = "images/fundo.png" alt="Card image cap">
                            
                        </div>
                        
                        <!-- Body Card -->
                        <div class = "card-body">
                            
                            <!-- Título -->
                            <h5 class = "text-center text-secondary">Nome de Usuário</h5>
                            
                            <!-- Email -->
                            <h6 class = "text-center text-secondary">example@example.com</h6>
                            
                            <!-- Div Status -->
                            <div class = "status">
                                
                                <label class = "title">Status</label>
                                
                                <span class = "span-status bg-success btn-block">Processando</span>
                                
                                <label class = "title">N° do pedido</label>
                                
                                <span class = "span-status bg-dark btn-block">99999999999</span>
                                
                            </div>
                            <!-- /Div status -->
                            
                        </div>
                        <!-- /Body Card -->
                    
                    </div>
                    <!-- /Card -->
                    
                </div>
                <!-- /Tamanho -->
                
            </div>
            <!-- /Row -->
            
        </div>
        <!-- /Container -->

    </body>
    
</html>