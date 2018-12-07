<?php 
   session_start();
   $title = " Aqui sua compra fica mais facil!";
   include('header_navbar.php');
   if(isset($_SESSION['id'])){
         $a = $_SESSION['id'];
   }
   if(isset($_REQUEST['botao'])){
      CadastrarCarrinho($_REQUEST['quantidade'],$_REQUEST['cd'],$_SESSION['id']);
         	echo '<script> window.location="categoria.php";</script>';
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
         <form action='produto.php?cd=<?php echo $buscaunitaria; ?>' method="post">
            <div class = "card">
               <div class = "card-body">
                  <h3 class = "card-title"><?php echo $unitario['NM_PRODUTO']; ?></h3>
                  <p class = "card-text mt-4"><?php echo $unitario['DS_DESCRIÇÃO']; ?></p>
                  <p class = "font-weight-bold mt-5">
                  <h3 = class = "text-danger"><?php echo $unitario['VL_PRECO']; ?></h3>
                  </p>
                  <input type="number" name="quantidade" class="form-control number" value="1"/>
                  <input type="submit" name="botao" class = "btn btn-block btn-primary mt-4" data-id="<?php echo $unitario['CD_INTERNO'] ?>" data-produto="<?php
                     echo $unitario['NM_PRODUTO']?>"  data-session="<?php
                     echo $a;?>" value="Adicionar ao Carrinho">
               </div>
            </div>
            <?php    
               }
               ?>
         </form>
      </div>
      </div>
   </div>
</body>
<?php include('Footer_teste.php') ?>