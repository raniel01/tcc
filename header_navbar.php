<?php
   //verificando se o usuario fez uma busca
   include('conexao.php');
   session_start();
   Sair();
   	if (isset($_REQUEST['busca'])) {
   		$busca=$_GET['busca'];
   		BuscaProduto($busca);
   		echo '<script> window.location="busca.php?busca="'.$busca.'"";</script>';
   	}
   	
   	if (isset($_POST['nome'])) {
   		 
   		 if($_POST['sexo'] == "M"){
   			$foto = "imgs/imgp/homem.png";
   			
   		}else {
   			$foto = "imgs/imgp/mulher.png";
   			}
   	CadastrarUsuario($_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['sexo'],"", $_POST['nascimento'],"","","","","","","", $_POST['cel'],"","$foto",0,"", md5($_POST['senha']));
      }
      if(isset($SESSION['id'])){
         $s = $SESSION['id'];
      }
   ?>
<html lang = "pt-br">
   <head>
      <!-- Links -->
      <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
      <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
      <?php echo "<title>Meu Carrinho | Aqui sua compra fica mais facil!".$title."</title>";?>
      <!-- imgs carrousel wrapper :250x200 -->
      <!-- Required meta tags -->
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--css-->
      <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script type = "text/javascript" src = "https://raw.githubusercontent.com/frexy/svg-icon-webcomponent/master/build/iconwc.js"></script>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
      <!--css off-->
      <link rel="manifest" href="manifest.json">
      <link rel = "stylesheet" type = "text/css" href = "css/style.css">
      
      <style>
         @media only screen and (max-width: 425px){

            .foto-perfil{
               height: 40px;
               width: 40px;
            }
         
         }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            padding: 0px;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        .dropdown-content a:hover {background-color: #f1f1f1}
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .foto-perfil{
            height: 40px;
            width: 40px;
            object-fit: cover;
            border-radius: 50%;
        }
        .dropdown{
           float: left;
        }
        @media only screen and (max-width: 992px){
           
        }
      </style>
      
   </head>
   <header class = "header">
      <!--nav-->
      <nav class = "navbar navbar-expand-lg bg-dark navbar-dark rounded-0 navbar-transparent">
         <div class="container">
         <!-- Brand/logo -->
            <!-- <div class="dropdown">
                 <button class="btn btn-danger dropdown-toggle drop" type="button" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                 <div class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton">
                   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <a class="dropdown-item" href="#">Something else here</a>
                 </div>
               </div> -->
            <div class="dropdown" data-sessao="<?php
               $foto = (isset($_SESSION['foto']));
               echo $foto; ?>">
               <a class = "navbar-brand" href = "#">
               <img src = "<?php
               $foto = (isset($_SESSION['foto'])) ? $_SESSION['foto'] : "imgs/logo1.png";
               echo $foto;
               ?>" id="imagem" class="foto-perfil" alt="logo">
               </a>
               <div id="nada" class="dropdown-content d-none d-lg-none d-md-none">
                   <a href="perfil.php">Perfil</a>
                   <a href="carrinho.php">Carrinho <div class="contador"></div></a>
                   <a href="?Sair">Sair</a>
               </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="#navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class = "collapse navbar-collapse" id = "navbarsExample07">
               <ul class = "navbar-nav mr-auto">
                  <li class = "nav-item">
                     <a class = "nav-link text-white" href = "index.php">Home</a>
                  </li>
                  <li class = "nav-item">
                     <a class = "nav-link text-white" href = "categoria.php">Categorias</a>
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
               <form class = "form-inline my-0 my-md-0" action="busca.php"  method="get" >
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