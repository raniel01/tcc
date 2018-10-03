<?php
session_start();
include("conexao.php");
?> 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login</title>

   
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
    
    <?php include('header_navbar.php') ?>
  <div class="container-login" style="background-image: url('/imgs/fundocarrinho.jpg');">
    ::before
    <div class="row login">
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
                  <button type="submit" class="btn btn-outline-dark float-right config_btn  a transition" style="border:2px solid black">Entrar</button>
                </div>
                <div class="form-group text-center">
                      <br>
                      
                       <button type="submit" class="btn btn-outline-dark float-right config_btn a transition" style="border:2px solid black"> Esqueci minha senha</a></button>
                       <?php 
                            if (isset($_POST['email'])) {
                            	Login($_POST['email'],$_POST['senha']);
                            }
                        ?>
                </div>
            </form>
          </div>
        </form>
      </div>
      <!--pré cadastro
      <div class="col-md-6">
        <div class="jumbotron">
          <div class="text-center">  
            <img src="logo.png" class="logotipo1" alt="logotipo"> 
            <div class="row"><br></div>
            <h4>Não é cadastrado?</h4>
          </div>
       <!-- <div class="form-group">
            <input type="text" class="form-control" placeholder="Nome de usuário">
          </div>
          <div class="form-group">
            <form action="cadastro.php" method="post">
           <input type="email" class="form-control" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="text" name="cpf" class="form-control"  maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" placeholder="CPF"  required="Por favor digite seu cpf">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-outline-dark config_btn a transition" style="border:2px solid black">Cadastrar</button>
             </form>
          </div>
        </div>
      </div>-->
    </div>
    </div>
    
    <?php include('Footer_teste.php') ?>
    
  </body>
</html>
