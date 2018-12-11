<!-- Head -->
<?php $title = " Carrinho"; include('header_navbar.php'); ?>
<!-- Head -->
        <!--Style-->
        <link rel = "stylesheet" type = "text/css" href = "css/carrinho.css">
        <!-- Style -->
   <!-- Body -->
   <body>
      <!-- Container -->
      <div class = "container">
                 <?php
                          $sql = "SELECT C.CD_CARRINHO AS 'CD',
                                       C.ID_USUARIO AS 'USUARIO',
                                       C.ID_INTERNO AS 'CODIGO',
                                       P.NM_PRODUTO AS 'PRODUTO',
                                       P.DS_FOTO_PRODUTO AS 'FOTO',
                                       C.QT_PRODUTO AS 'QUANTIDADE DO PRODUTO',
        				               P.DS_DESCRIÇÃO AS 'DESCRICAO DO PRODUTO',
        				               P.VL_PRODUTO AS 'VALOR DO PRODUTO'
        				               FROM TB_PRODUTO P , TB_CARRINHO C
        				               WHERE C.ID_INTERNO = P.CD_INTERNO
        				               AND C.ID_USUARIO =".$_SESSION['id']." ORDER BY C.CD_CARRINHO DESC";
                          $res = $GLOBALS['con']->query($sql);
                          
                          $total = $res->num_rows;
                          $porpagina = 12;
                          $total_pagina = ceil($total/$porpagina);
                          
                          $pagina = isset($_GET['c']) ? $_GET['c'] : 1;
                          $inicio = ($pagina * $porpagina) - $porpagina;
                          
                          $sql = "SELECT C.CD_CARRINHO AS 'CD',
                                       C.ID_USUARIO AS 'USUARIO',
                                       C.ID_INTERNO AS 'CODIGO',
                                       P.NM_PRODUTO AS 'PRODUTO',
                                       P.DS_FOTO_PRODUTO AS 'FOTO',
                                       C.QT_PRODUTO AS 'QUANTIDADE DO PRODUTO',
        				               P.DS_DESCRIÇÃO AS 'DESCRICAO DO PRODUTO',
        				               P.VL_PRODUTO AS 'VALOR DO PRODUTO'
        				               FROM TB_PRODUTO P , TB_CARRINHO C
        				               WHERE C.ID_INTERNO = P.CD_INTERNO
        				               AND C.ID_USUARIO =".$_SESSION['id']." ORDER BY C.CD_CARRINHO ASC LIMIT $inicio, $porpagina";
                          $res = $GLOBALS['con']->query($sql);
                     if($res->num_rows == 0){
                    ?>
                        <div class="row"><div class="col-md-12"><h5 class="text-center">Nenhum Produto No Carrinho</h5></div></div>
                    <?php
                      }else{
                      // $a = MostrandoCarrinho($_SESSION['id']);
                      // Se tiver Produtos no carrinho o while é ativado listando uma row para cada produto
                         while($b = $res->fetch_array()){
                         
                    ?>
                         <!-- Row -->
                        <form action="carrinho.php" method="post">
                         <div class = "row">
                            <!-- Tamanho -->
                            <div class = "col-12">
                               <!-- Card Horizontal -->
                               <div class = "card">
                                  <!-- Conteúdo do card -->
                                  <div class = "card-body">
                                     <!-- Div Imagem -->
                                     <div class = "div-img">
                                        <!-- Imagem do produto -->
                                        <img src = "<?php echo $b['FOTO']; ?>" class = "img-fluid img-card-horizontal">
                                        <!-- Div de ampliação --                         
                                        <div class = "ampliado">
                                           <!-- Título na imagem -- Removi pois não vi necessidade da exibição de 2 títulos!
                                           <div class = "title-img-ampliado">
                                              <!-- Nome do produto --
                                              <label>
                                              <?php 
                                                 // Estes comandos irão retornar somente a primeira palavra de uma frase, nosso exemplo é: "Nuggets são resto das amigas u.u". Foi retornado da $string somente a primeira palavra: "NUGGETS".
                                                    
                                                 // Limite de texto do titulo  
                                                      $texto = $b['DESCRICAO DO PRODUTO'];
                                                      $limite = 10;
                                                      $tamanho = strlen($texto);
                                                      
                                                      if($tamanho <= $limite){
                                                          echo $texto;
                                                      }else{
                                                          $resumo = trim(substr($texto, 0, $limite))."...";
                                                          echo $resumo;
                                                      }
                                                
                                                 ?>
                                              </label>
                                              <!-- /Nome do produto --
                                           </div>
                                           <!-- Título na imagem --
                                           <img src = "<?php echo $b['FOTO']; ?>" class = "img-ampliado">
                                        </div>
                                        <!-- /Div de ampliação --> 
                                     </div>
                                     <!-- /Div imagem -->
                                     <!-- Div descrição -->
                                     <div class = "div-info">
                                        <!-- Título -->
                                        <h3 class = "title-mobile"><?php echo $b['NOME DO PRODUTO'];?></h3>
                                        <!-- Descrição -->
                                        
                                        <p class = "descricao">
                                            <?php
                                         // Limite de texto do titulo  
                                              $texto = $b['DESCRICAO DO PRODUTO'];
                                              $limite = 50;
                                              $tamanho = strlen($texto);
                                              
                                              if($tamanho <= $limite){
                                                  echo $texto;
                                              }else{
                                                  $resumo = trim(substr($texto, 0, $limite))."...";
                                                  echo $resumo;
                                              }
                                        ?>
                                        </p>
                                     </div>
                                     <!-- /Div descrição -->
                                     <!-- Div remover -->
                                     <div class = "qtde">
                                        <!-- Quantidade -->
                                        <input type = "number" name="quantidade" quantidade="<?php echo $b['QUANTIDADE DO PRODUTO']; ?>" class="form-control quantidade" value="">
                                        <input type = "hidden" name="id" value="<?php echo $b['CODIGO']; ?>">
                                     </div>
                                     <!-- /Div remover -->
                                     <!-- Div quantidade -->
                                         <div class = "qtde">
                                             <!-- Atualizar -->
                                            <input type = "submit"  name="atualizar" class=" btn btn-block btn-sucess" value="Atualizar">
                                         </div>
                                         <div class = "qtde">
                                             <!-- Remover -->
                                            <input type = "submit" name="remover" class=" btn btn-block btn-danger" value="Remover">
                                         </div>
                                     <!-- /Div quantidade -->
                                     <!-- Div preço -->
                                     <div class = "preco">
                                        <!-- Preço -->
                                        <label class = "font-weight-bold"> Preço : R$<?php echo $b['VALOR DO PRODUTO']; ?></label>
                                     </div>
                                     <!-- /Div preço -->
                                     <!--Total-->
                                     <div class = "preco">
                                        <!-- total -->
                                        <label class = "font-weight-bold"> 
                                        Total: R$
                                        <?php 
                                        $total = $b['QUANTIDADE DO PRODUTO'] * $b['VALOR DO PRODUTO'];
                                        echo $total; 
                                        ?></label>
                                     </div>
                                     <!-- /Total-->
                                  </div>
                                  <!-- /Conteúdo do card -->
                               </div>
                               <!-- /Card -->
                            </div>
                            <!-- /Tamanho -->
                         </div>
                         </form>
                         <!-- /Row -->
                        <?php
                                }
                                //fim do while
                              }
                              //fim do else
                        ?>
        
        
            <!-- Row da paginação -->
               <div class="row">
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
                                echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?c='.($pagina - 2).'"> << </a></li>';
                            }
                            if($pagina > 1){
                                echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?c='.($pagina - 1).'"> Anterior </a></li>';
                            }
                               /*for($i=1;$i<=$total_pagina;$i++){
                                   if($pagina<10 && $pagina>15){
                               $cor = ($pagina==$i) ? "#343a40":"#ff7400";
                               $font = ($pagina==$i) ? "#343a40":"White";
                                echo '<li class = "page-item"><a class = "page-link" href="?p='.$i.'" style="background-color: '.$cor.' ; color:'.$font.';">'.$i.'</a></li>';
                                   }*/
                            
                            if($pagina < $total_pagina){
                               echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link"  href="?c='.($pagina + 1).'"> Próximo </a></li>';
                            }
                            if($pagina < $total_pagina - 1){
                                echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?c='.($pagina + 2).'"> >> </a></li>';
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
       
                                 echo '<li class = "page-item"><a style=" background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?c='.($pagina - 2).'"> << </a></li>';
                             }
                             if($pagina > 1){
                                 echo '<li class = "page-item"><a style="background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?c='.($pagina - 1).'"> Anterior </a></li>';
                             }
                                for($i=1;$i<=$total_pagina;$i++){
                                    
                                $cor = ($pagina==$i) ? "#343a40":"#343a40";
                                $font = ($pagina==$i) ? "white":"#ff7400";
                                 echo '<li class = "page-item"><a class = "page-link" href="?c='.$i.'" style="background-color: '.$cor.' ; color:'.$font.'; border: none;">'.$i.'</a></li>';
                                       
                             }
                             if($pagina < $total_pagina){
                                echo '<li class = "page-item"><a style="background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link"  href="?c='.($pagina + 1).'"> Próximo </a></li>';
                             }
                             if($pagina < $total_pagina - 1){
                                 echo '<li class = "page-item"><a style="background-color: '.$cor.' ; color:'.$font.'; border: none;" class = "page-link" href="?c='.($pagina + 2).'"> >> </a></li>';
                             }
                             
                             ?>
                      </ul>
                   </nav>
                </div>
                <!-- Paginação -->
             </div>
             <!-- tamanho -->
          </div>
               <div class="row">
            <div class="col-12 text-right">
                <input type="button" id="finalizar" class="btn
                btn-success w-button" value='Finalizar Compra'/>
            </div>
        </div>
            <!-- Row da paginação -->
      </div>
      <!-- /Container -->
   </body>
   <!-- Body -->
        <!-- formulario pagseguro lightbox -->
        <form id="comprar" action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
             <input type="hidden" name="code" id="code" value="" />
          </form>
         <!-- script do pagseguro -->	
    	<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
       
<!--Footer-->
<?php include('Footer_teste.php'); ?>
<!--Footer-->