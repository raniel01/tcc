<?php
   include('head_perfil.1.php')
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
<div class="overlay"></div>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script>
<!-- Popper.JS -->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity = "sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin = "anonymous"></script>
<!-- Bootstrap JS -->
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity = "sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin = "anonymous"></script>
<script type="text/javascript" src="js/function.js"></script>
<script type = "text/javascript">
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
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
   $(document).ready(function () {
       $("#sidebar").mCustomScrollbar({
           theme: "minimal"
       });
   
       $('#dismiss, .overlay').on('click', function () {
           $('#sidebar').removeClass('active');
           $('.overlay').removeClass('active');
       });
   
       $('#sidebarCollapse').on('click', function () {
           $('#sidebar').addClass('active');
           $('.overlay').addClass('active');
           $('.collapse.in').toggleClass('in');
           $('a[aria-expanded=true]').attr('aria-expanded', 'false');
       });
   });
</script>
</body>
</html>