<!--Conexão com Banco de Dasdos-->
<?php 
   session_start();
   //include("conexao.php");
   //funçoes do cadastro passando pelo header_navbar junto com o include de conexao
   ?>
<!--..Conexão com Banco de Dados-->
<!-- Nosso CSS -->
<link rel = "stylesheet" type = "text/css" href = "css/cadastro.css">
<!-- Header -->
<?php $title = " Cadastro"; include('header_navbar.php'); ?>
<!-- Modal -->
<div class = "modal fade" id = "exampleModal" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
   <div class = "modal-dialog" role = "document">
      <!-- Conteudo do Modal -->
      <div class = "modal-content">
         <!-- Header do Modal - Título do Modal -->
         <div class = "modal-header bg-dark">
            <h4 class = "modal-title text-light">Entrar</h4>
            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <!-- Fim do Header do Modal -->
         <!-- Body do Modal - Conteúdo do Login -->
         <div class = "modal-body pb-0" id = "modal-body">
            <div class = "tab-pane fade show" id = "cadastro" role = "tabpanel" aria-labelledby = "cadastro-tab">
               <div class = "row register-form pt-0">
                  <div class = "col-md-12">
                     <form action="cadastro.php" method="post">
                        <div class = "form-group">
                           <!-- Email -->
                           <input type = "text" name="email" class = "form-control" placeholder = "Email" value = "">
                        </div>
                        <div class = "form-group">
                           <!-- Senha -->
                           <input type = "password" name="senha" class = "form-control" placeholder = "Senha" value = "">
                        </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Fim do Body do Modal -->
         <!-- Footer do Modal - Botões de ação -->
         <div class = "modal-footer bg-dark">
         <!-- Cancelar -->
         <button type = "button" class = "btn btn-outline-light" data-dismiss = "modal">Cancelar</button>
         <!-- Login -->
         <button type = "submit" class = "btn btn-light">Login</button>
         </form>
         <?php 
            if (isset($_POST['email'])) {
            Login($_POST['email'],$_POST['senha']);
            }
            ?>
         </div>
         <!-- Fim do Footer do Modal -->
      </div>
      <!-- Fim do conteúdo do Modal -->
   </div>
</div>
<!-- Fim do Modal -->
<!-- Conteúdo -->
<div class = "container-fluid register" style = "margin-top: 0; !important;">
   <div class = "row">
      <div class = "col-md-3 register-left">
         <img src = "imgs/logo1.png" nome = "Logotipo"/>
         <h3>Bem Vindo!</h3>
         <p>Cadastre-se em nosso site!</p>
         <button type = "button" class = "btnRegister btn-dark" data-toggle = "modal" data-target = "#exampleModal">Login</button>
      </div>
      <div class = "col-md-9 register-right">
         <ul class = "nav nav-tabs nav-justified" id = "myTab" role = "tablist">
            <!--<li class="nav-item">-->
            <!--    <a class="nav-link" id="cadastro-tab" class="btn-dark" data-toggle="tab" href="#cadastro" role="tab" aria-controls="cadastro" aria-selected="true">Cadastro</a>-->
            <!--</li>-->
            <!--<li class="nav-item">-->
            <!--    <a class="nav-link active" id="login-tab"    class="btn-dark" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>-->
            <!--</li>-->
         </ul>
         <!-- Login -->
         <div class = "tab-content" id = "myTabContent">
            <div class = "tab-pane fade show active" id = "login" role = "tabpanel" aria-labelledby = "login-tab">
               <h3 class = "register-heading" style=" color:white"><b>Cadastre-se</b></h3>
               <form name="forms" action="cadastro.php" method = "post" class="form-signin">
                  <div class = "row register-form container-fluid">
                     <div class = "col-md-6">
                        <div class = "form-group">
                           <input type = "text" name = "nome" class = "form-control" placeholder = "Nome *" value = "" required >
                        </div>
                        <div class = "form-group">
                           <input type = "text" name = "sobrenome" class = "form-control" placeholder = "Sobrenome *" value = "" required>
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
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="email" name="email" class="form-control" placeholder="Seu Email *" value="" required/>
                        </div>
                        <div class="form-group">
                           <input type="text" name="cel" class="form-control" placeholder="Celular *" id="celular" maxlength="16" value="" required/>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-4" style="color: white; font-weight:bold;"> Data de Nascimento:</div>
                           <div class="form-group col-md-8">
                              <input type="date" name="nascimento"  class="form-control" required/>
                           </div>
                        </div>
                        <div class = "form-group">
                           <div class = "maxl">
                              <div class = "form-group">
                                 <span style="color: white; font-weight:bold;"> * </span> <input type="radio" name="sexo" value="M"><span style="color: white; font-weight:bold;"> Masculino</span> &nbsp;&nbsp;&nbsp;<input type="radio" name="sexo" value="F"> <span style="color: white; font-weight:bold;">Feminino</span>
                              </div>
                           </div>
                        </div>
                        <input type="submit"  id="atualizar" class="btnRegister btn-dark float-right"  value="Register" />
               </form>
               </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
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
</body>
<?php include('Footer_teste.php')?>