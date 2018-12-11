   <!-- style -->
   <style>
      a{
      color:white;
      }
      a:hover{
      text-decoration:none;
      color:#ff7400;
      }
      #h5_links{
      color:#ff7400;
      }
   </style>
   <!-- style -->
   <!-- Footer -->
   <footer class = "page-footer font-small bg-dark pt-4" style = "background-image: linear-gradient(to bottom, #343a40, #020202 75%);">
      <!-- Footer Links -->
      <div class = "container text-center text-lg-left">
         <!-- Grid row -->
         <div class="row">
            <!-- Grid column -->
            <div class="col text-center d-none d-lg-block">
               <!-- Links -->
               <h5 class="font-weight-bold text-uppercase mt-3 mb-4" id = "h5_links">Ajuda</h5>
               <ul class="list-unstyled text-white">
                  <li>
                     <a href="index.php" rel="noopener">Home</a>
                  </li>
                  <li>
                     <a href="quem_somos.php" rel="noopener">Sobre</a>
                  </li>
                  <li>
                     <a href="termo-uso.php"rel="noopener">Termos de Uso</a>
                  </li>
                  <li>
                     <a href="contato.php" rel="noopener">Contato</a>
                  </li>
                  <li>
                     <a href="youtube.com" rel="noopener">Videos</a>
                  </li>
               </ul>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col text-center">
               <!-- Links -->
               <h5 class="font-weight-bold text-uppercase mt-3 mb-4" id = "h5_links">Navegação</h5>
               <ul class="list-unstyled">
                  <li>
                     <a href="categoria.php" rel="noopener">Produtos</a>
                  </li>
                  <li>
                     <a href="cadastro.php" rel="noopener">cadastro</a>
                  </li>
                  <li>
                     <a href="login.php" rel="noopener">Login</a>
                  </li>
                  <li>
                     <a href="busca.php" rel="noopener">Busca</a>
                  </li>
                  <li>
                     <a href="quem_somos.php" rel="noopener">Quem Somos</a>
                  </li>
               </ul>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col text-center  d-none d-lg-block">
               <!-- Links -->
               <h5 class="font-weight-bold text-uppercase mt-3 mb-4" id = "h5_links">Redes Sociais</h5>
               <ul class="list-unstyled">
                  <li>
                     <a href="https://www.facebook.com/projetomeucarrinho/" target="_blank" rel="noopener">Facebook</a>
                  </li>
                  <li>
                     <a href="https://www.twitter.com/">Twiter</a>
                  </li>
                  <li>
                     <a href="https://www.instagram.com/sitemeucarrinho/" target="_blank" rel="noopener">Instagram</a>
                  </li>
                  <li>
                     <a href="https://www.telegram.com/" rel="noopener">Telegram</a>
                  </li>
                  <li>
                     <a href="https://www.gmail.com/" rel="noopener">E-mail</a>
                  </li>
               </ul>
            </div>
            <!-- Grid column -->
         </div>
         <!-- Grid row -->
      </div>
      <!-- Footer Links -->
      <hr>
      <!-- Mail Input -->
      <ul class="list-unstyled list-inline text-center pt-3">
         <li class="list-inline-item">
            <h5 class="mb-1">RECEBA NOSSAS ATUALIZAÇÕES</h5>
         </li>
         <li class="list-inline-item">
            <div class="input-group mb-3">
               <input type="text" class="form-control" placeholder="exemplo.@mail.com">
               <div class="input-group-append">
                  <button class="btn btn-danger" type="button" id="button-addon2">Enviar</button>
               </div>
            </div>
         </li>
      </ul>
      <!-- Mail Input -->
      <hr>
      <!-- Copyright -->
      <div class = "footer-copyright text-center pb-3">© 2018 Copyright: <b>MEUCARRINHO.COM</b>
      </div>
      <!-- Copyright -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   	<!--<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
   	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>-->
       <script type="text/javascript" src="js/function.js"></script>
       <script type="text/javascript" src="js/scrips.js"></script>
   </footer>
   <!-- Footer -->
   <script>
     if ('serviceWorker' in navigator) {
       console.log("Will the service worker register?");
       navigator.serviceWorker.register('service-worker.js')
         .then(function(reg){
           console.log("Yes, it did.");
         }).catch(function(err) {
           console.log("No it didn't. This happened: ", err)
         });
     }
   </script>
</html>