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
<!--Conexão com Banco de Dasdos-->
<?php 
session_start();
//include("conexao.php");
//funçoes do cadastro passando pelo header_navbar junto com o include de conexao
?>

<!--..Conexão com Banco de Dados-->

<!-- Nosso CSS -->
<link rel = "stylesheet" type = "text/css" href = "cadastro.css">

    <!-- Header -->
    <?php include('header_navbar.php'); ?>
    
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
    <div class = "container-fluid register">
                
        <div class = "row">
                
            <div class = "col-md-3 register-left">
    
                <img src = "imgs/logo1.png" no = "Logotipo"/>
                            
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
                        
                        <h3 class = "register-heading">Cadastre-se</h3>
                        
                            <form name="forms" action="cadastro.php" method = "post">
                                    
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
                                            
                                            <input type = "password" name = "senha" class = "form-control" id="password" placeholder = "Senha *" value = ""  required>
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                                <input type="password" name="confirmacao" class="form-control" id="confirm_password" placeholder="Confirme sua senha*" value="" required />
                                            </div>
                                        </div> 
                                        <div class = "form-group">
                                            
                                            <div class = "maxl">
                                                
                                                <div class = "form-group">
                                                    
                                                    *  <input type="radio" name="sexo" value="M"> Masculino &nbsp;&nbsp;&nbsp;<input type="radio" name="sexo" value="F"> Feminino
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Seu Email *" value="" required/>
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="tel" name="cel" class="form-control" placeholder="Celular *" maxlength="13" OnKeyPress="formatar('##-#####-####', this)" value="" required/>
                                            </div>
                                          <div class="row">
                                          <div class="form-group col-md-4"> Data de Nascimento:</div>
                                          <div class="form-group col-md-8">
                                               <input type="date" name="nascimento"  class="form-control" required/>
                                            </div>
                                            </div>
                                            <input type="submit" class="btnRegister btn-dark float-right"  value="Register" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        
                        </div>
                    </div>
    </div>
    <script type="text/javascript">
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