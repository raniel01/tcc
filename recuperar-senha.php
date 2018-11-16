 <?php include('header_navbar.php') ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/estilo.css">
      <title>Recuperação de Senha</title>
      
   </head>
   <!--colocar uma imagem de fundo grande com carrinhos de fundo-->
   <body>
     
      <div class="container-fluid" style="background-image: url('/imgs/fundocarrinho.jpg'); padding-top:50px;">
         <div class="row login">
            <div class="col-md-6 offset-3 mx-auto">
               <form action="recuperar-senha.php" method="post">
                  <div class="jumbotron  mx-auto">
                     <div class="text-center">
                        
                        <img src="imgs/logo1.png" class="logotipo" alt="logotipo">
                        &nbsp;
                        <h3>Recupeção Senha</h3>
                        <br>
                     </div>
                     <div class="row">
                           <div class = "form-group col-md-6">
                              <input type="hidden" name="forca" id="forca"  value="">
                              <input type = "password" name = "senha" class = "form-control" id="password" placeholder = "Senha *" value = ""  required autofocus>
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
                        <div class="form-group col-md-6">
                           <button type="submit" class="btn btn-success" style="border:2px solid black">Atualizar</button>
                        </div>
                     </div>
                     </div>
                  </div>
               </form>
               </div>
               </form>
            </div>
           
         </div>
      </div>
    </body>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script>
<!-- Popper.JS -->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity = "sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin = "anonymous"></script>
<!-- Bootstrap JS -->
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity = "sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin = "anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript" src="js/function.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
<script type="text/javascript">
   jQuery(document).ready(function(){
       	jQuery("#password").keyup(function() {
       	  forcaSenha(jQuery(this).val());
       	});
       });
      
          var password = document.getElementById("password")
      , confirm_password = document.getElementById("confirm_password");
      function validatePassword(){
      if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Senhas diferentes!");
      } else {
      confirm_password.setCustomValidity('');
      }
      }
      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
</script>
  <?php include('Footer_teste.php') ?>
</html>