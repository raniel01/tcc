<?php include('header_navbar.php');
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
            <form action="produto.php" method="get" >
               <div class = "col-lg-12 pt-2">
                  <!-- Row dos cards de exibição dos produtos -->
                  <div class = "row">
                     <!-- Tamanho do Card -->
                     <?php 
                        while($produto = $res->fetch_array()){
                        
                        
                        
                        ?>
                     <div class = "col-md-6 col-lg-3 col-sm-4 col-12">
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
                              <a href = "<?php echo 'produto.php?cd='.$produto['CD_INTERNO'];?>" class = "btn-block btn busca-bg-card">Ver Mais...</a>
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
            </form>
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
</body>
<!-- Conteúdo -->
<?php include('Footer_teste.php'); ?>