<?php
   include('head_perfil.php')
   ?>   
<div class = "container-fluid">
   <div class = "row">
   </div>
   <hr>
   <div class="container-fluid">
   <div class="row justify-content-center">
      <div class="col-md-10 col-8 ">
         <form aciton="lista.php" method="post">
            <div class="form-group">
               <input type="hidden" name="cd2" id="cd"  value="<?php  echo $_SESSION['id']; ?>">
               <input type="text" name="conteudo" class = "form-control" placeholder ="Adicionar item a sua lista"> 
            </div>
      </div>
      <div class="col-md-1 col-2">
      <button type"submit" class="btn btn-success rounded-circle" >+</button>
      </div>
      </form>
   </div>
</div>
<hr/>
<a href=""></a>
<div class="container-fluid">
   <div class="row justify-content-center">
      <div class="col-12 col-md-8  borda-lista shadow  pb-0 px-0">
         <br>
         <h3 class="text-center ">MINHA LISTA </h3>
         <table class="table   table-striped table-hover">
            <thead>
               <tr>
                  <th>
                     <span class="custom-checkbox">
                     <input type="checkbox" id="SelecionarTudo">
                     <label for="SelecionarTudo"></label>
                     </span>
                  </th>
                  <th>Item</th>
                  <th>Controles</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $a = $_SESSION['id'];
                  $itens = ListarItemLista($a);
                   while ($item = $itens->fetch_array()){	?>
               <tr>
                  <td>
                     <span class="custom-checkbox">
                     <input type="checkbox" id="checkbox1" name="options[]" value="1">
                     <label for="checkbox1"></label>
                     </span>
                  </td>
                  <td><?php echo $item['DS_CONTEUDO']; ?></td>
                  <td>
                     <a href="#ModalExcluir" id="<?php  echo($item['CD_LISTA']); ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Excluir">&#xE872;</i></a>
                  </td>
               </tr>
               <?php  
                  } 
                  ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<!-- Delete Modal HTML -->
<div id="ModalExcluir" class="modal fade">
   <div class="modal-dialog">
      <div class="modal-content">
         <form action="lista.php" method="post">
            <input type="hidden" name="codigo" id="codigo" value="">
            <div class="modal-header">
               <h4 class="modal-title">Excluir Item da Lista</h4>
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
               <p>Tem certeza de que deseja excluir esse item da lista?</p>
               <p class="text-warning"><small>Não será possível recuperar depois.</small></p>
            </div>
            <div class="modal-footer">
               <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
               <input type="submit" class="btn btn-danger" value="Excluir">
            </div>
         </form>
      </div>
   </div>
</div>
</div>
</div>
</div>
<?php 
   include('footer_perfil.php');
   ?>