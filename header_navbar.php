<?php
   //verificando se o usuario fez uma busca
   include('conexao.php');
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
         .foto-perfil{
         object-fit: cover;
         border-radius: 50%;
         }
         .foto-perfil{
               width: 50px;
               height: 50px;
         }
         @media only screen and (max-width: 425px){

            .foto-perfil{
               height: 40px;
               width: 40px;
            }
         
         }
         .dropy-cont{
            display: none;
             position: ;
             right: 0;
             width: 100px;
             height: 100px;
             top: 100px;
             background-color: #f9f9f9;
             min-width: 160px;
             box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
             z-index: 1111;
         }
         .dropy:hover .drop-cont{
            display: block;
         }
         
      </style>
      
   </head>
   <header class = "header">
      <!--nav-->
      <nav class = "navbar navbar-expand-lg bg-dark navbar-dark rounded-0 navbar-transparent">
         <!-- Brand/logo -->
         <div class = "container">
            
            <!-- <div class="dropdown">
                 <button class="btn btn-danger dropdown-toggle drop" type="button" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                 <div class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton">
                   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <a class="dropdown-item" href="#">Something else here</a>
                 </div>
               </div> -->

            <a class = "navbar-brand " href = "#"><img class="foto-perfil dropy" id="imagem" src = "<?php
            $foto = (isset($_SESSION['foto'])) ? $_SESSION['foto'] : "imgs/logo1.png";
            echo $foto;
            ?>" alt = "logo">
            
               <div class = "dropy-cont">
                  <a href="">Teste</a>
                  <a href="">Teste</a>
                  <a href="">Teste</a>
                  <a href="">Teste</a>
               </div>
            
            </a>
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