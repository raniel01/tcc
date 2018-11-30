<?php
 session_start();
    include('../conexao.php');
   
    if (isset($_POST['email'])) {
        LoginAdm($_POST['email'],$_POST['senha']);
    }
                    
?>

 <!--chamamando materalize-->
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 
<style type="text/css">
  body{
    background-color:#fff;
  }
  .form-adm{
    margin-top:10%;
  }
  .col{
    background-color: white;
    border-radius: 10px;
  }
</style>
 
<div class="container">
 <div class="form-adm row">
    <form method="post" action ="loginadm.php" class=" col s8 offset-s2 hoverable">
      <div class="row">
        <div class="col s12">
          <h2 class="center-align">Login</h2>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name = "email" id="email" type="email" class="validate">
          <label   for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name = "senha" id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <button class="btn-large waves-effect waves-light" type="submit">
            Enviar
          </button>
          
        </div>
      </div>
    </form>
  </div>
</div>  