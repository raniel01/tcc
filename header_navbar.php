<?php
      //verificando se o usuario fez uma busca
      include('conexao.php');
      //Ativando a Sessao
      session_start();
      //Função Para Destruir a Sessao
      Sair();
      //Pagina Busca
   	if (isset($_REQUEST['busca'])) {
   		$busca=$_GET['busca'];
   		BuscaProduto($busca);
   		echo '<script> window.location="busca.php?busca="'.$busca.'"";</script>';
   	}
   	//Pagina Carrinho
   	else if(isset($_REQUEST['atualizar'])){
         AtualizarCarrinho($_REQUEST['quantidade'],$_SESSION['id'],$_REQUEST['id']);
      }
      //Pagina Carrinho
      else if(isset($_REQUEST['remover'])){
         ExcluirCarrinho($_REQUEST['id']);
      }
      //Pagina Cadastro
   	if (isset($_POST['termo'])) {
   		 
   		 if($_POST['sexo'] == "M"){
   			$foto = "imgs/imgp/homem.png";
   			
   		}else {
   			$foto = "imgs/imgp/mulher.png";
   			}
   	CadastrarUsuario($_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['sexo'],"", $_POST['nascimento'],"","","","","","","", $_POST['cel'],"","$foto",0,"", md5($_POST['senha']));
      }
      //Capturando Session
      if(isset($_SESSION['id'])){
         $s = $_SESSION['id'];
      }
?>
<!DOCTYPE html>
<html lang = "pt-br">
   <head>
      <!-- Links -->
      <link rel="shortcut icon" href="imgs/logo1.png" type="image/x-icon">
      <link rel="icon" href="imgs/logo1.png" type="image/x-icon">
      <?php 
     
      echo "<title>Meu Carrinho |".$title."</title>";
      ?>
      <!-- imgs carrousel wrapper :250x200 -->
      <!-- Required meta tags -->
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="application-name" content="MeuCarrinho">
      <meta name="theme-color" content="#ff7400"/>
      <meta name="Description" content="As Melhores Compras Online No Litoral">
      <!--css-->
      <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        
        .not{
           position: relative;
           top: 10px;
           left: -30px;
        }
        
      </style>
   </head>
   <header class = "header">
      <!--nav-->
      <nav class = "navbar navbar-expand-lg bg-dark navbar-dark rounded-0 navbar-transparent">
         <div class="container">
            <div class="dropdown" data-sessao="<?php $foto = (isset($_SESSION['foto'])); echo $foto; ?>" data-test="<?php echo $s; ?>">
               <a class = "navbar-brand" href = "#" rel="noopener">
               <img src = "<?php
               $foto = (isset($_SESSION['foto'])) ? $_SESSION['foto'] : "imgs/logo1.png";
               echo $foto;
               ?>" id="imagem" class="foto-perfil" alt="logo">
               </a>
               <!--Contador de Carrinho-->
               <span id="conta" class="badge badge-danger  not">
                  <?php
                     $pokemon  = ContadorCarrinho($s);
                     if($pokemon->num_rows ==0){
                        echo '';
                     }else{
                           while($car = $pokemon->fetch_array()){
                              echo $car['COUNT(ID_INTERNO)'];
                           }
                     }
                  ?>
               </span>
               <div id="nada" class="dropdown-content d-none d-lg-none d-md-none">
                   <a href="perfil.php" rel="noopener">Perfil</a>
                   <a href="carrinho.php?c=1" rel="noopener">
                      Carrinho
                      <?php
                         $pokemon  = ContadorCarrinho($s);
                           if($pokemon->num_rows ==0){
                              echo '0';
                           }else{
                              while($car = $pokemon->fetch_array()){
                        ?>
                      <span class="badge badge-danger float-right">
                        <?php echo $car['COUNT(ID_INTERNO)']; ?>
                      
                      </span>
                      <?php
                              }
                           }
                     ?>
                   </a>
                   <a href="?Sair" rel="noopener">Sair</a>
               </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="#navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class = "collapse navbar-collapse" id = "navbarsExample07">
               <ul class = "navbar-nav mr-auto">
                  <li class = "nav-item">
                     <a class = "nav-link text-white" href = "index.php" rel="noopener">Home</a>
                  </li>
                  <li class = "nav-item">
                     <a class = "nav-link text-white" href = "categoria.php" rel="noopener">Categorias</a>
                  </li>
                  <li class = "nav-item">
                     <a class = "nav-link text-white" href = "quem_somos.php" rel="noopener">Quem Somos</a>
                  </li>
                  <li class = "nav-item">
                     <a class = "nav-link text-white" href = "cadastro.php" rel="noopener">Cadastro</a>
                  </li>
                  <li class = "nav-item">
                     <a class = "nav-link text-white" href = "login.php" rel="noopener">Login</a>
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