<!-- AVISO! Algumas tags estão com o style modificado diretamente por este documento devido aos bugs do Cloud 9 em linkar o style.css (João sabe do que eu estou falando) -->
<!-- Navbar -->
<?php 
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
         <!-- Formulário de busca -->
         <div class = "col-lg-3 pt-3">
            <!-- div para espaçamento - NÃO MEXER -->
            <div class = "pb-3 d-none d-lg-block">
               <!-- Card de busca(usado para organizar dentro de um bloco) -->
               <div class = "card">
                  <!-- conteúdo do formulário de busca -->
                  <div class = "card-body">
                     <!-- Row Título -->
                     <div class = "row">
                        <!-- Tamanho -->
                        <div class = "col-md-12">
                           <!-- Título -->
                           <h3 class = "card-title text-center pt-1">Busca Avançada</h3>
                        </div>
                        <!-- Tamanho -->
                     </div>
                     <!-- Row Título -->
                     <!-- Row Subtítulo - Categoria -->
                     <div class = "row pt-3">
                        <!-- Tamanho -->
                        <div class = "col-md-12">
                           <!-- Subtítulo -->
                           <h5 class = "text-center pb-2">Categoria</h5>
                        </div>
                        <!-- tamanho -->
                     </div>
                     <!-- Row Subtítulo - Categoria -->
                     <!-- Row Buscador -->
                     <div class = "row">
                        <!-- Tamanho -->
                        <div class = "col-md-12">
                           <!-- Buscador -->
                           <form class = "form-inline pt-2">
                              <!-- Conteúdo Form -->
                              <div class = "input-group mx-auto">
                                 <!-- Campo de pesquisa -->
                                 <input type = "text" class = "form-control" placeholder = "Pesquisar produto">
                                 <!-- Botão -->
                                 <div class = "input-group-append">
                                    <button class = "btn btn-secondary" type = "button" id = "button-addon2">Busca</button>
                                 </div>
                                 <!-- Botão -->
                              </div>
                              <!-- Conteúdo Form -->
                           </form>
                           <!-- Buscador -->
                        </div>
                     </div>
                     <!-- Row Buscador -->
                     <!-- Row Checkbox -->
                     <div class = "row">
                        <!-- Tamanho -->
                        <div class = "col-md-12">
                           <!--puxando as categorias do banco de dados-->
                           <?php
                              $categorias =ListarCategoria();
                              while ($categoria = $categorias->fetch_array()){
                              
                              
                              ?>
                           <!-- Checkbox - Alimentos Básicos -->
                           <div class = "form-group form-check">
                              <!-- Checkbox -->
                              <input type = "checkbox" class = "form-check-input" id = "<?php echo $categoria['CD_CATEGORIA']; ?>">
                              <!-- Nome -->
                              <label class = "form-check-label" for = "<?php echo $categoria['NM_CATEGORIA']; ?>"><?php echo $categoria['NM_CATEGORIA']; ?></label>
                           </div>
                           <?php
                              }
                              ?>
                        </div>
                        <!--Tamanho -->
                     </div>
                     <!-- Row Checkbox -->
                     <!-- Row Subtítulo - Preço -->
                     <div class = "row pt-3">
                        <!-- tamanho -->
                     </div>
                     <!-- Row Subtítulo - Preço -->
                     <!-- Row Buscador -->
                     <div class = "row">
                     </div>
                     <!-- Row Buscador -->
                     <!-- Row Checkbox -->
                     <div class = "row">
                        <!-- Tamanho -->
                        <div class = "col-md-12">
                        </div>
                        <!--Tamanho -->
                     </div>
                     <!-- Row Checkbox -->
                     <!-- Row Subtítulo - FABRICANTE -->
                     <div class = "row pt-3">
                        <!-- Tamanho -->
                        <div class = "col-md-12">
                           <!-- Subtítulo -->
                           <h5 class = "text-center pb-2">Fabricante</h5>
                        </div>
                        <!-- tamanho -->
                     </div>
                     <!-- Row Subtítulo - Marca -->
                     <!-- Row Buscador -->
                     <div class = "row">
                        <!-- Tamanho -->
                        <div class = "col-md-12">
                           <!-- Buscador -->
                           <form class = "form-inline pt-2">
                              <!-- Conteúdo Form -->
                              <div class = "input-group mx-auto">
                                 <!-- Campo de pesquisa -->
                                 <input type = "text" class = "form-control" placeholder = "Fabricante">
                                 <!-- Botão -->
                                 <div class = "input-group-append">
                                    <button class = "btn btn-secondary" type = "button" id = "button-addon2">Busca</button>
                                 </div>
                                 <!-- Botão -->
                              </div>
                              <!-- Conteúdo Form -->
                           </form>
                           <!-- Buscador -->
                        </div>
                     </div>
                     <!-- Row Buscador -->
                     <!-- Row Checkbox -->
                     <div class = "row">
                        <!-- Tamanho -->
                        <div class = "col-md-12">
                           <div class = "form-group form-check">
                              <!-- Checkbox -->
                              <input type = "checkbox" class = "form-check-input" id = "0">
                              <!-- Nome -->
                              <label class = "form-check-label" for = "Todos Os Fabricantes">Todos</label>
                           </div>
                           <?php
                              $fabricantes = ListarFabricanteBusca();
                              while($fabricante = $fabricantes->fetch_array()){
                              
                              ?>
                           <!-- Checkbox - Mais famosas -->
                           <div class = "form-group form-check">
                              <!-- Checkbox -->
                              <input type = "checkbox" class = "form-check-input" id = "<?php echo $fabricante['CD_FABRICANTE']; ?>">
                              <!-- Nome -->
                              <label class = "form-check-label" for = "<?php echo $fabricante['NM_FABRICANTE']; ?>"><?php echo $fabricante['NM_FABRICANTE']; ?></label>
                           </div>
                           <?php
                              }
                              ?>
                           <!-- Checkbox - Mais famosas -->
                        </div>
                        <!--Tamanho -->
                     </div>
                     <!-- Row Checkbox -->
                  </div>
                  <!-- conteúdo do formulário de busca -->
               </div>
               <!-- Card de busca -->
            </div>
            <!-- div para espaçamento - não mexer -->
            <!-- Versão Mobile do formulário de Busca - "Essa versão é mais simples que a versão de PC para não ficar algo massante e enorme na tela do usuário" -->
            <div class = "d-lg-none">
               <!-- Navbar -->
               <nav class = "navbar navbar-expand-lg navbar-light">
                  <!-- Título -->
                  <a class = "navbar-brand">Categorias</a>
                  <!-- Ícone -->
                  <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">
                  <span class = "navbar-toggler-icon"></span>
                  </button>
                  <!-- Ícone -->
                  <!-- Conteúdo do formulário de busca(Versão Mobile) -->
                  <div class = "collapse navbar-collapse left-float" id = "navbarSupportedContent">
                     <!-- Row Buscador -->
                     <div class = "row">
                        <!-- Tamanho -->
                        <div class = "col-md-12">
                           <!-- Buscador -->
                           <form class = "form-inline pt-2">
                              <!-- Conteúdo Form -->
                              <div class = "input-group mx-auto pt-3">
                                 <!-- Campo de pesquisa -->
                                 <input type = "text" class = "form-control" name="buscacategoria" placeholder = "Pesquisar Categoria">
                                 <!-- Botão -->
                                 <div class = "input-group-append">
                                    <button class = "btn btn-success" type = "button" id = "button-addon2">Busca</button>
                                 </div>
                                 <!-- Botão -->
                              </div>
                              <!-- Conteúdo Form -->
                           </form>
                           <!-- Buscador -->
                        </div>
                     </div>
                     <!-- Row Buscador -->
                     <!-- Row Checkbox -->
                     <div class = "row">
                        <!-- Tamanho -->
                        <div class = "col-md-12">
                           <!--puxando as categorias do banco de dados-->
                           <?php
                              $categorias =ListarCategoria();
                              while ($categoria = $categorias->fetch_array()){
                              
                              
                              ?>
                           <!-- Checkbox - Alimentos Básicos -->
                           <div class = "form-group form-check">
                              <!-- Checkbox -->
                              <input type = "checkbox" class = "form-check-input" id = "<?php echo $categoria['CD_CATEGORIA']; ?>">
                              <!-- Nome -->
                              <label class = "form-check-label" for = "<?php echo $categoria['NM_CATEGORIA']; ?>"><?php echo $categoria['NM_CATEGORIA']; ?></label>
                           </div>
                           <?php
                              }
                              ?>
                        </div>
                        <!--Tamanho -->
                     </div>
                     <!-- Row Checkbox -->
                  </div>
                  <!-- Conteúdo do formulário de busca(Versão Mobile) -->
               </nav>
               <!-- Navbar -->
            </div>
            <!-- Versão Mobile do formulário de Busca -->
         </div>
         <!-- Formulário de busca -->
         <!-- Exibiçao dos resultados da busca -->
         <div class = "col-lg-9 pt-2">
            <form action="produto.php" method="get" >
               <!-- Row dos cards de exibição dos produtos -->
               <div class = "row">
                  <!-- Tamanho do Card -->
                  <?php 
                     $pesquisas = BuscaProduto($busca);
                     while ($pesquisa = $pesquisas->fetch_array()){
                     ?>
                  <div class = "col-md-6 col-lg-3 col-sm-4 col-12">
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
                           <a href = "<?php echo 'produto.php?cd='.$pesquisa['CD_INTERNO'];?>" class = "btn-block btn busca-bg-card">Ver Mais...</a>
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
            </form>
         </div>
         <!-- exibição dos resultados da Busca -->
      </div>
      <!-- Row principal da página -->
   </div>
   <!-- Conteúdo principal da página -->
</body>
<?php include('Footer_teste.php'); ?>