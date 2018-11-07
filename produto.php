<?php 
   session_start();
   include('header_navbar.php');
   if(isset($_SESSION['id'])){
         $a = $_SESSION['id'];
        }
   ?>
<body>
   <div class = "pt-5 container-fluid mb-3">
      <div class = "row">
         <?php
            //$unitarios = ListaUnitaria($buscaunitaria);
            
            $buscaunitaria=$_GET['cd'];
            $produto = ListaUnitaria($buscaunitaria);
            
            
            while($unitario = $produto->fetch_array()){
            
            
            ?>      
         <div class = "col-md-5 col-sm-12 offset-md-1 text-center d-block">
            <img src = "<?php echo $unitario['DS_FOTO_PRODUTO']; ?>" class = "rounded float-right responsive w-100" alt = "imagem do produto">
         </div>
         <div class = "col-md-5 col-sm-12 mt-4 mt-md-0">
            <div class = "card">
               <div class = "card-body">
                  <h3 class = "card-title"><?php echo $unitario['NM_PRODUTO']; ?></h3>
                  <p class = "card-text mt-4"><?php echo $unitario['DS_DESCRIÇÃO']; ?></p>
                  <p class = "font-weight-bold mt-5">
                  <h3 = class = "text-danger"><?php echo $unitario['VL_PRECO']; ?></h3>
                  </p>
                  <button class = "addCar btn btn-primary mt-4" data-id="<?php echo $unitario['CD_INTERNO'] ?>" data-produto="<?php
                     echo $unitario['NM_PRODUTO']?>"  data-session="<?php
                     echo $a;?>">Adicionar ao Carrinho</button>
               </div>
            </div>
            <?php    
               }
               ?>
         </div>
      </div>
      <!-- Modal Login -->
      <!-- Modal -->
      <div class = "modal fade modallogin" id = "exampleModal" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
         <div class = "modal-dialog" role = "document">
            <!-- Conteudo do Modal -->
            <div class = "modal-content">
               <!-- Header do Modal - Título do Modal -->
               <div class = "modal-header bg-dark">
                  <h4 class = "modal-title text-light">Necessário Login</h4>
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
      <!-- fim Modal Login -->
   </div>
</body>
<?php include('Footer_teste.php') ?>