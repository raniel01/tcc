<html>
    
    <head>
        
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    
        <title>Nome do Produto</title>
    
        <!-- Bootstrap CSS CDN -->
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity = "sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin = "anonymous">
        <!-- Our Custom CSS -->
        <link rel = "stylesheet" href = "style-slidenav.css">
        
    </head>
    
    <body class = "pt-5">
        
    <?php include('header_navbar.php') ?>
    
    <div class = "container-fluid mb-3">
        
        <div class = "row pt-5">
                
            <div class = "col-md-5 col-sm-12 offset-md-1">
                    
                <img src = "imgs/fundo.png" class = "rounded float-right responsive w-100" alt = "imagem do produto">
                    
            </div>
                
            <div class = "col-md-5 col-sm-12 mt-4 mt-md-0">
                    
                <div class = "card">
                    
                    <div class = "card-body">
                        
                        <h3 class = "card-title">Nome do Produto</h3>
                        
                        <p class = "card-text mt-4">Isso é uma descição breve sobre o produto.</p>
                        
                        <p class = "font-weight-bold mt-5"><h3 = class = "text-danger">Preço</h3></p>
                        
                        <button type = "button" class = "btn btn-primary mt-4">Adicionar ao Carrinho</button>

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
        
    <?php include('Footer_teste.php') ?>
        
    </body>
    
</html>