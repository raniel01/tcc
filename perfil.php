<?php
   include('head_perfil.php')
   ?>   
<div class = "container-fluid">
   <div class = "row">
      <div class = "col-md-6 col-sm-12">
         <div class = "card bg-light">
            <div class = "card-header">Meu Saldo</div>
            <div class = "card-body">
               <?php 
                  if(isset($_SESSION['id'])){
                     $a = $_SESSION['id'];
                  }
                  $usuarios = ListarUsuarioCerto($a);
                  while ($usuario = $usuarios->fetch_array()){
                  ?> 
               <h5 class = "card-title">R$ <?php  echo($usuario['VL_SALDO']); ?></h5>
            </div>
         </div>
      </div>
      <div class = "col-md-6 col-sm-12  mt-3 mt-md-0">
         <div class = "card bg-light">
            <div class = "card-header">Compra Créditos</div>
            <div class = "card-body">
               <h5 class = "card-title">R$0,00</h5>
               <?php } ?>    
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
      <div class = "col-md-3 col-sm-12  mt-3 mt-md-0">
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
      <div class = "col-md-3 col-sm-12  mt-3 mt-md-0">
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
      <div class = "col-md-3 col-sm-12  mt-3 mt-md-0">
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
      <div class = "col-md-3 col-sm-12  mt-3 mt-md-0">
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
</div>
</div>
<?php 
   include('footer_perfil.php');
   ?>