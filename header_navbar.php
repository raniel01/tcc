<?php
//verificando se o usuario fez uma busca
include('conexao.php');
	if (isset($_REQUEST['busca'])) {
		$busca=$_GET['busca'];
		BuscaProduto($busca);
		echo '<script> window.location="busca.php?busca="'.$busca.'"";</script>';
	}
	if (isset($_POST['nome'])) {
   
	CadastrarUsuario($_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['sexo'],"", $_POST['nascimento'],"","","","","","","", $_POST['cel'],"","",0,"", md5($_POST['senha']));
         
   
}
?>
<html lang = "pt-br">
<head>
	<!-- Links -->
	<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
	<link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
	<title>Meu Carrinho | Aqui sua compra fica mais facil!</title>
	<!-- imgs carrousel wrapper :250x200 -->
	
	<!-- Required meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--css-->
    
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type = "text/javascript" src = "https://raw.githubusercontent.com/frexy/svg-icon-webcomponent/master/build/iconwc.js"></script>
    
    <!--css off-->
    <link rel="manifest" href="manifest.json">
    <link rel = "stylesheet" type = "text/css" href = "css/style.css">
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

	<header class = "header">
		<!--nav-->
		<nav class = "navbar navbar-expand-sm bg-dark navbar-dark rounded-0 ">
			
			  <!-- Brand/logo -->
		      <div class = "container">
		      	
		      	<a class = "navbar-brand" href = "#"><img src = "imgs/logo1.png" class = "rounded" alt = "logo" style = "width:50px;"></a>
		      	
		        <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarsExample07" aria-controls = "navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
		          
		        	<span class = "navbar-toggler-icon"></span>
		        
		        </button>
		
		        <div class = "collapse navbar-collapse" id = "navbarsExample07">
		        	
		        	<ul class = "navbar-nav mr-auto">
		        		
			            <li class = "nav-item">
			              
			            	<a class = "nav-link text-white" href = "index.php">Home</a>
			            
			            </li>
			            
			            <li class = "nav-item">
			            	
			            	<a class = "nav-link text-white" href = "busca.php">Produtos</a>
			            
			            </li>
			            
			            <li class = "nav-item">
			            
			            	<a class = "nav-link text-white" href = "quem_somos.php">Quem Somos</a>
			            
			            </li>
			            
			            <li class = "nav-item">
			            	
			            	<a class = "nav-link text-white" href = "cadastro.php">Cadastro</a>
			            
			            </li>
			            
			            <li class = "nav-item">
			            	
			            	<a class = "nav-link text-white" href = "login.php">Login</a>
			            
			            </li>
		          
		          </ul>
		          
		          <form class = "form-inline my-0 my-md-0 d-none d-md-block" action="busca.php"  method="get" >
		          	
        			<div class = "input-group">
        				
          			  <input type = "text" class = "form-control" name="busca" placeholder = "Pesquisar">
          			  
          				<div class = "input-group-append">
          					
            			  <button class = "btn btn-success" type = "submit" id = "button-addon2">Busca</button>
            			  
          				</div>
          				
        			</div>
        			
		          </form>
		          
		        </div>
		      
			</div>
		    
		</nav>
	</header>
