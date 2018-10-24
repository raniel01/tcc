<!DOCTYPE html>
<?php $title = ""; include('header_navbar_teste.php'); ?>

<body>
    
    <!-- Container -->
    <div class = "container-fluid" style = "margin-top: 4.2em;">
        
        <!-- Row Carrossel -->
        <div class = "row">
            
            <!-- Tamanho "Sempre col-12" -->
            <div class = "col-12 p-0 box-shadow-bottom">
                
                <!-- Indicadores -->
                <div id = "carouselExampleIndicators" class = "carousel slide" data-ride = "carousel">

                    <!-- Indicadores de páginas -->
                    <ol class="carousel-indicators">
                        
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    
                    </ol>
                    <!-- Indicadores de páginas -->

                    <!-- Imagens do Carrossel -->
                    <div class="carousel-inner border-none">
                        
                        <!-- Imagem 01 -->
                        <div class = "carousel-item active">
                            
                            <img class = "w-100" src = "imgs/Banner2-1.jpg" alt = "Primeiro slide">
                                
                            <div class = "d-none d-lg-block div-text-slide">
                                    
                                <h1 class = "title-slide">Teste</h1>
                                <p class = "h6 text-slide">Isto é apenas um teste de uma possível coisa que não deveria existir...</p>
                                    
                            </div>
    
                        </div>
                        <!-- Imagem 01 -->
                        
                        <!-- Imagem 02 -->
                        <div class = "carousel-item">
                            
                            <img class = "d-block w-100" src = "imgs/Banner2-2.jpg" alt = "Segundo slide">
                            
                             <div class = "d-none d-lg-block div-text-slide">
                                    
                                <h1 class = "title-slide">Teste</h1>
                                <p class = "h6 text-slide">Isto é apenas um teste de uma possível coisa que não deveria existir...</p>
                                    
                            </div>
        
                        </div>
                        <!-- Imagem 02 -->
                        
                        <!-- Imagem 03 -->
                        <div class = "carousel-item">
                            
                            <img class = "d-block w-100" src = "imgs/Banner2-3.jpg" alt = "Terceiro slide">
                            
                            
                             <div class = "d-none d-lg-block div-text-slide">
                                    
                                <h1 class = "title-slide">Teste</h1>
                                <p class = "h6 text-slide">Isto é apenas um teste de uma possível coisa que não deveria existir...</p>
                                    
                            </div>
        
    
                        </div>
                        <!-- Imagem 03 -->
  
                    </div>
                    <!-- Imagens do Carrossel -->
                    
                    <!-- Controles "Anterior" -->
                    <a class = "carousel-control-prev" href = "#carouselExampleIndicators" role = "button" data-slide = "prev">
    
                        <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
                        <span class = "sr-only">Previous</span>
  
                    </a>
                    <!-- Controles "Anterior" -->

                    <!-- Controles "Próximo" -->
                    <a class = "carousel-control-next" href = "#carouselExampleIndicators" role = "button" data-slide = "next">
    
                        <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
                        <span class = "sr-only">Next</span>
  
                    </a>
                    <!-- Controles "Próximo" -->

                </div>
                <!-- Indicadores -->
                
            </div>
            <!-- Tamanho -->
            
        </div>
        <!-- Row Carrossel -->
        
        <!-- Row Info -->
        <div class = "row py-5">
            
            <!-- Tamanho -->
            <div class = "col-10 offset-1">
                
                <!-- Row Ícones -->
                <div class = "row">
            
                    <!-- Ícone 01 -->
                    <div class = "col-12 col-md-6 col-lg-3 text-center">
                        
                        <!-- Ícone -->
                        <span class = "icon">
                        
                            <i class="fas fa-mobile-alt"></i>
                        
                        </span>
                        
                        <!-- Título -->
                        <p class = "h5 text-center pt-2">Responsivel</p>
                        
                        <!-- Text -->
                        <p class = "pt-2 text-center h6">
                             <?php
                            //texto
                            $descricao = "Site Responsivel em MultiPlataformas Aplicado com PWA";
                             // Descrição do Produto
                                    $texto = $descricao;
                                    
                                    // Limite de texto do titulo                                    
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
                        
                    </div>
                    <!-- Ícone 01 -->
                    
                    <!-- Ícone 02 -->
                    <div class = "col-12 col-md-6 col-lg-3 text-center">
                        
                        <!-- Ícone -->
                        <span class = "icon">
                        
                            <i class="fas fa-list-alt"></i>
                        
                        </span>
                        
                        <!-- Título -->
                        <p class = "h5 text-center pt-2">Lista</p>
                        
                        <!-- Text -->
                        <p class = "pt-2 text-center h6">
                             <?php
                            //texto
                            $descricao = "Crie suas listas para não esquecer das suas compas. Facilite sua vida";
                             // Descrição do Produto
                                    $texto = $descricao;
                                    
                                    // Limite de texto do titulo                                    
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
                        
                    </div>
                    <!-- Ícone 02 -->
                    
                    <!-- Ícone 03 -->
                    <div class = "col-12 col-md-6 col-lg-3 text-center">
                        
                        <!-- Ícone -->
                        <span class = "icon">
                        
                            <i class = "far fa-clock"></i>
                        
                        </span>
                        
                        <!-- Título -->
                        <p class = "h5 text-center pt-2">Tempo</p>
                        
                        <!-- Text -->
                        <p class = "pt-2 text-center h6">
                              <?php
                            //texto
                            $descricao = "Economize tempo realizando suas compras em Mercados Online. ";
                             // Descrição do Produto
                                    $texto = $descricao;
                                    
                                    // Limite de texto do titulo                                    
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
                        
                    </div>
                    <!-- ícone 03 -->
                    
                    <!-- Ícone 04 -->
                    <div class = "col-12 col-md-6 col-lg-3 text-center">
                        
                        <!-- Ícone -->
                        <span class = "icon">
                        
                           <i class="fas fa-truck"></i>
                        
                        </span>
                        
                        <!-- Título -->
                        <p class = "h5 text-center pt-2">Entrega</p>
                        
                        <!-- Text -->
                        <p class = "pt-2 text-center h6">
                            <?php
                            //texto
                            $descricao = "Entregas direto em sua casa, chega de carregar peso!";
                             // Descrição do Produto
                                    $texto = $descricao;
                                    
                                    // Limite de texto do titulo                                    
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
                        
                    </div>
                    <!-- Ícone 04 -->
                    
                </div>
                <!-- Row Ícones -->
                
            </div>
            <!-- Tamanho -->
            
        </div>
        <!-- Row Info -->
        
        <!-- Row Título -->
        <div class = "row bg-gradient box-shadow-top">
            
            <!-- Tamanho "col-12 para todas as telas" -->
            <div class = "col-12 py-3">
                
                <!-- Título -->
                <h3 class = "text-center d-none d-md-block text-white">Principais Categorias</h3>
                
                <!-- Título "Telas pequenas" -->
                <h5 class = "text-center d-md-none text-white">Principais Categorias</h5>
                
            </div>
            <!-- Tamanho "col-12 para todas as telas" -->
            
        </div>
        <!-- Row Título -->
        
        <!-- Row Categorias Principais -->
        <div class = "row py-4 px-lg-5 bg-gradient box-shadow-bottom">
            
            <!-- Categoria 01 -->
            <div class = "col-6 col-md-6 col-lg-3 mt-0">
                
                <!-- imagem -->
                <a href = "produtoscategoria.php?p=1">
                <img src = "imgs/vetor_alimentos.jpg" class = "mx-auto d-block rounded-circle col-9 col-md-6 col-lg-6">
                </a>
                <!-- texto "telas grandes" -->
                <h4 class = "text-center d-none d-md-block pt-1 text-white">Alimentos</h4>
                
                <!-- Texto "Telas pequenas" -->
                <h5 class = "text-center d-md-none pt-1 text-white">Alimentos</h5>
                
            </div>
            <!-- categoria 01 -->
            
            <!-- Categoria 02 -->
            <div class = "col-6 col-md-6 col-lg-3 mt-0">
                
                <!-- imagem -->
                <a href = "produtoscategoria.php?p=14">
                <img src = "imgs/vetor_bebidas.jpg" class = "mx-auto d-block rounded-circle col-9 col-md-6 col-lg-6">
                </a>
                <!-- texto "telas grandes" -->
                <h4 class = "text-center d-none d-md-block pt-1 text-white">Bebidas</h4>
                
                <!-- Texto "Telas pequenas" -->
                <h5 class = "text-center d-md-none pt-1 text-white">Bebidas</h5>
                
            </div>
            <!-- categoria 02 -->
            
            <!-- Categoria 03 -->
            <div class = "col-6 col-md-6 col-lg-3  mt-3 mt-lg-0">
                
                <!-- imagem -->
                <a href = "produtoscategoria.php?p=7">
                <img src = "imgs/vetor_carnes.jpg" class = "mx-auto d-block rounded-circle col-9 col-md-6 col-lg-6">
                 </a>
                <!-- texto "telas grandes" -->
                <h4 class = "text-center d-none d-md-block pt-1 text-white">Carnes</h4>
                
                <!-- Texto "Telas pequenas" -->
                <h5 class = "text-center d-md-none pt-1 text-white">Carnes</h5>
                
            </div>
            <!-- categoria 03 -->
            
            <!-- Categoria 04 -->
            <div class = "col-6 col-md-6 col-lg-3  mt-3 mt-lg-0">
                
                <!-- imagem -->
                <a href = "produtoscategoria.php?p=4">
                <img src = "imgs/vetor_limpeza.jpg" class = "mx-auto d-block rounded-circle col-9 col-md-6 col-lg-6">
                </a>
                <!-- texto "telas grandes" -->
                <h4 class = "text-center d-none d-md-block pt-1 text-white">Limpeza</h4>
                
                <!-- Texto "Telas pequenas" -->
                <h5 class = "text-center d-md-none pt-1 text-white">Limpeza</h5>
                
            </div>
            <!-- categoria 04 -->
            
        </div>
        <!-- Row Categorias Principais -->
        
        <!-- Row Título -->
        <div class = "row">
            
            <!-- Tamanho "col-12 para todas as telas" -->
            <div class = "col-12 py-3">
                
                <!-- Título -->
                <h3 class = "text-center d-none d-md-block pt-2">Outras Categorias</h3>
                
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
                    <a href = "produtoscategoria.php?p=2" class = "form-control text-center hover-orange">Cuidados para seu bebê</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
            <!-- Tamanho -->
            <div class = "col-12 col-md-6">
                
                <div class = "form-group"> 
                    
                    <!-- Link -->
                    <a href = "produtoscategoria.php?p=12" class = "form-control text-center hover-orange">Frios</a>
                    
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
                    <a href = "produtoscategoria.php?p=16" class = "form-control text-center hover-orange">Farinhas e grãos</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
            <!-- Tamanho -->
            <div class = "col-12 col-md-6">
                
                <div class = "form-group"> 
                    
                    <!-- Link -->
                    <a href = "produtoscategoria.php?p=8" class = "form-control text-center hover-orange">Hortifruti</a>
                    
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
                    <a href = "produtoscategoria.php?p=17" class = "form-control text-center hover-orange">Sobremesas</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
            <!-- Tamanho -->
            <div class = "col-12 col-md-6">
                
                <div class = "form-group"> 
                    
                    <!-- Link -->
                    <a href = "produtoscategoria.php?p=10" class = "form-control text-center hover-orange">Higiene</a>
                    
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
                    <a href = "produtoscategoria.php?p=14" class = "form-control text-center hover-orange">Bebidas Alcoólicas</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
            <!-- Tamanho -->
            <div class = "col-12 col-md-6">
                
                <div class = "form-group"> 
                    
                    <!-- Link -->
                    <a href = "produtoscategoria.php?p=4" class = "form-control text-center hover-orange">Limpeza</a>
                    
                </div>
                
            </div>
            <!-- Tamanho -->
            
        </div>
        <!-- Row 04 Categorias -->
        
        <!-- Row Título -->
        <div class = "row">
        
            <div class = "col-8 offset-2 pt-4 pb-3">
					 
			    <h3 class = "text-center d-none d-lg-block text-center">As Maiores Fabricantes Estão Aqui!</h3>
			    
			    <h5 class = "d-lg-none text-center">As Maiores Fabricantes Estão Aqui!</h5>
				
		    </div>
		
		</div>
		<!-- Row Título -->	
		
		<!-- Fabricantes "Código do João... Campo Minado" -->
		<div class="container">
				            <div class="row">
				            	
				                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				                    <div class="showcase-block">
				                        <div class="display-logo ">
				                            <a href="#"> <img src="imgs/Qualitá.png" class="img-fluid" alt=""></a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="#"> <img src="imgs/qualitaproducts.png" class="img-fluid" alt=""></a>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				                    <div class="showcase-block">
				                        <div class="display-logo">
				                            <a href="produtosfabricante.php?f=46"><img src="imgs/peg.png" class="img-fluid" alt=""></a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="produtosfabricante.php?f=46"> <img src="imgs/pegprodutos.png" class="img-fluid" alt=""></a>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				                    <div class="showcase-block ">
				                        <div class="display-logo ">
				                            <a href="produtosfabricante.php?f=24"> <img src="imgs/nestle.png" class="img-fluid" alt="">
				                            </a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="produtosfabricante.php?f=24"><img src="imgs/nestleproduts.png" class="img-fluid" alt=""></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <div class="row">
				                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				                    <div class="showcase-block">
				                        <div class="display-logo ">
				                            <a href="produtosfabricante.php?f=21"><img src="imgs/Johnson.png" class="img-fluid" alt=""></a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="produtosfabricante.php?f=21"><img src="imgs/jhonsonproduts.png" class="img-fluid" alt=""></a>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				                    <div class="showcase-block">
				                        <div class="display-logo">
				                            <a href="produtosfabricante.php?f=56">  <img src="imgs/Danone.png" class="img-fluid" alt=""></a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="produtosfabricante.php?f=56"> <img src="imgs/Danoneprodutos.png" class="img-fluid" alt="">
				                            </a>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				                    <div class="showcase-block">
				                        <div class="display-logo ">
				                            <a href="produtosfabricante.php?f=59"><img src="imgs/sadialogo.png" class="img-fluid" alt=""></a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="produtosfabricante.php?f=59">    <img src="imgs/sadia.png" class="img-fluid" alt=""></a>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				                    <div class="showcase-block">
				                        <div class="display-logo ">
				                            <a href="produtosfabricante.php?f=54">  <img src="imgs/seara.png" class="img-fluid" alt=""></a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="produtosfabricante.php?f=54"><img src="imgs/searaprodutos.png" class="img-fluid" alt=""></a>
				                        </div>
				                    </div>
				                </div>
				              </div>
				              
				    </div>
		<!-- Fabricantes -->
		
		<!-- Row Imagens -->
		<div class = "d-none d-lg-block">
		    
    		<div class = "row align-items-center bg-light h-40">
    		    
    		    <!-- Tamanho -->
    		    <div class = "col-6 px-0">
    		        
    		        <!-- Div -->
    		        <div class = "py-5 padding-left-15">
    		            
    		            <h1 class = "text-dark">Título</h3>
    		            <p class = "text-dark">Texto simples para exemplificar o conteúdo presente nesta div.</p>
    		            
    		        </div>
    		        <!-- Div -->
    		        
    		    </div>
    		    <!-- Tamanho -->
    		    
    		    <!-- Tamanho -->
    		    <div class = "col-6 p-0">
    		        
    		        <div class = "bg-success img-background-1"></div>
    		        
    		    </div>
    		    <!-- Tamanho -->
    		    
    		</div>
    		
    	</div>
		<!-- Row Imagens -->
		
		<!-- Row Imagens -->
		<div class = "d-none d-lg-block">
		    
    		<div class = "row align-items-center bg-dark box-shadow-large-top h-40 bg-gradient-top-black">
    		    
    		    
    		    <!-- Tamanho -->
    		    <div class = "col-6 p-0">
    		        
    		        <div class = "bg-success img-background-2"></div>
    		        
    		    </div>
    		    <!-- Tamanho -->
    		    
    		    <!-- Tamanho -->
    		    <div class = "col-6 px-0">
    		        
    		        <!-- Div -->
    		        <div class = "py-5 padding-left-20">
    		            
    		            <h1 class = "text-white">Título</h3>
    		            <p class = "text-white">Texto simples para exemplificar o conteúdo presente nesta div.</p>
    		            
    		        </div>
    		        <!-- Div -->
    		        
    		    </div>
    		    <!-- Tamanho -->
    		    
    		</div>
    		
    	</div>
		<!-- Row Imagens -->
		
    </div>
    <!-- Container -->
    
</body>

<?php include('Footer_teste.php'); ?>