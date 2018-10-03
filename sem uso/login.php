<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel =
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Login</title>
    <!--apagar style e colocar em um css-->
    <style>
        body{
            background-image:url('fundo-login.jpg');
        }
        .login{
            padding:100px;
        }
        .logotipo{
            width:170px;
            height:150px;
        }
        .logotipo1{
            width:120px;
            height:100px;
        }
    </style>
  </head>
  <!--colocar uma imagem de fundo grande com carrinhos de fundo-->
  <body>
    <div class="row login">

      <div class="col-md-6">
        <form action="login.php" method="post">
          <div class="jumbotron">
                  <div class="text-center">
                    <img src="logo.png" class="logotipo" alt="logotipo">
                  </div>
                    <div class = "row"><br></div>
                <!--username-->
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome de usuário" name="name">
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
                  <button type="submit" class="btn btn-outline-dark float-right" >Entrar</button>
                </div>
                <div class="form-group text-center">
                      <br>
                      Não tem uma conta? <a href="#"> Inscreva-se</a>
                </div>
            </form>
                <?php
										if($_POST){
												if($_POST['name'] =='user' && $_POST['senha'] =='1234'){
											      echo '<h2>FOI</h2>';
												}
												else{
													echo '<h6 class="text-center">Dados Inseridos Incorretamentes</h6>';
												}
										}
									?>
          </div>
        </form>
      </div>
      <!--pré cadastro-->
      <div class="col-md-6">
        <div class="jumbotron">
          <div class="text-center">  
            <img src="logo.png" class="logotipo1" alt="logotipo"> 
            <div class="row"><br></div>
            <h4>Não é Cadastrado?</h4>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nome de Usuário">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="CPF">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-outline-dark">Cadastrar</button>
          </div>
        </div>
      </div>
      
    </div>
  </body>
</html>
