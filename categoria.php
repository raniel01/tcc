<?php include('header_navbar.php'); ?>

<body>
    <!--formulario para puxar o id-->
 <form action="produtoscategoria.php" method ="get">  
    <!-- Conteúdo -->
    <div class = "container-fluid">
        
        <!-- Row Título -->
        <div class = "row">
            
            <!-- Tamanho "col-12 para todas as telas" -->
            <div class = "col-12 py-3">
                
                <!-- Título -->
                <h3 class = "text-center d-none d-md-block">Principais Categorias</h3>
                
                <!-- Título "Telas pequenas" -->
                <h5 class = "text-center d-md-none">Principais Categorias</h5>
                
            </div>
            <!-- Tamanho "col-12 para todas as telas" -->
            
        </div>
        <!-- Row Título -->
        
        <!-- Row Categorias Principais -->
        <div class = "row py-3 px-lg-5">
            
            <!-- Categoria 01 -->
            <div class = "col-6 col-md-6 col-lg-3 mt-0">
                
                <!-- imagem -->
                <a href = "produtoscategoria.php?p=1&c=1">
                <img src = "imgs/vetor_alimentos.jpg" class = "mx-auto d-block rounded-circle col-9 col-md-6 col-lg-6">
                </a>
                <!-- texto "telas grandes" -->
                <h4 class = "text-center d-none d-md-block pt-1">Alimentos</h4>
                
                <!-- Texto "Telas pequenas" -->
                <h5 class = "text-center d-md-none pt-1">Alimentos</h5>
                
            </div>
            <!-- categoria 01 -->
            
            <!-- Categoria 02 -->
            <div class = "col-6 col-md-6 col-lg-3 mt-0">
                
                <!-- imagem -->
                <a href = "produtoscategoria.php?p=14&c=1">
                <img src = "imgs/vetor_bebidas.jpg" class = "mx-auto d-block rounded-circle col-9 col-md-6 col-lg-6">
                </a>
                <!-- texto "telas grandes" -->
                <h4 class = "text-center d-none d-md-block pt-1">Bebidas</h4>
                
                <!-- Texto "Telas pequenas" -->
                <h5 class = "text-center d-md-none pt-1">Bebidas</h5>
                
            </div>
            <!-- categoria 02 -->
            
            <!-- Categoria 03 -->
            <div class = "col-6 col-md-6 col-lg-3  mt-3 mt-lg-0">
                
                <!-- imagem -->
                <a href = "produtoscategoria.php?p=7&c=1">
                <img src = "imgs/vetor_carnes.jpg" class = "mx-auto d-block rounded-circle col-9 col-md-6 col-lg-6">
                 </a>
                <!-- texto "telas grandes" -->
                <h4 class = "text-center d-none d-md-block pt-1">Carnes</h4>
                
                <!-- Texto "Telas pequenas" -->
                <h5 class = "text-center d-md-none pt-1">Carnes</h5>
                
            </div>
            <!-- categoria 03 -->
            
            <!-- Categoria 04 -->
            <div class = "col-6 col-md-6 col-lg-3  mt-3 mt-lg-0">
                
                <!-- imagem -->
                <a href = "produtoscategoria.php?p=4&c=1">
                <img src = "imgs/vetor_limpeza.jpg" class = "mx-auto d-block rounded-circle col-9 col-md-6 col-lg-6">
                </a>
                <!-- texto "telas grandes" -->
                <h4 class = "text-center d-none d-md-block pt-1">Limpeza</h4>
                
                <!-- Texto "Telas pequenas" -->
                <h5 class = "text-center d-md-none pt-1">Limpeza</h5>
                
            </div>
            <!-- categoria 04 -->
            
        </div>
        <!-- Row Categorias Principais -->
        
        <!-- Row Banner -->
        <div class = "row">
            
            <!-- Tamanho "col-12 para todas as telas" -->
            <div class = "col-12 px-0 box-shadow">
                
                <!-- Para telas grandes -->
                
                <img src = "imgs/banner-categorias-2.png" class = "w-100 d-none d-lg-block">
                
                <!-- Para telas pequenas -->
                <img src = "imgs/banner-categorias-2.png" class = "w-100 img-responsive d-lg-none">
                
            </div>
            <!-- Tamanho "col-12 para todas as telas" -->
            
        </div>
        <!-- Row Banner -->
        
        <!-- Row Título -->
        <div class = "row">
            
            <!-- Tamanho "col-12 para todas as telas" -->
            <div class = "col-12 py-3">
                
                <!-- Título -->
                <h3 class = "text-center d-none d-md-block">Outras Categorias</h3>
                
                <!-- Título "Telas pequenas" -->
                <h5 class = "text-center d-md-none">Outras Categorias</h5>
                
            </div>
            <!-- Tamanho "col-12 para todas as telas" -->
            
        </div>
        <!-- Row Título -->
        
        <!-- Row 01 Categorias -->
        <div class = "row">
            
            <!-- Tamanho -->
            <div class = "col-12 col-md-6">
                
                <div class = "form-group"> 
                    
                    <!-- Link -->
                    <a href = "produtoscategoria.php?p=2&c=1" class = "form-control text-center hover-orange">Cuidados para seu bebê</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
            <!-- Tamanho -->
            <div class = "col-12 col-md-6">
                
                <div class = "form-group"> 
                    
                    <!-- Link -->
                    <a href = "produtoscategoria.php?p=12&c=1" class = "form-control text-center hover-orange">Frios</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
        </div>
        <!-- Row 01 Categorias -->
        
        <!-- Row 02 Categorias -->
        <div class = "row">
            
            <!-- Tamanho -->
            <div class = "col-12 col-md-6">
                
                <div class = "form-group"> 
                    
                    <!-- Link -->
                    <a href = "produtoscategoria.php?p=16&c=1" class = "form-control text-center hover-orange">Farinhas e grãos</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
            <!-- Tamanho -->
            <div class = "col-12 col-md-6">
                
                <div class = "form-group"> 
                    
                    <!-- Link -->
                    <a href = "produtoscategoria.php?p=8&c=1" class = "form-control text-center hover-orange">Hortifruti</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
        </div>
        <!-- Row 02 Categorias -->
        
        <!-- Row 03 Categorias -->
        <div class = "row">
            
            <!-- Tamanho -->
            <div class = "col-12 col-md-6">
                
                <div class = "form-group"> 
                    
                    <!-- Link -->
                    <a href = "produtoscategoria.php?p=17&c=1" class = "form-control text-center hover-orange">Sobremesas</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
            <!-- Tamanho -->
            <div class = "col-12 col-md-6">
                
                <div class = "form-group"> 
                    
                    <!-- Link -->
                    <a href = "produtoscategoria.php?p=10&c=1" class = "form-control text-center hover-orange">Higiene</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
        </div>
        <!-- Row 03 Categorias -->
        
        <!-- Row 04 Categorias -->
        <div class = "row">
            
            <!-- Tamanho -->
            <div class = "col-12 col-md-6">
                
                <div class = "form-group"> 
                    
                    <!-- Link -->
                    <a href = "produtoscategoria.php?p=14&c=1" class = "form-control text-center hover-orange">Bebidas Alcoólicas</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
            <!-- Tamanho -->
            <div class = "col-12 col-md-6">
                
                <div class = "form-group"> 
                    
                    <!-- Link -->
                    <a href = "produtoscategoria.php?p=4&c=1" class = "form-control text-center hover-orange">Limpeza</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
        </div>
        <!-- Row 04 Categorias -->
        
        <!-- Row Banner -->
        <div class = "row">
            
            <!-- Tamanho "col-12 para todas as telas" -->
            <div class = "col-12 px-0 box-shadow">
                
                <!-- Para telas grandes -->
                
                <img src = "imgs/banner-categorias.png" class = "w-100 d-none d-lg-block">
                
                <!-- Para telas pequenas -->
                <img src = "imgs/banner-categorias.png" class = "w-100 img-responsive d-lg-none">
                
            </div>
            <!-- Tamanho "col-12 para todas as telas" -->
            
        </div>
        <!-- Row Banner -->
        <!-- Título -->
        <div class = "row py-2">
            
            <!-- Tamanho "col-12 para todas as telas" -->
            <div class = "col-12">
                
                <!-- Telas grandes -->
                <h3 class = "text-center d-none d-md-block">Todas as Categorias</h3>
                
            </div>
            <!-- Tamanho "col-12 para todas as telas" -->
            
        </div>
        <!-- Título -->
      
        <!-- Categorias -->
        <div class = "row">
            
            <!--===================================  TELAS GRANDES ====================================-->
            
            <!-- Coluna 01 -->
            <div class = "col-lg-3 d-none d-lg-block">
                
                <!-- Lista -->
                <ul class = "list-group list-group-flush">
                    
                    <!-- Links -->
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=1&c=1">Alimentos</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=2&c=1">Bebês</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=3&c=1">Perfumaria</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=4&c=1">Limpeza</a></li>
                    <!-- Links -->
                
                </ul>
                <!-- Lista -->
            
            </div>
            
            <!-- Coluna 02 -->
            <div class = "col-lg-3 d-none d-lg-block">
                
                <!-- Lista -->
                <ul class = "list-group list-group-flush">
                
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=6&c=1">Bebidas</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=7&c=1">Carnes</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=8&c=1">Feira</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=9&c=1">Congelados</a></li>
                
                </ul>
                
            </div>
            
            <!-- Coluna 03 -->
            <div class = "col-lg-3 d-none d-lg-block">
                
                <!-- Lista -->
                <ul class = "list-group list-group-flush">
                
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=10&c=1">Higiene Bucal</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=11&c=1">Condimentos e Reservas</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=12&c=1">Frios</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=13&c=1">Resfriados</a></li>
            
                </ul>
            
            </div>
            
            <!-- Coluna 04 -->
            <div class = "col-lg-3 d-none d-lg-block">
                
                <!-- Lista -->
                <ul class = "list-group list-group-flush">
                
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=14&c=1">Bebidas Alcóolicas</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=15&c=1">Bomboniere</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=16&c=1">Farinhas e Grãos</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=17&c=1">Sobremesas</a></li>
            
                </ul>
            
            </div>
            
            <!--===================================  TELAS GRANDES ====================================-->
            
            <!--===================================  TELAS MÉDIAS ====================================-->
            
            <!-- Coluna 01 -->
            <div class = "col-md-6 d-none d-md-block d-lg-none">
                
                <!-- Lista -->
                <ul class = "list-group list-group-flush text-center">
                    
                    <!-- Links -->
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=1&c=1">Alimentos</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=2&c=1">Bebês</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=3&c=1">Perfumaria</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=4&c=1">Limpeza</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=6&c=1">Bebidas</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=7&c=1">Carnes</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=8&c=1">Feira</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=9&c=1">Congelados</a></li>
                    <!-- Links -->
                
                </ul>
                
            </div>
            
            <!-- Coluna 02 -->
            <div class = "col-md-6 d-none d-md-block d-lg-none">
                
                <!-- Lista -->
                <ul class = "list-group list-group-flush text-center">
                
                    <!-- Links -->
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=10&c=1">Higiene Bucal</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=11&c=1">Condimentos e Reservas</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=12&c=1">Frios</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=13&c=1">Resfriados</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=14&c=1">Bebidas Alcóolicas</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=15&c=1">Bomboniere</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=16&c=1">Farinhas e Grãos</a></li>
                    <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=17&c=1">Sobremesas</a></li>
                    <!-- Links -->
            
                </ul>
            
            </div>
            
            <!--===================================  TELAS MÉDIAS ====================================-->
            
        </div>
        <!-- Fim row categorias para telas grandes "Essa row não pode se aplicar a telas pequenas... vai bugar o nav"
            
            <!--===================================  TELAS MÉDIAS ====================================-->
            
            <!--===================================  TELAS PEQUENAS ====================================-->
            
            <div class = "d-md-none">
                    
                <!-- Navbar -->
                <nav class = "navbar navbar-expand-lg navbar-light">
    
                    <!-- Título -->
                    <a class = "navbar-brand">Todas as Categoria</a>
    
                    <!-- Ícone -->
                    <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">
        
                        <span class = "navbar-toggler-icon"></span>
      
                    </button>
                    <!-- Ícone -->
    
                    <!-- Conteúdo do formulário de busca(Versão Mobile) -->
                    <div class = "collapse navbar-collapse left-float" id = "navbarSupportedContent">
                            
                        <!-- Coluna 01 -->
                        <div class = "col-md-none col-12">
                    
                            <!-- Lista -->
                            <ul class = "list-group list-group-flush pt-3">
                                
                                <!-- Links -->
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=1&c=1">Alimentos</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=2&c=1">Bebês</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=3&c=1">Perfumaria</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=4&c=1">Limpeza</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=6&c=1">Bebidas</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=7&c=1">Carnes</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=8&c=1">Feira</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=9&c=1">Congelados</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=10&c=1">Higiene Bucal</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=11&c=1">Condimentos e Reservas</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=12&c=1">Frios</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=13&c=1">Resfriados</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=14&c=1">Bebidas Alcóolicas</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=15&c=1">Bomboniere</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=16&c=1">Farinhas e Grãos</a></li>
                                <li class = "list-group-item"><a class = "texto" href = "produtoscategoria.php?p=17&c=1">Sobremesas</a></li>
                                <!-- Links -->
                            
                            </ul>
                            
                        </div>
                        <!-- Coluna 01 -->
                            
                    </div>
                    <!-- Conteúdo do formulário de busca(Versão Mobile) -->
    
                </nav>
                <!-- Navbar -->
                    
            </div>
            
            <!--===================================  TELAS PEQUENAS ====================================-->
            
        <!-- Fim das Categorias! -->
            
    </div>
    <!-- Conteúdo -->
</form>
</body>

<?php include('Footer_teste.php'); ?>