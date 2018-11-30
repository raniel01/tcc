<?php
 session_start();
    include('../conexao.php');
   
    if (isset($_POST['email'])) {
        LoginGes($_POST['email'],$_POST['senha']);
    }
                    
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Loding font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="assets/css/stylesL.css">

    <title>Login Área Administrativa</title>
  </head>
  <body>

    <!-- Backgrounds -->

    <div id="login-bg" class="container-fluid">

      <div class="bg-img"></div>
      <div class="bg-color"></div>
    </div>

    <!-- End Backgrounds -->

    <div class="container" id="login">
        <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="login">

            <h1>Login </h1>
            <h4>Área Administrativa</h4>
            
            <!-- Loging form -->
                  <form method="post" action ="loginadm.php" class=" col s8 offset-s2 hoverable">
                    <div class="form-group">
                      <input type="email" name = "email" class="form-control validate" id="email" aria-describedby="emailHelp" placeholder="E-mail">
                      
                    </div>
                    <div class="form-group">
                      <input type="password" name = "senha" class="form-control validate" id="password" placeholder="Senha">
                  
                    </div>

                      
                  
                    <br>
                    <button type="submit" class="btn btn-lg btn-block btn-warning">Entrar</button>
                  </form>
             <!-- End Loging form -->

          </div>
        </div>
        </div>
    </div>


  </body>
</html>