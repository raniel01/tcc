<!-- AVISO! Algumas tags estão com o style modificado diretamente por este documento devido aos bugs do Cloud 9 em linkar o style.css (João sabe do que eu estou falando) -->
<!-- Navbar -->
<?php 
   $title = " Busca";
   include('header_navbar.php');
   
   ?>
<body>
   <!-- Navbar -->
   <!-- Conteúdo principal da página -->
   <div class = "container-fluid">
      <!-- Row principal da página -->
      <div class = "row pt-2">
         <?php
            if($busca == ""){
                echo '<h5 class="text-center col-md-12">Exibindo Todos Os Resultados</h5>';
            }else{
                echo '<h5 class="text-center col-md-12">Exibindo Os Resultados em <b>'.$busca.'</b></h5>';
            } 
            ?>
         <!-- Exibiçao dos resultados da busca -->
         <div class = "col-lg-12 pt-2">
            <!--<form action="produto.php" method="get" >-->
               <!-- Row dos cards de exibição dos produtos -->
               <div class = "row">
                  <!-- Tamanho do Card -->
                  <?php
                     $produtos = 'SELECT * FROM TB_PRODUTO WHERE NM_PRODUTO LIKE "%'.$_GET['busca'].'%" ORDER BY CD_INTERNO DESC';
                     $resultados = $GLOBALS['con']->query($produtos);
                     
                     $total = $resultados->num_rows;
                     $porpagina = 12;
                     $total_pagina = ceil($total/$porpagina);
                     
                     $pagina = isset($_GET['p']) ? $_GET['p'] : 1;
                     $inicio = ($pagina * $porpagina) - $porpagina;
                     
                     $exibicao = 'SELECT * FROM TB_PRODUTO WHERE NM_PRODUTO LIKE "%'.$_GET['busca'].'%" ORDER BY CD_INTERNO DESC LIMIT '.$inicio.', '.$porpagina.'';
                     $resultado = $GLOBALS['con']->query($exibicao);
                     
                     while($pesquisa = $resultado->fetch_array()){
                     
                     /*$pesquisas = BuscaProduto($busca);
                     while ($pesquisa = $pesquisas->fetch_array()){*/
                     ?>
                  <div class = "col-md-4 col-lg-3 col-sm-6 col-12">
                     <!-- Card -->
                     <div class = "card mt-2 border-none shadow">
                        <!-- Imagem do Card -->
                        <img class = "card-img-top img-fluid" src = "<?php echo $pesquisa['DS_FOTO_PRODUTO']; ?>">
                        <!-- Corpo do Card -->
                        <div class = "card-body">
                           <!-- Título do Card -->
                           <h5 class = "card-title text-center" style = "min-height: 2.3em; max-height: 2.3em;"> <?php
                              // Descrição do Produto
                              $texto = $pesquisa['NM_PRODUTO'];
                              
                              // Limite de texto do titulo                                    
                              $limite = 30;
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
                                 echo '<p class="text-center">R$ '.$pesquisa['VL_PRODUTO'].'</p>';
                                 
                                 ?>
                           </p>
                           <!-- Descrição do produto -->
                           <!-- Botão -->
                           <button data-session="<?php
                     echo $s;?>" data-cd="<?php echo $pesquisa['CD_INTERNO']; ?>"  class = "addCar btn-block btn busca-bg-card">Ver Mais...</button>
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
           <!-- </form>
            -->
            <div class="row">
               <div class = "col-auto mx-auto pt-2">
                  <!--Paginação desktop-->
                  <div class="d-none d-lg-block">
                     <nav aria-label="Page navigation example">
                       <ul class="pagination busca-a-pagination">
                      <?php
                              $cor = ($pagina==$i) ? "#343a40":"#343a40";
                              $font = ($pagina==$i) ? "white":"#ff7400";
                              
                              if($pagina > 2){
                                 echo '<li class="page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?cd='.$_GET['busca'].'&p='.($pagina - 2).'"  style="color: black;"><<</a></li>';
                              }
                              
                              if($pagina > 1){
                                 echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link"  href="?cd='.$_GET['busca'].'&p='.($pagina - 1).'"  style="color: black;">Anterior</a></li>';
                              }
                              
                              for($i=1;$i<=$total_pagina;$i++){
                                 echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link"  href="?cd='.$_GET['busca'].'&p='.$i.'" style="background-color: '.$cor.'; color: '.$fonte.';">'.$i.'</a></li>';
                              }
                              
                              if($pagina < $total_pagina){
                                 echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link"  href="?cd='.$_GET['busca'].'&p='.($pagina + 1).'" style="color: black;">Próximo</a></li>';
                              }
                              
                              if($pagina < $total_pagina - 1){
                                 echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?cd='.$_GET['busca'].'&p='.($pagina + 2).'" style="color: black;">>></a></li>';
                              }
                           ?>
                    </ul>
                     </nav>
                  </div>
                  <!--Paginação desktop-->
                  <!--Paginação Mobile -->
                  <div class="d-lg-none">
                     <nav aria-label = "Page navigation example">
                        <ul class="pagination busca-a-pagination">
                        <?php
                          $cor = ($pagina==$i) ? "#343a40":"#343a40";
                           $font = ($pagina==$i) ? "white":"#ff7400";
                           if($pagina > 2){
                               echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?cd='.$_GET['busca'].'&p='.($pagina - 2).'"> << </a></li>';
                           }
                           if($pagina > 1){
                               echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?cd='.$_GET['busca'].'&p='.($pagina - 1).'"> Anterior </a></li>';
                           }
                              /*for($i=1;$i<=$total_pagina;$i++){
                                  if($pagina<10 && $pagina>15){
                              $cor = ($pagina==$i) ? "#343a40":"#ff7400";
                              $font = ($pagina==$i) ? "#343a40":"White";
                               echo '<li class = "page-item"><a class = "page-link" href="?p='.$i.'" style="background-color: '.$cor.' ; color:'.$font.';">'.$i.'</a></li>';
                                  }*/
                           
                           if($pagina < $total_pagina){
                              echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link"  href="?cd='.$_GET['busca'].'&p='.($pagina + 1).'"> Próximo </a></li>';
                           }
                           if($pagina < $total_pagina - 1){
                               echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?cd='.$_GET['busca'].'&p='.($pagina + 2).'"> >> </a></li>';
                           }
                           
                           ?>
                     </ul>
                     </nav>
                  </div>
                  <!--Paginação Mobile -->
               </div>
            </div>
            
         </div>
         <!-- exibição dos resultados da Busca -->
      </div>
      <!-- Row principal da página -->
   </div>
   <!-- Conteúdo principal da página -->
</body>
<?php include('Footer_teste.php'); ?>