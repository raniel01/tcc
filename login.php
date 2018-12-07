<?php $title = " Login"; include('header_navbar.php');
   session_start();
   //include("conexao.php");
   ?> 
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/estilo.css">
      <title>Login</title>
      <style>
         html{
            background: white;
         }
      </style>
      <script type="text/javascript">
         function formatar(mascara, documento){
         var i = documento.value.length;
         var saida = mascara.substring(0,1);
         var texto = mascara.substring(i)
         
         if (texto.substring(0,1) != saida){
               documento.value += texto.substring(0,1);
         }
         
         }
      </script>
   </head>
   <!--colocar uma imagem de fundo grande com carrinhos de fundo-->
   <body>
      <div class="container-fluid bg-light">
         <div class="row login pt-2">
            <div class="col-md-6 offset-3 mx-auto">
               <form action="login.php" method="post">
                  <div class="jumbotron  mx-auto">
                     <div class="text-center">
                        <img src="imgs/logo1.png" class="logotipo" alt="logotipo">
                        &nbsp;
                        <h3>Login</h3>
                     </div>
                     <div class = "row"><br></div>
                     <!--username-->
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="E-mail" name="email">
                     </div>
                     <!--password-->
                     <div class="form-group">
                        <input type="password" class="form-control" placeholder="Senha" name="senha">
                     </div>
                     <!--lembrar-->
                     <div class="form-group" id = "div-02">
                        <div class="form-check-inline">
                           <label class="form-check-label">
                           <input type="checkbox" class="form-check-input" value="">Lembrar-Me
                           </label>
                        </div>
                        <!--enviar dados-->
                        <button type="submit" class="btn btn-outline-dark float-right " style="border:2px solid black">Entrar</button>
                     </div>
                     <div class="form-group text-center">
                        <br>
                        <button type="button" class="btn btn-outline-dark float-right" style="border:2px solid black" data-toggle="modal" data-target="#recuperacao" data-whatever="@mdo" > Esqueci minha senha</a></button>
                        <?php 
                           if (isset($_POST['email'])) {
                           	Login($_POST['email'],$_POST['senha']);
                           }
                           ?>
                     </div>
                  </div>
               </form>
            </div>
            </form>
         </div>
         <!-- Modal para recuperação de senha -->
         <div class="modal fade" id="recuperacao" tabindex="-1" role="dialog" aria-labelledby="recuperacao" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="recuperacao">Recuperação de Senha</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <form action="gestao/geradorsenha/gerarSenha.php" method="post">
                        <div class="row">
                           <div class="form-group col-12">
                              <input type="email" name="email-rec" placeholder="Digite o e-mail cadastrado." class="form-control"/>
                           </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- Fim recuperação de senha-->
      </div>
      </div>
   </body>
   <?php include('Footer_teste.php') ?>
</html>