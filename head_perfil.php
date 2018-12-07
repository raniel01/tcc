<?php 
   include('conexao.php');
      session_start();
      Sair();
     
   if(isset($_POST['cd1'])){
      
      AtualizarUsuario($_POST['cd1'], $_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['cpf'], $_POST['data_nasc'], $_POST['sexo'], $_POST['endereco'], $_POST['bairro'], $_POST['cidade'], $_POST['cep'], $_POST['estado'], $_POST['ponto'], $_POST['telefone'], $_POST['celular']);
   
   }
   
   if(isset($_SESSION['id'])){
      $a = $_SESSION['id'];
     }else{
         	echo '<script> window.location="login.php";</script>';
     }
   $usuarios = ListarUsuarioCerto($a);
   while ($usuario = $usuarios->fetch_array()){
      $verificacao = ($usuario['DS_SENHA']); 
      $foto = ($usuario['DS_FOTO']);
   } 
   if(isset($_POST['senha_antiga'])){
      $senha_antiga= md5($_POST['senha_antiga']);
      if ( $senha_antiga == $verificacao){
         if(isset($_POST['forca']) == "valida"){
          AtualizarSenha($_POST['cd'], md5($_POST['senha']));
         }
      }else{
          alert("Erro ao atualizar, verifique se digitou corretamente os campos");
      }
   }
      if (isset($_FILES['fotop'])) {
   	$destino= "imgs/imgp/".$_FILES['fotop']['name'];
   	move_uploaded_file($_FILES['fotop']['tmp_name'],$destino);
   	AtualizarFotoPerfil($_POST['cd'], $destino);
      }
      if(isset($_POST['cd2'])){
          AdicionarItem($_POST['cd2'],$_POST['conteudo']);
          
      }
      if(isset($_POST['codigo'])){
          ExcluirItemLista($_POST['codigo']);
      }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <!-- Links -->
      <link rel="shortcut icon" href="imgs/favicon(1).ico" type="image/x-icon">
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
      <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
      <title> Meu Carrinho | Perfil de usuário</title>
      <!-- Bootstrap CSS CDN -->
      <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity = "sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin = "anonymous">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <!-- Our Custom CSS -->
      <link rel = "stylesheet" href = "css/style-slidenav.css">
      <style type="text/css">
         .btn-mc{
         background-color: orange;
         width: 100%;
         color:black;
         }
         .foto-perfil{
         object-fit: cover; 
         }
         .btn-perfil:hover{
         opacity:0.65;
         }
         .btn-perfil{
         opacity:0.0;
         transition: 0.2s linear;
         }
         .btn-perf{
         border:3px white solid; 
         border-radius:50%; 
         width: 150px; 
         height:150px; 
         position: absolute; 
         left: 50px;
         top:8px;
         }
         .frase:hover{
         opacity:0.9; 
         }
         .frase{
         opacity:0.0;
         position: absolute; 
         left: 40px;
         top:80px;
         color: white;
         font-weight: border;
         text-align: center;
         }
         .obrigatorio{
         color: red;
         }
         .borda-lista{
         border: 3px solid #dedede;
         }
         .lista{
         font-size: 18pt;
         }
      </style>
      <!-- Font Awesome JS -->
      <script defer src = "https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity = "sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin = "anonymous"></script>
      <script defer src = "https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity = "sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin = "anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
      <script type="text/javascript">
         $(document).on('click','.delete', function(){
         var id = $(this).attr('id');
         $('#codigo').val(id);
         });
      </script>
   </head>
   <body>
      <div class = "wrapper">
      <!-- Sidebar -->
      <nav id = "sidebar">
         <div class = "sidebar-header">
            <h5>PERFIL DE USUÁRIO</h5>
         </div>
         <div class = "media">
            <div class = "container-fluid bg-gradient-primary img-responsive col-md-12" style = "background-image: url('imgs/foto.jpg');">
               <div class = "row">
                  <div class = "col-md-12 px-0">
                     <div class = "pb-2 pt-2 m-auto btn-perf">
                        <a href="#" role="button" data-toggle="modal" data-target="#FotoModal" data-whatever="@mdo">
                           <span class="frase">
                              <!--<img class="btn-perfil" src="imgs/botoes/btn-perfil.png" style="width:145px; position:absolute; top: 70px; right: -0.5px;"></img>-->
                              <div ><img class"btn-perfil" src="imgs/botoes/photo-camera.svg" style="width:25px;"></img></div>
                              Atualizar
                           </span>
                        </a>
                     </div>
                     <div class = "pb-2 pt-2 m-auto">
                        <center>
                           <img class = "foto-perfil" width="150" height="150" style="border-radius:50%" src = "<?php echo $foto?>" alt = "Imagem de perfil">
                        </center>
                     </div>
                     <div class ="media-body">
                        <p class = "px-0 mx-0 text-center text-white text-uppercase text-light" style="font-family: Arial; font-weight: border; font-size: 16pt; background-color: rgba(0, 0, 0, 0.5)"><?php echo $_SESSION['nome']; ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <ul class = "list-unstyled components">
            <li>
               <a href="perfil.php">Home</a>
            </li>
            <li>
               <a href = "index.php">Voltar ao site</a>
            </li>
            <!--<li>-->
            <!--   <a href = "lista.php">Minha Lista</a>-->
            <!--</li>-->
            <li>
               <a href = "#homeSubmenu" data-toggle = "collapse" aria-expanded = "false">Configurações</a>
               <ul class = "collapse list-unstyled" id = "homeSubmenu">
                  <li>
                     <a href = "finalizarcad.php" class="btn btn-mc bg-hover-orange rounded-0 font-hover-white"> Atualizar Cadastro</a>
                  </li>
                  <li>
                     <center>
                        <button type="button" class="btn btn-mc rounded-0  font-hover-white" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Atualizar Senha</button>
                     </center>
                  </li>
               </ul>
            </li>
            <li>
               <a href = "ajuda.php">Ajuda</a>
            </li>
         </ul>
         <ul class = "list-unstyled CTAs">
            <li>
               <a href="?Sair" class = "hover-none"><button tyle = "button" class = "btn btn-danger col-12">Sair</button></a>
            </li>
         </ul>
      </nav>
      <!-- Sidebar -->
      <!-- Modal senha--> 
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> Atualização de Senha</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="perfil.php" method="post">
                     <?php 
                        if(isset($_SESSION['id'])){
                           $a = $_SESSION['id'];
                        }
                        ?>
                     <div class="row">
                        <div class = "form-group col-md-6">
                           <input type = "password" name = "senha_antiga" class = "form-control"  placeholder = "Senha antiga *" value = ""  required autofocus>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class = "form-group col-md-6">
                           <input type="hidden" name="forca" id="forca"  value="">        
                           <input type="hidden" name="cd" id="cd"  value="<?php echo $a; ?>">        
                           <input type = "password" name = "senha" class = "form-control" id="password" placeholder = "Nova senha *" value = ""  required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                           <input type="password" name="confirmacao" class="form-control" id="confirm_password" placeholder="Confirme sua senha*" value="" required />
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <div id="medida" class="progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%; color: white; font-weight:bold;">&nbsp;</div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12" style="text-align: justify;">
                           <span class="obrigatorio ">Lembre-se</span> A senha deve conter de 6 á 20 caracteres, sendo letras maisculas e minusculas, números e caracteres especiais.
                        </div>
                     </div>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
               <button type="submit" id="atualizar" class="btn btn-primary">Atualizar</button>
               </form>
               </div>
            </div>
         </div>
      </div>
      <!-- fim modal-->
      <!-- Modal foto--> 
      <div class="modal fade" id="FotoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="FotoModalLabel"> Atualização de foto de perfil</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="perfil.php" method="post" enctype='multipart/form-data'>
                     <div class="form-group">
                        <input type="hidden" name="cd" value="<?php echo $_SESSION['id']; ?>"/>
                        <input type="file" name="fotop" class="form-control" required>
                     </div>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
               <button type="submit" class="btn btn-primary">Atualizar</button>
               </form>
               </div>
            </div>
         </div>
      </div>
      <!-- fim modal-->
      <!-- Page Content  -->
      <div id = "content">
      <nav class = "navbar navbar-expand-lg navbar-light bg-light">
         <div class = "container-fluid">
            <button type = "button" id = "sidebarCollapse" class = "mb-2 m-md-0 btn btn-outline-warning"><img class = "foto-perfil" width="30" height="30" style="border-radius:50%" src = "<?php echo $foto;?>" alt = "Imagem de perfil"></button>
         </div>
      </nav>