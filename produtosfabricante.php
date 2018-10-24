<?php include('header_navbar.php'); ?>

<!-- Conteúdo -->
<body>
    
    <!-- Container -->
    <div class = "container-fluid">
            <?php
                    //pegando o fabricante do produto e enviando nessa variavel
            		$idfabricante=$_GET['f'];
            		//puxando a função da categoria
            		$fabricante = ListaFabricanteProduto($idfabricante)
          
           ?>
        <!-- Row Título -->
        <div class = "row">
            
            <!-- Tamanho -->
            <div class = "col-12 pt-2">
                
                <h3 class = "text-center">Exibindo todos os resultados deste Fabricante.</h3>
                
            </div>
            <!-- Tamanho -->
            
        </div>
        <!-- Row Título -->
        
        <!-- Row -->
        <div class = "row">
            
            <!-- Tamanho -->
            <div class = "col-12">
                
               <!-- Exibiçao dos resultados da busca -->
            <div class = "col-lg-12 pt-2">
               
               <form action="produto.php" method="get" >   
                <!-- Row dos cards de exibição dos produtos -->
                <div class = "row">
              
                    <!-- Tamanho do Card -->
                     <?php 
                                	      	
                              while($produtosfabricante = $fabricante->fetch_array()){
                             
                              
                             
                	 ?>
                    <div class = "col-md-3 col-lg-3 col-sm-4 col-12">
                        
                        <!-- Card -->
                        <div class = "card mt-2 shadow">
                            
                            <!-- Imagem do Card -->
                            <img class = "card-img-top img-fluid" src = "<?php echo $produtosfabricante['DS_FOTO_PRODUTO']; ?>">
                            
                            <!-- Corpo do Card -->
                            <div class = "card-body">
                                
                                <!-- Título do Card -->
                                <h5 class = "card-title text-center"> <?php
                                    // Descrição do Produto
                                    $texto = $produtosfabricante['NM_PRODUTO'];
                                    
                                    // Limite de texto do titulo                                    
                                    $limite = 15;
                                    $tamanho = strlen($texto);
                                    
                                    if($tamanho <= $limite){
                                        echo $texto;
                                    }else{
                                        $resumo = trim(substr($texto, 0, $limite))."...";
                                        echo $resumo;
                                    }
                                    ?></h5>
                                
                                <!-- Descrição do Produto -->
                                <p class = "card-text div-card">
                                    <?php
                                    //  limite de Descrição do Produto
                                    echo '<p class="text-center">R$ '.$produtosfabricante['VL_PRODUTO'].'</p>';
                            
                                    ?>
                                </p>
                                <!-- Descrição do produto -->
                                
                                <!-- Botão -->
                                <a href = "<?php echo 'produto.php?cd='.$produtosfabricante['CD_INTERNO'];?>" class = "btn-block btn busca-bg-card">Ver Mais...</a>
                                
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
                 </form> 
            </div>
            <!-- exibição dos resultados da Busca -->
            
        </div>
        <!-- Row principal da página -->
                
            </div>
            <!-- Tamanho -->
            
        </div>
        <!-- Row -->
        
         <!-- Row da paginação -->
        <div class = "row">
                    
            <!-- tamanho -->
            <div class = "col-auto mx-auto pt-2">
                        
                <!-- Paginação -->
                <nav aria-label = "Page navigation example">
  
                    <!-- Botões -->
                    <ul class="pagination busca-a-pagination">
    
                        <li class = "page-item"><a class = "page-link border-radius-pagination-left" href = "#">Anterior</a></li>
                        <li class = "page-item"><a class = "page-link" href="#">1</a></li>
                        <li class = "page-item"><a class = "page-link" href="#">2</a></li>
                        <li class = "page-item"><a class = "page-link" href="#">3</a></li>
                        <li class = "page-item"><a class = "page-link border-radius-pagination-right" href="#">Próximo</a></li>
                            
                    </ul>
                    <!-- Botões -->

                </nav>
                <!-- Paginação -->
                        
            </div>
            <!-- tamanho -->
                    
        </div>
        <!-- Row da paginação -->
        
    </div>
    <!-- Container -->
    
</body>
<!-- Conteúdo -->

<?php include('Footer_teste.php'); ?>