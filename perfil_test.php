<?php
    include('conexao.php');
    session_start();
    Sair();

?>
<!DOCTYPE html>
<html>

    <head>
        
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    
        <title>Perfil de usuário</title>
    
        <!-- Bootstrap CSS CDN -->
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity = "sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin = "anonymous">
        <!-- Our Custom CSS -->
        <link rel = "stylesheet" href = "style-slidenav.css">
    
        <!-- Font Awesome JS -->
        <script defer src = "https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity = "sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin = "anonymous"></script>
        <script defer src = "https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity = "sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin = "anonymous"></script>
    
    </head>

<body>
    
    <div class = "wrapper">
        
        <!-- Sidebar -->
        <nav id = "sidebar">
            
            <div class = "sidebar-header">
                
                <h3>Perfil de usuário</h3>
                                    
            </div>
            
            <div class = "media">
                
                <div class = "container-fluid bg-gradient-primary img-responsive col-md-12" style = "background-image: url('imgs/foto.jpg');">
                
                    <div class = "row">
                        
                    <div class = "col-md-12">
                        
                        <div class = " pb-2 pt-2 m-auto" style = "width: 40%">
                            
                            <img class = "rounded-circle img-fluid" src = "imgs/logo.png" alt = "Imagem de perfil">
                            
                        </div>

                        <div class ="media-body">
                            
                            <p class = "text-center text-white text-uppercase text-light bg-dark rounded" ><?php echo $_SESSION['nome']; ?></p>
                            
                        </div>
    
                    </div>
                    
                    </div>
                
                </div>

            </div>

            <ul class = "list-unstyled components nav flex-column" id="fixado">
                
                <li>
                    
                    <a id="menufixado" data-toggle="tab" href="#home">Home</a>
                
                </li>
                <li>
                    
                    <a data-toggle="tab" href="#lista">Minha Lista</a>
                
                </li>

                <li>
                    
                    <a data-toggle="tab" href="#ofertas">Ofertas do dia</a>
                
                </li>
                
                <li>
                    
                    <a href = "#homeSubmenu" data-toggle = "collapse" aria-expanded = "false">Configurações</a>
                    
                    <ul class = "collapse list-unstyled" id = "homeSubmenu">
                        
                        <li>
                            
                            <a data-toggle="tab" href="#perfil">Configuração De Perfil</a>
                        
                        </li>
                        
                        <li>
                            
                            <a href = "#">Configuração</a>
                        
                        </li>
                        
                        <li>
                            
                            <a href = "#">Configuração</a>
                        
                        </li>
                    
                    </ul>
                    
                </li>
                
                <li>
                    
                    <a data-toggle="tab" href="#ajuda">Ajuda</a>
                
                </li>
            </ul>

            <ul class = "list-unstyled CTAs">
                
                <li>
                    
                    <a tyle = "button" class = "btn btn-light col-12" href="https://meucarrinho-xtranx.c9users.io/rascunho/rascunho-tcc/perfil.php?Sair">Sair</a>
                
                </li>
            
            </ul>
        
        </nav>
        <!-- Sidebar -->

        <!-- Page Content  -->
        
        <div id = "content">

            <nav class = "navbar navbar-expand-lg navbar-light bg-light">
                
                <div class = "container-fluid">

                    <button type = "button" id = "sidebarCollapse" class = "mb-2 m-md-0 btn btn-outline-warning"><img src = "https://image.flaticon.com/icons/svg/181/181549.svg" width = "27" height = "25"></button>

                    <form class = "form-inline">
                        
                        <input class = "form-control mr-2 mr-sm-2" type = "search" placeholder = "Pesquisar no Carrinho...">
                        
                        <button class = "d-none d-sm-block btn btn-outline-warning my-2" type = "submit"><img src = "https://image.flaticon.com/icons/svg/34/34097.svg" height = "27" widht = "25"></button>
                        
                    </form>
                    
                </div>
                
            </nav>
                
            <div class = "container-fluid">
            <div class="tab-content">
                <!--Pagina Inicial-->
                 <div id="home" class="tab-pane fade in active">       
                        <div class = "row">
                            
                            <div class = "col-md-6 col-sm-12">
                                    
                                <div class = "card bg-light">
                                    
                                    <div class = "card-header">Meu Saldo</div>
        
                                    <div class = "card-body">
                                        
                                        <h5 class = "card-title">R$0,00</h5>
                                    
                                    </div>
                            
                                </div>
                                    
                            </div>
                                
                            <div class = "col-md-6 col-sm-12  mt-3 mt-md-0">
                                    
                                <div class = "card bg-light">
                                    
                                    <div class = "card-header">Compra Créditos</div>
        
                                    <div class = "card-body">
                                        
                                        <h5 class = "card-title">R$0,00</h5>
                                    
                                    </div>
                            
                                </div>  
                                    
                            </div>
                                
                        </div>
                        
                        <div class = "row">
                            
                            <div class = "line"></div>
                            
                            <div class = "col align-self-center">
                                
                                <h5 class = "text-center">Carrinho</h5>
                                
                            </div>
                                
                        </div>
                        
                        <div class = "row mt-4">
                            
                                <!--<div class = "col-md-4 col-sm-3  mt-3 mt-md-0">
                                
                                <div class = "card shadow-sm">
        
                                    <img class = "card-img-top" src = "imgs/fundo.png" alt = "Card image cap">
          
                                    <div class = "card-body">
                                    
                                        <h5 class = "card-title">Produto</h5>
                                        
                                        <p class = "card-text">R$ 0,00</p>
                                        
                                        <div class = "row">
                                            
                                            <input type = "number" class = "form-control col-4 ml-3" value = "1">
                                            
                                            <button type="button" class="btn btn-danger col-5 ml-4">Remover</button>
                                            
                                        </div>
        
                                    </div>
        
                                </div>
                                
                            </div>
                            -->
                            <div class = "col-md-4 col-sm-3  mt-3 mt-md-0">
                                
                                <div class = "card shadow-sm">
        
                                    <img class = "card-img-top" src = "imgs/fundo.png" alt = "Card image cap">
          
                                    <div class = "card-body">
                                    
                                        <h5 class = "card-title">Produto</h5>
                                        
                                        <p class = "card-text">R$ 0,00</p>
                                        
                                        <div class = "row">
                                            
                                            <input type = "number" class = "form-control col-4 ml-3" value = "1">
                                            
                                            <button type="button" class="btn btn-danger col-5 ml-4">Remover</button>
                                            
                                        </div>
        
                                    </div>
        
                                </div>
                                
                            </div>
                            
                            <div class = "col-md-4 col-sm-3  mt-3 mt-md-0">
                                
                                <div class = "card shadow-sm">
        
                                    <img class = "card-img-top" src = "imgs/fundo.png" alt = "Card image cap">
          
                                    <div class = "card-body">
                                    
                                        <h5 class = "card-title">Produto</h5>
                                        
                                        <p class = "card-text">R$ 0,00</p>
                                        
                                        <div class = "row">
                                            
                                            <input type = "number" class = "form-control col-4 ml-3" value = "1">
                                            
                                            <button type="button" class="btn btn-danger col-5 ml-4">Remover</button>
                                            
                                        </div>
        
                                    </div>
        
                                </div>
                                
                            </div>
                            
                            <div class = "col-md-4 col-sm-4 col-12  mt-3 mt-md-0">
                                
                                <div class = "card shadow-sm">
        
                                    <img class = "card-img-top" src = "imgs/fundo.png" alt = "Card image cap">
          
                                    <div class = "card-body">
                                    
                                        <h5 class = "card-title">Produto</h5>
                                        
                                        <p class = "card-text">R$ 0,00</p>
                                        
                                        <div class = "row">
                                            
                                            <input type = "number" class = "form-control col-4 ml-3" value = "1">
                                            
                                            <button type="button" class="btn btn-danger col-5 ml-4">Remover</button>
                                            
                                        </div>
        
                                    </div>
        
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <div class = "row mt-3 justify-content-center">
                            
                            <nav aria-label = "Page navigation example">
        
                                <ul class = "pagination">
                                    
                                    <li class = "page-item"><a class = "page-link" href = "#">1</a></li>
                                    <li class = "page-item"><a class = "page-link" href = "#">2</a></li>
                                    <li class = "page-item"><a class = "page-link" href = "#">3</a></li>
                                    <li class = "page-item"><a class = "page-link" href = "#">4</a></li>
                                    <li class = "page-item"><a class = "page-link" href = "#">5</a></li>
                                
                                </ul>
        
                            </nav>
                        
                    </div>
                    
                    <div class = "row">
                        
                        <div class = "col-md-4 col-sm-12 mt-2">
                            
                                <span class = "text-uppercase font-weight-bold text-dark pl-3">Total da Compra:</span>
                                
                                <hr>
                            
                        </div>
                        
                        <div class = "col-md-3 offset-md-5 col-sm-12">
                            
                            <form>
                                
                                <button type = "submit" class = "btn btn-outline-success btn-lg btn-block mt-2">Finalizar Compra</button>
                                
                            </form>
                            
                        </div>
                        
                    </div>
        
                </div>
                <!--Pagina de Pefil-->
                 <div id="perfil" class="tab-pane fade">
                     <div class = "container-fluid">
                <form aciton="finalizarcad.php" method="post">
                   <div class="row">
                       <?php 
                        if(isset($_SESSION['id'])){
                           $a = $_SESSION['id'];
                        }
                		$usuarios = ListarUsuarioCerto($a);
                		while ($usuario = $usuarios->fetch_array()){
                	   ?>
                       <div class="col-md-12">
                          <div class="row">
                           <div class="col-md-5">
                           <div class="form-group">
                               <input type="hidden" name="cd" id="cd"  value="<?php  echo($usuario['CD_USUARIO']); ?>">
                               <label for="nome">Nome <span class="obrigatorio">*</span> :</label><br>
                              <input type = "text" name = "nome" class = "form-control" placeholder = "Nome" value = "<?php  echo($usuario['NM_USUARIO']); ?>" required >
                              </div>
                           </div>
                            <div class="col-md-7">
                           <div class="form-group">
                               <label for="sobrenome">Sobrenome <span class="obrigatorio">*</span> :</label><br>
                              <input type = "text" name = "sobrenome" class = "form-control" placeholder = "Sobrenome" value = "<?php  echo($usuario['NM_SOBRENOME']); ?>" required >
                              </div>
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-md-7">
                           <div class="form-group">
                               <label for="email">E-mai <span class="obrigatorio">*</span> :</label><br>
                              <input type = "email" name = "email" class = "form-control" placeholder = "exemplo: nome@mc.com" value = "<?php  echo($usuario['DS_EMAIL']); ?>" required >
                              </div>
                           </div>
                            <div class="col-md-5">
                           <div class="form-group">
                               <label for="cpf">CPF <span class="obrigatorio">*</span> :</label><br>
                              <input type = "text" name = "cpf" class = "form-control"  maxlength="14" id="cpf" placeholder="000.000.000-00"value = "<?php  echo($usuario['NR_CPF']); ?>" required >
                              </div>
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-md-4">
                           <div class="form-group">
                               <label for="data_nasc">Data de Nascimento <span class="obrigatorio">*</span> :</label><br>
                              <input type = "date" name = "data_nasc" class = "form-control"  value = "<?php  echo($usuario['DT_NASCIMENTO']); ?>" required >
                              </div>
                           </div>
                            <div class="col-md-3">
                           <div class="form-group">
                               <label for="sexo">Sexo <span class="obrigatorio">*</span> :</label><br>
                              Masculino: <input type = "radio" name = "sexo"    value = "M"  ><br>
                              Feminino:&nbsp;&nbsp; <input type = "radio" name = "sexo"    value = "F"  >
                              </div>
                              <div class="col-md-1">
                                  
                              </div>
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-md-7">
                           <div class="form-group">
                               <label for="endereco">Endereço <span class="obrigatorio">*</span> :</label><br>
                              <input type = "text" name = "endereco" class = "form-control" placeholder = "exemplo: Rua Joaquina, 606" value = "<?php  echo($usuario['NM_ENDERECO']); ?>" required >
                              </div>
                           </div>
                            <div class="col-md-5">
                           <div class="form-group">
                               <label for="bairro">Bairro <span class="obrigatorio">*</span> :</label><br>
                              <input type = "text" name = "bairro" class = "form-control" placeholder = "bairro" value = "<?php  echo($usuario['NM_BAIRRO']); ?>" required >
                              </div>
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-md-2">
                           <div class="form-group">
                               <label for="cidade">Cidade <span class="obrigatorio">*</span> :</label><br>
                              <input type = "text" name = "cidade" class = "form-control" placeholder = "cidade" value = "<?php  echo($usuario['NM_CIDADE']); ?>" required >
                              </div>
                           </div>
                            <div class="col-md-2">
                           <div class="form-group">
                               <label for="cep">CEP <span class="obrigatorio">*</span> :</label><br>
                              <input type = "text" name = "cep" class = "form-control" maxlength="9" id="cep" placeholder="00000-000" value = "<?php  echo($usuario['CD_CEP']); ?>" required >
                              </div>
                           </div>
                           <div class="col-md-3">
                           <div class="form-group">
                               <label for="cidade">Estado: <span class="obrigatorio">*</span> :</label><br>
                              <select name="estado" required="Por favor escolha seu Estado" class = "form-control"> 
                        		<option value="AC">Acre</option> 
                        		<option value="AL">Alagoas</option> 
                        		<option value="AM">Amazonas</option> 
                        		<option value="AP">Amapá</option> 
                        		<option value="BA">Bahia</option> 
                        		<option value="CE">Ceará</option> 
                        		<option value="DF">Distrito Federal</option> 
                        		<option value="ES">Espírito Santo</option> 
                        		<option value="GO">Goiás</option> 
                        		<option value="MA">Maranhão</option> 
                        		<option value="MT">Mato Grosso</option> 
                        		<option value="MS">Mato Grosso do Sul</option> 
                        		<option value="MG">Minas Gerais</option> 
                        		<option value="PA">Pará</option> 
                        		<option value="PB">Paraíba</option> 
                        		<option value="PR">Paraná</option> 
                        		<option value="PE">Pernambuco</option> 
                        		<option value="PI">Piauí</option> 
                        		<option value="RJ">Rio de Janeiro</option> 
                        		<option value="RN">Rio Grande do Norte</option> 
                        		<option value="RO">Rondônia</option> 
                        		<option value="RS">Rio Grande do Sul</option> 
                        		<option value="RR">Roraima</option> 
                        		<option value="SC">Santa Catarina</option> 
                        		<option value="SE">Sergipe</option> 
                        		<option value="SP" selected>São Paulo</option> 
                        		<option value="TO">Tocantins</option>
	                           </select>
                              </div>
                           </div>
                           <div class="col-md-5">
                           <div class="form-group">
                               <label for="ponto">Ponto de Referencia <span class="obrigatorio">*</span> :</label><br>
                              <input type = "text" name = "ponto" class = "form-control" placeholder = "Exemplo: proximo á escola joana" value = "<?php  echo($usuario['NM_PONTO_REFERENCIA']); ?>" required >
                              </div>
                           </div>
                           </div>
                           <div class="row">
                           <div class="col-md-3">
                           <div class="form-group">
                               <label for="telefone">Telefone fixo:</label><br>
                              <input type = "text" name = "telefone" class = "form-control" id="telefone" maxlength="15" value = "<?php  echo($usuario['NR_TELEFONE']); ?>" placeholder="(00) 3333-3333">
                              </div>
                           </div>
                           <div class="col-md-3">
                           <div class="form-group">
                               <label for="celular">Celular <span class="obrigatorio">*</span> :</label><br>
                              <input type = "text" name = "celular" class = "form-control" id="celular" maxlength="16" value = "<?php  echo($usuario['NR_CELULAR']); ?>" placeholder="(00) 99999-9999">
                              </div>
                           </div>
                           </div>
                           <div class="row">
                               <div class="col-md-4">
                                   <div class="form-group">
                                       <button  class="btn btn-lg btn-pill btn-warning" type="reset">Limpar</button>
                                       <button class="btn btn-lg btn-pill btn-primary" type="submit">Atualizar</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                 <?php } ?>
                </form>    
            
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

    <script type = "text/javascript">
        $(document).ready(function(){
            $('.list-unstyled').on('click',function() {
                    $('#menufixado').attr('aria-expanded', true);     
            })
           
        })
    
        $(document).ready(function(){
            
            
            
            $('#sidebarCollapse').on('click', function(){
                
                $('#sidebar').toggleClass('active');
                
            });
            
        });
        
        $(document).ready(function(){
            
            $('#sidebarCollapse2').on('click', function(){
                
                $('#sidebar').toggleClass('active');
                
            });
            
        });
        
    </script>
    
</body>

</html>