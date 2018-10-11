<?php
    include('conexao.php');
    session_start();
    Sair();

?>
<!DOCTYPE html>
<html>

    <head>
        
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    
        <title>Perfil de usuário</title>
    
        <!-- Bootstrap CSS CDN -->
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity = "sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin = "anonymous">
        <!-- Our Custom CSS -->
        <link rel = "stylesheet" href = "style-slidenav.css">
    
        <!-- Font Awesome JS -->
        <script defer src = "https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity = "sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin = "anonymous"></script>
        <script defer src = "https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity = "sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin = "anonymous"></script>
    
    </head>

<body>
    
    <div class = "wrapper">
        
        <!-- Sidebar -->
        <nav id = "sidebar">
            
            <div class = "sidebar-header">
                
                <h3>Perfil de usuário</h3>
                                    
            </div>
            
            <div class = "media">
                
                <div class = "container-fluid bg-gradient-primary img-responsive col-md-12" style = "background-image: url('imgs/foto.jpg');">
                
                    <div class = "row">
                        
                    <div class = "col-md-12">
                        
                        <div class = " pb-2 pt-2 m-auto" style = "width: 40%">
                            
                            <img class = "rounded-circle img-fluid" src = "imgs/logo.png" alt = "Imagem de perfil">
                            
                        </div>

                        <div class ="media-body">
                            
                            <p class = "text-center text-white text-uppercase text-light bg-dark rounded" ><?php echo $_SESSION['nome']; ?></p>
                            
                        </div>
    
                    </div>
                    
                    </div>
                
                </div>

            </div>

            <ul class = "list-unstyled components">
                
                <li>
                    
                    <a href = "">Minha Lista</a>
                
                </li>

                <li>
                    
                    <a href = "#">Ofertas do dia</a>
                
                </li>
                
                <li>
                    
                    <a href = "#homeSubmenu" data-toggle = "collapse" aria-expanded = "false">Configurações</a>
                    
                    <ul class = "collapse list-unstyled" id = "homeSubmenu">
                        
                        <li>
                            
                            <a href = "#">Configuração</a>
                        
                        </li>
                        
                        <li>
                            
                            <a href = "#">Configuração</a>
                        
                        </li>
                        
                        <li>
                            
                            <a href = "#">Configuração</a>
                        
                        </li>
                    
                    </ul>
                    
                </li>
                
                <li>
                    
                    <a href = "#">Ajuda</a>
                
                </li>
            </ul>

            <ul class = "list-unstyled CTAs">
                
                <li>
                    
                    <a href="https://meucarrinho-xtranx.c9users.io/rascunho/rascunho-tcc/perfil.php?Sair"><button tyle = "button" class = "btn btn-danger col-12">Sair</button></a>
                
                </li>
            
            </ul>
        
        </nav>
        <!-- Sidebar -->

        <!-- Page Content  -->
        
        <div id = "content">

            <nav class = "navbar navbar-expand-lg navbar-light bg-light">
                
                <div class = "container-fluid">

                    <button type = "button" id = "sidebarCollapse" class = "mb-2 m-md-0 btn btn-outline-warning"><img src = "https://image.flaticon.com/icons/svg/181/181549.svg" width = "27" height = "25"></button>

                    <form class = "form-inline">
                        
                        <input class = "form-control mr-2 mr-sm-2" type = "search" placeholder = "Pesquisar no Carrinho...">
                        
                        <button class = "d-none d-sm-block btn btn-outline-warning my-2" type = "submit"><img src = "https://image.flaticon.com/icons/svg/34/34097.svg" height = "27" widht = "25"></button>
                        
                    </form>
                    
                </div>
                
            </nav>
                
            <div class = "container-fluid">
                    
                <div class = "row">
                        
                    <div class = "col-md-6 col-sm-12">
                            
                        <div class = "card bg-light">
                            
                            <div class = "card-header">Meu Saldo</div>

                            <div class = "card-body">
                                
                                <h5 class = "card-title">R$0,00</h5>
                            
                            </div>
                    
                        </div>
                            
                    </div>
                        
                    <div class = "col-md-6 col-sm-12  mt-3 mt-md-0">
                            
                        <div class = "card bg-light">
                            
                            <div class = "card-header">Compra Créditos</div>

                            <div class = "card-body">
                                
                                <h5 class = "card-title">R$0,00</h5>
                            
                            </div>
                    
                        </div>  
                            
                    </div>
                        
                </div>
                
                <div class = "row">
                    
                    <div class = "line"></div>
                    
                    <div class = "col align-self-center">
                        
                        <h5 class = "text-center">Carrinho</h5>
                        
                    </div>
                        
                </div>
                
                <div class = "row mt-4">
                    
                    <div class = "col-md-3 col-sm-12  mt-3 mt-md-0">
                        
                        <div class = "card shadow-sm">

                            <img class = "card-img-top" src = "imgs/fundo.png" alt = "Card image cap">
  
                            <div class = "card-body">
                            
                                <h5 class = "card-title">Produto</h5>
                                
                                <p class = "card-text">R$ 0,00</p>
                                
                                <div class = "row">
                                    
                                    <input type = "number" class = "form-control col-4 ml-3" value = "1">
                                    
                                    <button type="button" class="btn btn-danger col-5 ml-4">Remover</button>
                                    
                                </div>

                            </div>

                        </div>
                        
                    </div>
                    
                    <div class = "col-md-3 col-sm-12  mt-3 mt-md-0">
                        
                        <div class = "card shadow-sm">

                            <img class = "card-img-top" src = "imgs/fundo.png" alt = "Card image cap">
  
                            <div class = "card-body">
                            
                                <h5 class = "card-title">Produto</h5>
                                
                                <p class = "card-text">R$ 0,00</p>
                                
                                <div class = "row">
                                    
                                    <input type = "number" class = "form-control col-4 ml-3" value = "1">
                                    
                                    <button type="button" class="btn btn-danger col-5 ml-4">Remover</button>
                                    
                                </div>

                            </div>

                        </div>
                        
                    </div>
                    
                    <div class = "col-md-3 col-sm-12  mt-3 mt-md-0">
                        
                        <div class = "card shadow-sm">

                            <img class = "card-img-top" src = "imgs/fundo.png" alt = "Card image cap">
  
                            <div class = "card-body">
                            
                                <h5 class = "card-title">Produto</h5>
                                
                                <p class = "card-text">R$ 0,00</p>
                                
                                <div class = "row">
                                    
                                    <input type = "number" class = "form-control col-4 ml-3" value = "1">
                                    
                                    <button type="button" class="btn btn-danger col-5 ml-4">Remover</button>
                                    
                                </div>

                            </div>

                        </div>
                        
                    </div>
                    
                    <div class = "col-md-3 col-sm-12  mt-3 mt-md-0">
                        
                        <div class = "card shadow-sm">

                            <img class = "card-img-top" src = "imgs/fundo.png" alt = "Card image cap">
  
                            <div class = "card-body">
                            
                                <h5 class = "card-title">Produto</h5>
                                
                                <p class = "card-text">R$ 0,00</p>
                                
                                <div class = "row">
                                    
                                    <input type = "number" class = "form-control col-4 ml-3" value = "1">
                                    
                                    <button type="button" class="btn btn-danger col-5 ml-4">Remover</button>
                                    
                                </div>

                            </div>

                        </div>
                        
                    </div>
                    
                </div>
                
                <div class = "row mt-3 justify-content-center">
                    
                    <nav aria-label = "Page navigation example">

                        <ul class = "pagination">
                            
                            <li class = "page-item"><a class = "page-link" href = "#">1</a></li>
                            <li class = "page-item"><a class = "page-link" href = "#">2</a></li>
                            <li class = "page-item"><a class = "page-link" href = "#">3</a></li>
                            <li class = "page-item"><a class = "page-link" href = "#">4</a></li>
                            <li class = "page-item"><a class = "page-link" href = "#">5</a></li>
                        
                        </ul>

                    </nav>
                    
                </div>
                
                <div class = "row">
                    
                    <div class = "col-md-4 col-sm-12 mt-2">
                        
                            <span class = "text-uppercase font-weight-bold text-dark pl-3">Total da Compra:</span>
                            
                            <hr>
                        
                    </div>
                    
                    <div class = "col-md-3 offset-md-5 col-sm-12">
                        
                        <form>
                            
                            <button type = "submit" class = "btn btn-outline-success btn-lg btn-block mt-2">Finalizar Compra</button>
                            
                        </form>
                        
                    </div>
                    
                </div>
    
            </div>
            
        </div>
        
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script>
    <!-- Popper.JS -->
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity = "sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin = "anonymous"></script>
    <!-- Bootstrap JS -->
    <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity = "sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin = "anonymous"></script>

    <script type = "text/javascript">
    
        $(document).ready(function(){
            
            $('#sidebarCollapse').on('click', function(){
                
                $('#sidebar').toggleClass('active');
                
            });
            
        });
        
        $(document).ready(function(){
            
            $('#sidebarCollapse2').on('click', function(){
                
                $('#sidebar').toggleClass('active');
                
            });
            
        });
        
    </script>
    
</body>

</html>