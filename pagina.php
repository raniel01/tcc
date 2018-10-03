<html>
<head>
	<title>Meu Carrinho | Aqui sua compra fica mais facil!</title>
	<!-- imgs carrousel wrapper :250x200 -->
		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!--css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="https://raw.githubusercontent.com/frexy/svg-icon-webcomponent/master/build/iconwc.js"></script>
    	<!--css off-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style>
		.fundo a{
			color:white;
		}
		.fundo a:hover{
			color:#c11a26;
		}
		.footer-texto{
			color:#c11a26;
			
		}
		footer{ 
			 text-align: center;
			 color:white;
			 margin-bottom: 50px;
			 text-transform: uppercase;
		}
		.footer{
			background:#ff7400; !important;
		}
		 body{
            background-color:white;
        }
        .texto{
        	color:#ed3136;
        }
        nav{
        	border-radius:5px;
        }
        .active{
        	background-color:#ed3136;
        	
        }
        .slide{
        	margin-top:-0px;
        	z-index:1;
        }
        .navbar{
        	z-index:9999;
        	position:0;
        }
        .conteudo{
        	padding-top:50px;
        }
	</style>
</head> 
<body>
	<div class="container-fluid">
		<!--index-->
		<!--nav-->
		<nav class="navbar navbar-expand-sm fixed-top bg-light navbar-light">
			  <!-- Brand/logo -->
		      <div class="container">
		        <a class="navbar-brand" href="#"><img src="logo.png" class='rounded' alt="logo" style="width:50px;"></a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>
		
		        <div class="collapse navbar-collapse" id="navbarsExample07">
		          <ul class="navbar-nav mr-auto">
		            <li class="nav-item">
		              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link" href="#">Produtos</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link" href="#">Quem Somos</a>
		            </li>
		             <li class="nav-item">
		              <a class="nav-link" href="cadastro.php">Cadastro</a>
		            </li>
		             <li class="nav-item">
		              <a class="nav-link" href="login.php">Login</a>
		            </li>
		          </ul>
		          <form class="form-inline my-0 my-md-0">
		            <input class="form-control" type="text" placeholder="Busca" aria-label="Search">
		            <button class="btn btn-outline-success" type="submit">Busca</button>
		          </form>
		        </div>
		      </div>
		    </nav>
		
				
		<!-- Tirando carrossel -->
	            
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
					      <img class="d-block w-100" src="imgs/Carrossel1-2.jpg" alt="Primeiro slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="imgs/Carrossel2-2.jpg" alt="Segundo slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="imgs/Carrossel2-3.jpg" alt="Terceiro slide">
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
		
				
		<div class="jumbotron conteudo">
			<div class="row col-md-12">	
				<div class="col-md-3">
			
					<nav class="nav navbar-light bg-light collapse flex-column navbar-toggleable-md  rounded text-center border border-danger" id="lateral">
		                <ul class="navbar-nav">
		                	<li class="nav-item">
		                		<a class="nav-link active text-center alert-danger"  data-toggle="collapse" data-target="#demo" href="#"><b>Todas As Categorias</b></a>
		                	</li>
		                	<div id="demo" class="collapse">
			                	<li class="nav-item">
			                		<a class="nav-link" href="buscador_produto_xml.php?cat=Perecivel">Perecível</a>
			                	</li>
			                	<li class="nav-item">
			                		<a class="nav-link" href="buscador_produto_xml.php?cat=#">Não Perecível</a>
			                	</li>
			                	<li class="nav-item">
			                		<a class="nav-link" href="buscador_produto_xml.php?cat=Frutas">Frutas</a>
			                	</li>
			                	<li class="nav-item">
			                		<a class="nav-link" href="buscador_produto_xml.php?cat=Verduras">Verduras</a>
			                	</li>
			                	<li class="nav-item">
			                		<a class="nav-link" href="buscador_produto_xml.php?cat=Limpeza">Limpeza</a>
			                	</li>
			                	<li class="nav-item">
			                		<a class="nav-link" href="buscador_produto_xml.php?cat=Acougue">Açougue</a>
			                	</li>
			                	<li class="nav-item">
			                		<a class="nav-link" href="buscador_produto_xml.php?cat=Mercearia">Mercearia</a>
			                	</li>
			                	<li class="nav-item">
			                		<a class="nav-link" href="buscador_produto_xml.php?cat=Bebidas">Bebidas</a>
			                	</li>
			                </div>
		                </ul>
	            	</nav>
	            
	            </div>
</body>
	      