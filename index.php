<!DOCTYPE html>
<?php include('header_navbar.php'); ?>
<body>
	<div class="container-fluid">
			<!-- Tirando carrossel-->
		<div class="container-fluid">
	            
				<div class="col-md-12 slide  rounded text-center">
					<!--carrosel-->
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <!--imagens do carrosel-->
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="imgs/Banner2-1.jpg" alt="Primeiro slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="imgs/Banner2-2.jpg" alt="Segundo slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="imgs/Banner2-3.jpg" alt="Terceiro slide">
					    </div>
					  </div>
					  <!--indicadores do carrosel-->
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
		</div>
	
		<!--index
		<div class="span8 text-center">
			<h1 class='texto'><b>Meu Carrinho.com</b></h1>
			<p><b>Aqui sua compra fica mais facil!</b></p>
		</div>
		<!--nav
		<nav class="navbar navbar-expand-md bg-dark justify-content-center navbar-dark">
				  <ul class="navbar-nav">
				   <li class="nav-item active">
				      <a class="nav-link" href="index.html">Home</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#">Produtos</a>
				    </li>
				     <li class="nav-item">
				      <a class="nav-link" href="#">Quem Somos</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#">Contato</a>
				    </li>
				     <li class="nav-item">
				      <a class="nav-link" href="cadastro.php">Cadastrar</a>
				    </li>
				     <li class="nav-item">
				      <a class="nav-link" href="?">Login</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#"><img src="svg/si-glyph-magnifier.svg" class="glyphicon img-circle"></a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#"><img src="svg/si-glyph-trolley-plus.svg" class="glyphicon img-circle"></a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#"><img src="svg/si-glyph-pin-location.svg" class="glyphicon img-circle"></a>
				    </li>
				     <li class="nav-item">
				      <a class="nav-link" href="#"><img src="svg/si-glyph-person-2.svg" class="glyphicon img-circle"></a>
				    </li>
				  </ul>
		</nav>
		<div class="jumbotron">
			<div class="row">	
				<div class="col-md-4">
			
					<nav class="nav navbar-light bg-light collapse flex-column navbar-toggleable-md" id="lateral">
		                <ul class="navbar-nav">
		                	<li class="nav-item">
		                		<a class="nav-link" href="#">Todas As Categorias</a>
		                	</li>
		                	<li class="nav-item">
		                		<a class="nav-link" href=buscador_produto_xml.php?cat=Perecivel>Perecível</a>
		                	</li>
		                	<li class="nav-item">
		                		<a class="nav-link" href="#">Não Perecível</a>
		                	</li>
		                	<li class="nav-item">
		                		<a class="nav-link" href=buscador_produto_xml.php?cat=Frutas>Frutas</a>
		                	</li>
		                	<li class="nav-item">
		                		<a class="nav-link" href="#">Verduras</a>
		                	</li>
		                	<li class="nav-item">
		                		<a class="nav-link" href=buscador_produto_xml.php?cat=Limpeza>Limpeza</a>
		                	</li>
		                	<li class="nav-item">
		                		<a class="nav-link" href=buscador_produto_xml.php?cat=Acougue>Açougue</a>
		                	</li>
		                	<li class="nav-item">
		                		<a class="nav-link" href=buscador_produto_xml.php?cat=Mercearia>Mercearia</a>
		                	</li>
		                	<li class="nav-item">
		                		<a class="nav-link" href=buscador_produto_xml.php?cat=Bebidas>Bebidas</a>
		                	</li>
		                </ul>
	            	</nav>
	            
	            </div>
	            <!--
				<div class="col-md-8 text-center">
					<!--carrosel
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <!--imagens do carrosel
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="imgs/especialcarrinho.jpg" alt="Primeiro slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="imgs/especialfrutas.jpg" alt="Segundo slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="imgs/especialoferta.jpg" alt="Terceiro slide">
					    </div>
					  </div>
					  <!--indicadores do carrosel
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
				-->
				<!--categorias-->
				<div class="col-12">
					<h2 class="texto"><b>Categorias</b></h2>
				</div>
				<!--imagens das categorias-->
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
							<a href="buscador_produto_xml.php?cat=Mercearia"><img  class ="img-thumbnail" src="imgs/cat1.jpg" alt=""></a>
						</div>
						<div class="col-md-4">
							<a href="buscador_produto_xml.php?cat=Limpeza"><img  class ="img-thumbnail" src="imgs/cat2.jpg" alt=""></a>
						</div>
						<div class="col-md-4">
							<a href="buscador_produto_xml.php?cat=Frutas"><img  class ="img-thumbnail" src="imgs/cat3.jpg" alt=""></a>
						</div>
						<div class="col-12">&nbsp;</div>
						<div class="col-md-4">
							<a href="buscador_produto_xml.php?cat=Bebidas"><img  class ="img-thumbnail" src="imgs/cat4.jpg" alt=""></a>
						</div>
						<div class="col-md-4">
							<a href="buscador_produto_xml.php?cat=Perecivel"><img  class ="img-thumbnail" src="imgs/cat5.jpg" alt=""></a>
						</div>
						<div class="col-md-4">
							<a href="buscador_produto_xml.php?cat=Limpeza"><img  class ="img-thumbnail" src="imgs/cat2.jpg" alt=""></a>
						</div>
					</div>
					<p class="text-center">Categorias dos Produtos</p>
				</div>
			</div>
					<div class="col-md-8 offset-2 d-none d-md-block">
						<h2 class="texto">Ofertas</h2>
						<br>
						<img  class="rounded img-thumbnail" src="imgs/banner2.jpg" style="height:50%; width:100%;"></img>
			
					</div>
				<br><br>
				<div class="col-md-8 offset-2">
					 <h2 class="texto">As Maiores Marcas Estão Aqui!</h2>
				</div>
			
				<!-- mobile showcase -->
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
				                            <a href="#"><img src="imgs/peg.png" class="img-fluid" alt=""></a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="#"> <img src="imgs/pegprodutos.png" class="img-fluid" alt=""></a>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				                    <div class="showcase-block ">
				                        <div class="display-logo ">
				                            <a href="#"> <img src="imgs/nestle.png" class="img-fluid" alt="">
				                            </a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="#"><img src="imgs/nestleproduts.png" class="img-fluid" alt=""></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <div class="row">
				                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				                    <div class="showcase-block">
				                        <div class="display-logo ">
				                            <a href="#"><img src="imgs/Johnson.png" class="img-fluid" alt=""></a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="#"><img src="imgs/jhonsonproduts.png" class="img-fluid" alt=""></a>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				                    <div class="showcase-block">
				                        <div class="display-logo">
				                            <a href="#">  <img src="imgs/Danone.png" class="img-fluid" alt=""></a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="#"> <img src="imgs/Danoneprodutos.png" class="img-fluid" alt="">
				                            </a>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				                    <div class="showcase-block">
				                        <div class="display-logo ">
				                            <a href="#"><img src="imgs/dia.png" class="img-fluid" alt=""></a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="#">    <img src="imgs/diaprodutos.png" class="img-fluid" alt=""></a>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				                    <div class="showcase-block">
				                        <div class="display-logo ">
				                            <a href="#">  <img src="imgs/seara.png" class="img-fluid" alt=""></a>
				                        </div>
				                        <div class="showcase-img">
				                            <a href="#"><img src="imgs/searaprodutos.png" class="img-fluid" alt=""></a>
				                        </div>
				                    </div>
				                </div>
				              </div>
				    </div>
				    <div class="col-md-8 offset-2">
					<br>
				    <?php include('Footer_teste.php')?>
    <!-- /.mobile showcase -->
		<!--	
        </div>
        <div class="container-fluid">
		<div class="row">
		<div class="col-md-10 col-center m-auto">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="imgs/produto1.jpg" class="img-thumbnail" style="width:100%">
								</div>
								<div class="thumb-content">
									<h4>Arroz Branco Camil</h4>
									<p>Arroz Agulhinha Tipo 1 CAMIL Pacote 5kg</p>
									<h4><b class="preco">R$ 13,49</b></h4>
									<a href="#" class="btn btn-primary">Veja Mais<i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="imgs/produto2.jpg" class="img-thumbnail" style="width:100%">
								</div>
								<div class="thumb-content">
									<h4>Feijão Qualitá</h4>
									<p>Feijão Carioca Tipo 1 QUALITÁ Pacote 1kg</p>
									<h4><b class="preco">R$ 3,49</b></h4>
									<a href="#" class="btn btn-primary">Veja Mais<i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>				
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="imgs/produto3.jpg" class="img-thumbnail" style="width:100%">
								</div>
								<div class="thumb-content">
									<h4>Macarrão Galo</h4>
									<p>Macarrão de Sêmola Parafuso GALO 500g</p>
									<h4><b class="preco">R$ 1,45</b></h4>
									<a href="#" class="btn btn-primary">Veja Mais <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>					
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="imgs/produto4.jpg" class="img-thumbnail" style="width:100%">
								</div>
								<div class="thumb-content">
									<h4>Alcatra</h4>
									<p>CARNE Alcatra  1kg</p>
									<h4><b class="preco">R$ 24,99</b></h4>
									<a href="#" class="btn btn-primary">Veja Mais<i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="imgs/produto5.jpg" class="img-thumbnail" style="width:100%">
								</div>
								<div class="thumb-content">
									<h4>Contra-Filé</h4>
									<p>Contra Filé Em Bifes 1kg</p>
									<h4><b class="preco">R$ 24,99</b></h4>
									<a href="#" class="btn btn-primary">Veja Mais<i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="imgs/produto6.jpg" class="img-thumbnail" style="width:100%">
								</div>
								<div class="thumb-content">
									<h4>Picanha</h4>
									<p>Picanha Em Bifes 1kg</p>
									<h4><b class="preco">R$ 24,99</b></h4>
									<a href="#" class="btn btn-primary">Veja Mais<i class="fa fa-angle-right"></i></a>
								</div>						
							</div>					
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="imgs/produto10.jpg" class="img-thumbnail" style="width:100%">
								</div>
								<div class="thumb-content">
									<h4>Veja Multiuso</h4>
									<p>Limpador Multiuso 500ml</p>
									<h4><b class="preco">R$ 4,99</b></h4>
									<a href="#" class="btn btn-primary">Veja Mais<i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="imgs/produto11.jpg" class="img-thumbnail" style="width:100%">
								</div>
								<div class="thumb-content">
									<h4>Sabão Em Pó Omo</h4>
									<p>Sabão em Pó Multiação  2kg 1 UN</p>
									<h4><b class="preco">R$ 21,00</b></h4>
									<a href="#" class="btn btn-primary">Veja Mais <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="imgs/produto12.jpg" class="img-thumbnail" style="width:100%">
								</div>
								<div class="thumb-content">
									<h4>Desinf. Pinho Bril</h4>
									<p>Desinfetante Plus 500ml  Original</p>
									<h4><b class="preco">R$ 3,00</b></h4>
									<a href="#" class="btn btn-primary">Veja Mais <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls
			<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
		 for carousel items -->
	</div>
</div>

	</div>
</body>
</html>