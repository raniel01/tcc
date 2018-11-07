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
</div>
</body>
<?php 
include ('Footer_teste.php');
?>