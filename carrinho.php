<!DOCTYPE html>
<?php

session_start();
include ('header_navbar.php');
?>
<style type="text/css">
    
</style>
<body>
    
    <script>
/*    $(document).ready(function(){
       
        var carrinho = localStorage.car;
        alert(carrinho);
       
       
       
         
            $('#produto').load('conexao.php?func=session&carrinho='+carrinho);
         
         
    });
*/
    </script>
<div class="container">
    <div class="row" id="produto">
       
    </div>
    <div class="container">
        <div class="col-12">&nbsp;</div>
        <div class="row">
            <div class="col-md-12">
                <input type="button" class="btn btn-block btn-success finalizar" value='Finalizar Compra'/>
            </div>
        </div>
        <div class="col-12">&nbsp;</div>
        <!-- formulario pagseguro lightbox -->
    	<form id="comprar" action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
    		<input type="hidden" name="code" id="code" value="" />
    	</form>
    </div>
</div>
</body>
<?php 
include ('Footer_teste.php');
?>