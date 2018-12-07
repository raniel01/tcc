<?php $title = " Produtos"; include('header_navbar.php');
$idcategoria = $_GET['p'];
?>
<!-- Conteúdo -->
<body>
   <!-- Container -->
   <div class = "container-fluid">
      <?php
         //mostrando todos os produtos
         $sql = "SELECT * FROM TB_PRODUTO  WHERE ID_CATEGORIA = $idcategoria ORDER BY CD_INTERNO DESC";
         $produtos  = $GLOBALS['con']->query($sql);
         
         $total = $produtos->num_rows;
         
         $porpagina = 12;
         
         $total_pagina = ceil($total/$porpagina);
         
         $pagina = isset($_GET['c']) ? $_GET['c'] : 1;
         $inicio = ($pagina * $porpagina) - $porpagina;
         
         $sql = "SELECT * FROM TB_PRODUTO WHERE ID_CATEGORIA = $idcategoria ORDER BY CD_INTERNO DESC LIMIT $inicio, $porpagina";
         $res = $GLOBALS['con']->query($sql);
         
             
         ?>
      <!-- Row Título -->
      <div class = "row">
         <!-- Tamanho -->
         <div class = "col-12 pt-2">
            <h3 class = "text-center">Exibindo todos os resultados desta categoria.</h3>
         </div>
         <!-- Tamanho -->
      </div>
      <!-- Row Título -->
      <!-- Row -->
      <div class = "row">
         <!-- Tamanho -->
         <div class = "col-12">
            <!-- Exibiçao dos resultados da busca -->
           <!-- <form action="produto.php" method="get" >-->
               <div class = "col-lg-12 pt-2">
                  <!-- Row dos cards de exibição dos produtos -->
                  <div class = "row">
                     <!-- Tamanho do Card -->
                     <?php 
                        while($produto = $res->fetch_array()){
                        
                        
                        
                        ?>
                     <div class = "col-md-4 col-lg-3 col-sm-6 col-12">
                        <!-- Card -->
                        <div class = "card mt-2 shadow border-none">
                           <!-- Imagem do Card -->
                           <img class = "card-img-top img-fluid" src = "<?php echo $produto['DS_FOTO_PRODUTO']; ?>">
                           <!-- Corpo do Card -->
                           <div class = "card-body">
                              <!-- Título do Card -->
                              <h5 class = "card-title text-center"> <?php
                                 // Descrição do Produto
                                 $texto = $produto['NM_PRODUTO'];
                                 
                                 // Limite de texto do titulo                                    
                                 $limite = 20;
                                 $tamanho = strlen($texto);
                                 
                                 if($tamanho <= $limite){
                                     echo $texto;
                                 }else{
                                     $resumo = trim(substr($texto, 0, $limite))."...";
                                     echo $resumo;
                                 }
                                 ?></h5>
                              <!-- Descrição do Produto -->
                              <p class = "card-text div-card">
                                 <?php
                                    //  limite de Descrição do Produto
                                    echo '<p class="text-center">R$ '.$produto['VL_PRODUTO'].'</p>';
                                    
                                    ?>
                              </p>
                              <!-- Descrição do produto -->
                              <!-- Botão -->
                              <button data-session="<?php
                     echo $s;?>" data-cd="<?php echo $produto['CD_INTERNO']; ?>" class = "addCar btn-block btn busca-bg-card">Ver Mais...</button>
                           </div>
                           <!-- Corpo do Card -->
                        </div>
                        <!-- Card -->
                     </div>
                     <!-- Tamanho do Card -->
                     <?php  
                        } 
                        ?>
                  </div>
                  <!-- Row dos cards de exibição dos produtos -->
               </div>
               <!-- exibição dos resultados da Busca -->
          <!--  </form>-->
         </div>
         <!-- Row principal da página -->
      </div>
      <!-- Tamanho -->
      <!-- Row -->
      <!-- Row da paginação -->
      <div class = "row">
         <!-- tamanho -->
         <div class = "col-auto mx-auto pt-2">
            <!-- Paginação -->
            <div class="d-lg-none">
               <nav aria-label = "Page navigation example ">
                  <ul class="pagination busca-a-pagination">
                     <?php
                       $cor = ($pagina==$i) ? "#343a40":"#343a40";
                        $font = ($pagina==$i) ? "white":"#ff7400";
                        if($pagina > 2){
                            echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?p='.$idcategoria.'&c='.($pagina - 2).'"> << </a></li>';
                        }
                        if($pagina > 1){
                            echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?p='.$idcategoria.'&c='.($pagina - 1).'"> Anterior </a></li>';
                        }
                           /*for($i=1;$i<=$total_pagina;$i++){
                               if($pagina<10 && $pagina>15){
                           $cor = ($pagina==$i) ? "#343a40":"#ff7400";
                           $font = ($pagina==$i) ? "#343a40":"White";
                            echo '<li class = "page-item"><a class = "page-link" href="?p='.$i.'" style="background-color: '.$cor.' ; color:'.$font.';">'.$i.'</a></li>';
                               }*/
                        
                        if($pagina < $total_pagina){
                           echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link"  href="?p='.$idcategoria.'&c='.($pagina + 1).'"> Próximo </a></li>';
                        }
                        if($pagina < $total_pagina - 1){
                            echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?p='.$idcategoria.'&c='.($pagina + 2).'"> >> </a></li>';
                        }
                        
                        ?>
                  </ul>
               </nav>
            </div>
            <!-- Paginação -->
            <!-- Paginação desktop -->
            <div class="d-none d-lg-block">
               <nav aria-label = "Page navigation example ">
                  <ul class="pagination busca-a-pagination">
                     <?php
                        $cor = ($pagina==$i) ? "#343a40":"#343a40";
                        $font = ($pagina==$i) ? "white":"#ff7400";
                            
                         if($pagina > 2){
   
                             echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?p='.$idcategoria.'&c='.($pagina - 2).'"> << </a></li>';
                         }
                         if($pagina > 1){
                             echo '<li class = "page-item"><a style="background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?p='.$idcategoria.'&c='.($pagina - 1).'"> Anterior </a></li>';
                         }
                            for($i=1;$i<=$total_pagina;$i++){
                                
                            $cor = ($pagina==$i) ? "#343a40":"#343a40";
                            $font = ($pagina==$i) ? "white":"#ff7400";
                             echo '<li class = "page-item"><a class = "page-link" href="?p='.$idcategoria.'&c='.$i.'" style="background-color: '.$cor.' ; color:'.$font.'; border: none;">'.$i.'</a></li>';
                                   
                         }
                         if($pagina < $total_pagina){
                            echo '<li class = "page-item"><a style="background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link"  href="?p='.$idcategoria.'&c='.($pagina + 1).'"> Próximo </a></li>';
                         }
                         if($pagina < $total_pagina - 1){
                             echo '<li class = "page-item"><a style="background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?p='.$idcategoria.'&c='.($pagina + 2).'"> >> </a></li>';
                         }
                         
                         ?>
                  </ul>
               </nav>
            </div>
            <!-- Paginação -->
         </div>
         <!-- tamanho -->
      </div>
      <!-- Row da paginação -->
   </div>
   <!-- Container -->
    <!-- Modal Login -->
      <!-- Modal -->
      <div class = "modal fade modallogin" id = "exampleModal" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
         <div class = "modal-dialog" role = "document">
            <!-- Conteudo do Modal -->
            <div class = "modal-content">
               <!-- Header do Modal - Título do Modal -->
               <div class = "modal-header bg-dark">
                  <h4 class = "modal-title text-light">Necessário Login</h4>
                  <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden="true">&times;</span></button>
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
</body>
<!-- Conteúdo -->
<?php include('Footer_teste.php'); ?>