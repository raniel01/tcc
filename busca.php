
<!-- AVISO! Algumas tags estão com o style modificado diretamente por este documento devido aos bugs do Cloud 9 em linkar o style.css (João sabe do que eu estou falando) -->

<!-- Navbar -->
<?php 

include('header_navbar.php');

?>

<body>

    <!-- Navbar -->
    
    <!-- Conteúdo principal da página -->
    <div class = "container-fluid">
        
        <!-- Row principal da página -->
        <div class = "row">
            
            <!-- Formulário de busca -->
            <div class = "col-md-3 pt-3">
                
                <!-- div para espaçamento - NÃO MEXER -->
                <div class = "pb-3 d-none d-md-block">
            
                    <!-- Card de busca(usado para organizar dentro de um bloco) -->
                    <div class = "card">
                        
                        <!-- conteúdo do formulário de busca -->
                        <div class = "card-body">
                        
                            <!-- Row Título -->
                            <div class = "row">
                                
                                <!-- Tamanho -->
                                <div class = "col-md-12">
                                
                                    <!-- Título -->
                                    <h3 class = "card-title text-center">Busca Avançada</h3>
                                    
                                </div>
                                <!-- Tamanho -->
                                
                            </div>
                            <!-- Row Título -->
                            
                            <!-- Row Subtítulo - Categoria -->
                            <div class = "row pt-3">
                                    
                                <!-- Tamanho -->
                                <div class = "col-md-12">
                                
                                    <!-- Subtítulo -->
                                    <h5 class = "text-center">Categoria</h5>
                                    
                                </div>
                                <!-- tamanho -->
                                    
                            </div>
                            <!-- Row Subtítulo - Categoria -->
                            
                            <!-- Row Buscador -->
                            <div class = "row">
                                    
                                <!-- Tamanho -->
                                <div class = "col-md-12">
                                    
                                    <!-- Buscador -->
                                    <form class = "form-inline pt-2">
                    		          	
                    		          	<!-- Conteúdo Form -->
                            			<div class = "input-group mx-auto">
                            				
                            				<!-- Campo de pesquisa -->
                              			    <input type = "text" class = "form-control" placeholder = "Pesquisar produto">
                              			  
                                            <!-- Botão -->
                              				<div class = "input-group-append">
                              				
                                			  <button class = "btn btn-secondary" type = "button" id = "button-addon2">Busca</button>
                                			  
                              				</div>
                              				<!-- Botão -->
                              				
                            			</div>
                            			<!-- Conteúdo Form -->
                            			
                                    </form>
                                    <!-- Buscador -->
                                    
                                </div>
                	            
                            </div>
                            <!-- Row Buscador -->
                            
                            <!-- Row Checkbox -->
                            <div class = "row">
                                
                                <!-- Tamanho -->
                                <div class = "col-md-12">
                                    
                                    <!-- Checkbox - Alimentos Básicos -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Alimentos Básicos">Alimentos Básicos</label>
                                        
                                    </div>
                                    <!-- Checkbox - Alimentos Básicos -->
                                    
                                    <!-- Checkbox - Carnes, aves e peixes -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Carnes, aves e peixes">Carnes, aves e peixes</label>
                                        
                                    </div>
                                    <!-- Checkbox - Carnes, aves e peixes -->
                                    
                                    <!-- Checkbox - Bebidas -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Bebidas">Bebidas</label>
                                        
                                    </div>
                                    <!-- Checkbox - Bebidas -->
                                    
                                    <!-- Checkbox - bebidas alcoólicas -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Bebidas alcoólicas">Bebidas alcoólicas</label>
                                        
                                    </div>
                                    <!-- Checkbox - Bebidas alcoólicas -->
                                    
                                    <!-- Checkbox - Padaria -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Padaria">Padaria</label>
                                        
                                    </div>
                                    <!-- Checkbox - Padaria -->
                                    
                                    <!-- Checkbox - Hortifruti -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Hortfruti">Hortifruti</label>
                                        
                                    </div>
                                    <!-- Checkbox - Hortfruti -->
                                    
                                    <!-- Checkbox - Higiene -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Higiene">Higiene</label>
                                        
                                    </div>
                                    <!-- Checkbox - Higiene -->
                                    
                                    <!-- Checkbox - Limpeza -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Limpeza">Limpeza</label>
                                        
                                    </div>
                                    <!-- Checkbox - Limpeza -->
                                    
                                    <!-- Checkbox - Sobremesas -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Sobremesas">Sobremesas</label>
                                        
                                    </div>
                                    <!-- Checkbox - Sobremesas -->
                                    
                                    <!-- Checkbox - Farinhas e grãos -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Farinhas e grãos">Farinhas e grãos</label>
                                        
                                    </div>
                                    <!-- Checkbox - Farinhas e grãos -->
                                    
                                    <!-- Checkbox - Crianças -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Crianças">Crianças</label>
                                        
                                    </div>
                                    <!-- Checkbox - Crianças -->
                                    
                                </div>
                                <!--Tamanho -->
                                
                            </div>
                            <!-- Row Checkbox -->
                            
                            <!-- Row Subtítulo - Preço -->
                            <div class = "row pt-3">
                                    
                                <!-- Tamanho -->
                                <div class = "col-md-12">
                                
                                    <!-- Subtítulo -->
                                    <h5 class = "text-center">Preço</h5>
                                    
                                </div>
                                <!-- tamanho -->
                                    
                            </div>
                            <!-- Row Subtítulo - Preço -->
                            
                            <!-- Row Buscador -->
                            <div class = "row">
                                    
                                <!-- Tamanho -->
                                <div class = "col-md-12">
                                    
                                    <!-- Buscador -->
                                    <form class = "form-inline pt-2">
                    		          	
                    		          	<!-- Conteúdo Form -->
                            			<div class = "input-group mx-auto">
                            				
                            				<!-- Campo de pesquisa -->
                              			    <input type = "number" class = "form-control" placeholder = "Pesquisar preço">
                              			  
                                            <!-- Botão -->
                              				<div class = "input-group-append">
                              				
                                			  <button class = "btn btn-secondary" type = "button" id = "button-addon2">Busca</button>
                                			  
                              				</div>
                              				<!-- Botão -->
                              				
                            			</div>
                            			<!-- Conteúdo Form -->
                            			
                                    </form>
                                    <!-- Buscador -->
                                    
                                </div>
                	            
                            </div>
                            <!-- Row Buscador -->
                            
                            <!-- Row Checkbox -->
                            <div class = "row">
                                
                                <!-- Tamanho -->
                                <div class = "col-md-12">
                                    
                                    <!-- Checkbox - Até R$20 -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Até R$20">Até R$20</label>
                                        
                                    </div>
                                    <!-- Checkbox - Até R$20 -->
                                    
                                    <!-- Checkbox - De R$20 a R$50 -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "De R$20 a R$50">De R$20 a R$50</label>
                                        
                                    </div>
                                    <!-- Checkbox - De R$20 a R$50 -->
                                    
                                    <!-- Checkbox - De R$50 a R$100 -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "De R$50 a R$100">De R$50 a R$100</label>
                                        
                                    </div>
                                    <!-- Checkbox - De R$50 a R$100 -->
                                    
                                    <!-- Checkbox - Mais de R$100 -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Mais de R$100">Mais de R$100</label>
                                        
                                    </div>
                                    <!-- Checkbox - Mais de R$100 -->
                                    
                                </div>
                                <!--Tamanho -->
                                
                            </div>
                            <!-- Row Checkbox -->
                            
                            <!-- Row Subtítulo - Marca -->
                            <div class = "row pt-3">
                                    
                                <!-- Tamanho -->
                                <div class = "col-md-12">
                                
                                    <!-- Subtítulo -->
                                    <h5 class = "text-center">Marca</h5>
                                    
                                </div>
                                <!-- tamanho -->
                                    
                            </div>
                            <!-- Row Subtítulo - Marca -->
                            
                            <!-- Row Buscador -->
                            <div class = "row">
                                    
                                <!-- Tamanho -->
                                <div class = "col-md-12">
                                    
                                    <!-- Buscador -->
                                    <form class = "form-inline pt-2">
                    		          	
                    		          	<!-- Conteúdo Form -->
                            			<div class = "input-group mx-auto">
                            				
                            				<!-- Campo de pesquisa -->
                              			    <input type = "text" class = "form-control" placeholder = "Pesquisar marca">
                              			  
                                            <!-- Botão -->
                              				<div class = "input-group-append">
                              				
                                			  <button class = "btn btn-secondary" type = "button" id = "button-addon2">Busca</button>
                                			  
                              				</div>
                              				<!-- Botão -->
                              				
                            			</div>
                            			<!-- Conteúdo Form -->
                            			
                                    </form>
                                    <!-- Buscador -->
                                    
                                </div>
                	            
                            </div>
                            <!-- Row Buscador -->
                            
                            <!-- Row Checkbox -->
                            <div class = "row">
                                
                                <!-- Tamanho -->
                                <div class = "col-md-12">
                                    
                                    <!-- Checkbox - Mais famosas -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Mais famosas">Mais famosas</label>
                                        
                                    </div>
                                    <!-- Checkbox - Mais famosas -->
                                    
                                    <!-- Checkbox - Melhores avaliações -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Melhores avaliações">Melhores avaliações</label>
                                        
                                    </div>
                                    <!-- Checkbox - Melhores avaliações -->
                                    
                                    <!-- Checkbox - Melhor custo-benefício -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Melhor custo-benefício">Melhor custo-benefício</label>
                                        
                                    </div>
                                    <!-- Checkbox - Melhor custo-benefício -->
                                    
                                </div>
                                <!--Tamanho -->
                                
                            </div>
                            <!-- Row Checkbox -->
                	            
                        </div>
                        <!-- conteúdo do formulário de busca -->
                            
                    </div>
                    <!-- Card de busca -->
                    
                </div>
                <!-- div para espaçamento - não mexer -->
                
                <!-- Versão Mobile do formulário de Busca - "Essa versão é mais simples que a versão de PC para não ficar algo massante e enorme na tela do usuário" -->
                <div class = "d-md-none">
                    
                    <!-- Navbar -->
                    <nav class = "navbar navbar-expand-lg navbar-light">
    
                        <!-- Título -->
                        <a class = "navbar-brand">Categorias</a>
    
                        <!-- Ícone -->
                        <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">
        
                            <span class = "navbar-toggler-icon"></span>
      
                        </button>
                        <!-- Ícone -->
    
                        <!-- Conteúdo do formulário de busca(Versão Mobile) -->
                        <div class = "collapse navbar-collapse left-float" id = "navbarSupportedContent">
                            
                            <!-- Row Buscador -->
                            <div class = "row">
                                    
                                <!-- Tamanho -->
                                <div class = "col-md-12">
                                    
                                    <!-- Buscador -->
                                    <form class = "form-inline pt-2">
                    		          	
                    		          	<!-- Conteúdo Form -->
                            			<div class = "input-group mx-auto pt-3">
                            				
                            				<!-- Campo de pesquisa -->
                              			    <input type = "text" class = "form-control" name="buscacategoria" placeholder = "Pesquisar Categoria">
                              			  
                                            <!-- Botão -->
                              				<div class = "input-group-append">
                              				
                                			  <button class = "btn btn-success" type = "button" id = "button-addon2">Busca</button>
                                			  
                              				</div>
                              				<!-- Botão -->
                              				
                            			</div>
                            			<!-- Conteúdo Form -->
                            			
                                    </form>
                                    <!-- Buscador -->
                                    
                                </div>
                	            
                            </div>
                            <!-- Row Buscador -->
                            
                            <!-- Row Checkbox -->
                            <div class = "row">
                                
                                <!-- Tamanho -->
                                <div class = "col-md-12">
                                    
                                    <!-- Checkbox - Alimentos Básicos -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Alimentos Básicos">Alimentos Básicos</label>
                                        
                                    </div>
                                    <!-- Checkbox - Alimentos Básicos -->
                                    
                                    <!-- Checkbox - Carnes, aves e peixes -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Carnes, aves e peixes">Carnes, aves e peixes</label>
                                        
                                    </div>
                                    <!-- Checkbox - Carnes, aves e peixes -->
                                    
                                    <!-- Checkbox - Bebidas -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Bebidas">Bebidas</label>
                                        
                                    </div>
                                    <!-- Checkbox - Bebidas -->
                                    
                                    <!-- Checkbox - bebidas alcoólicas -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Bebidas alcoólicas">Bebidas alcoólicas</label>
                                        
                                    </div>
                                    <!-- Checkbox - Bebidas alcoólicas -->
                                    
                                    <!-- Checkbox - Padaria -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Padaria">Padaria</label>
                                        
                                    </div>
                                    <!-- Checkbox - Padaria -->
                                    
                                    <!-- Checkbox - Hortifruti -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Hortfruti">Hortifruti</label>
                                        
                                    </div>
                                    <!-- Checkbox - Hortfruti -->
                                    
                                    <!-- Checkbox - Higiene -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Higiene">Higiene</label>
                                        
                                    </div>
                                    <!-- Checkbox - Higiene -->
                                    
                                    <!-- Checkbox - Limpeza -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Limpeza">Limpeza</label>
                                        
                                    </div>
                                    <!-- Checkbox - Limpeza -->
                                    
                                    <!-- Checkbox - Sobremesas -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Sobremesas">Sobremesas</label>
                                        
                                    </div>
                                    <!-- Checkbox - Sobremesas -->
                                    
                                    <!-- Checkbox - Farinhas e grãos -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Farinhas e grãos">Farinhas e grãos</label>
                                        
                                    </div>
                                    <!-- Checkbox - Farinhas e grãos -->
                                    
                                    <!-- Checkbox - Crianças -->
                                    <div class = "form-group form-check">
                                        
                                        <!-- Checkbox -->
                                        <input type = "checkbox" class = "form-check-input" id = "#">
                                        
                                        <!-- Nome -->
                                        <label class = "form-check-label" for = "Crianças">Crianças</label>
                                        
                                    </div>
                                    <!-- Checkbox - Crianças -->
                                    
                                </div>
                                <!--Tamanho -->
                                
                            </div>
                            <!-- Row Checkbox -->
                            
                        </div>
                        <!-- Conteúdo do formulário de busca(Versão Mobile) -->
    
                    </nav>
                    <!-- Navbar -->
                    
                </div>
                <!-- Versão Mobile do formulário de Busca -->
                
            </div>
            <!-- Formulário de busca -->
            
            <!-- Exibiçao dos resultados da busca -->
            <div class = "col-md-9 pt-3">
                
                <!-- Row dos cards de exibição dos produtos -->
                <div class = "row">
                <?php
                    if($busca == ""){
                        echo '<h5 class="text-center col-md-12">Exibindo Todos Os Resultados</h5>';
                    }else{
                        echo '<h5 class="text-center col-md-12">Exibindo Os Resultados em <b>'.$busca.'</b></h5>';
                    }
                ?>
                    <!-- Tamanho do Card -->
                     <?php 
                		$pesquisas = BuscaProduto($busca);
                		while ($pesquisa = $pesquisas->fetch_array()){
                	 ?>
                    <div class = "col-md-4">
                        
                        <!-- Card -->
                        <div class = "card">
                            
                            <!-- Imagem do Card -->
                            <img class = "card-img-top" src = "<?php echo $pesquisa['DS_FOTO_PRODUTO']; ?>">
                            
                            <!-- Corpo do Card -->
                            <div class = "card-body">
                                
                                <!-- Título do Card -->
                                <h5 class = "card-title"> <?php
                                    // Descrição do Produto
                                    $texto = $pesquisa['NM_PRODUTO'];
                                    
                                    // Limite de texto do titulo                                    
                                    $limite = 60;
                                    $tamanho = strlen($texto);
                                    
                                    if($tamanho <= $limite){
                                        echo $texto;
                                    }else{
                                        $resumo = trim(substr($texto, 0, $limite))."...";
                                        echo $resumo;
                                    }
                                    ?></h5>
                                
                                <!-- Descrição do Produto -->
                                <p class = "card-text">
                                    <?php
                                    //  limite de Descrição do Produto
                                    $texto = $pesquisa['DS_DESCRIÇÃO'];
                                    
                                    // Limite de texto                                    
                                    $limite = 80;
                                    $tamanho = strlen($texto);
                                    
                                    if($tamanho <= $limite){
                                        echo $texto;
                                    }else{
                                        $resumo = trim(substr($texto, 0, $limite))."...";
                                        echo $resumo;
                                    }
                                    ?>
                                </p>
                                <!-- Descrição do produto -->
                                
                                <!-- Botão -->
                                <a href = "#" class = "btn busca-bg-card">Ver Mais...</a>
                                
                            </div>
                            <!-- Corpo do Card -->
                            
                        </div>
                        <!-- Card -->
                        
                   
                    </div>
                    <!-- Tamanho do Card -->
                     
                    <?php  
               			 } 
                	?>
                   
                </div>
                <!-- Row dos cards de exibição dos produtos -->
                
            </div>
            <!-- exibição dos resultados da Busca -->
            
        </div>
        <!-- Row principal da página -->
        
        <!-- Row da paginação -->
        <div class = "row">
                    
            <!-- tamanho -->
            <div class = "col-md-auto mx-auto pt-2">
                        
                <!-- Paginação -->
                <nav aria-label = "Page navigation example">
  
                    <!-- Botões -->
                    <ul class="pagination busca-a-pagination">
    
                        <li class = "page-item"><a class = "page-link" href = "#">Anterior</a></li>
                        <li class = "page-item"><a class = "page-link" href="#">1</a></li>
                        <li class = "page-item"><a class = "page-link" href="#">2</a></li>
                        <li class = "page-item"><a class = "page-link" href="#">3</a></li>
                        <li class = "page-item"><a class = "page-link" href="#">Próximo</a></li>
                            
                    </ul>
                    <!-- Botões -->

                </nav>
                <!-- Paginação -->
                        
            </div>
            <!-- tamanho -->
                    
        </div>
        <!-- Row da paginação -->
        
    </div>
    <!-- Conteúdo principal da página -->

</body>

<?php include('Footer_teste.php'); ?>