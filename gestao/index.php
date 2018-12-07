<?php include('include_head_perfil_adm.php'); ?>
<!--Lembre-me de colocar no style.css -->
<style>
   .modaluser img{
   object-fit: cover;
   height: 170px;
   width: 170px;
   border-radius: 50%;
   }
   .white-box{
   background-color: white;
   padding: 0.3rem 1.5rem 0 1.5rem;
   border: 1px solid rgba(220,220,220,1);
   }
   th{
   border: 0px solid red !important;
   color: black !important;
   }
   td{
   color: rgba(170,170,170,1);
   font-weight: bold;
   }
   .white-box-map{
   margin: 0.5rem 0 0 0;
   padding-top: 1rem;
   color: white;
   border-radius: 5px 5px 0 0;
   }
   .text{
   text-align: center;
   font-size: 20px;
   font-family: sans-serif;
   background-color: #212529;
   padding: 1rem 0 0.5rem 0;
   border-radius: 5px 5px 0px 0px;
   }
   .frame{
   width:100%;
   padding: 0;
   }
   .frame iframe{
   border: none;
   width: 100%;
   height: 450px;
   }
   .white-box-chat{
   background-color: white;
   border: 1px solid rgba(220,220,220,1);
   margin: 1.5rem 0 0 0;
   }
   @media only screen and (max-width: 425px){
   .white-box-chat{
   margin: 1rem 0 0 0;
   }
   }
   .title-users{
   padding: 0.95rem 0rem 0.95rem 1rem;
   font-size: 20px;
   margin: 0;
   font-family: sans-serif;
   }
   .title-users label{
   margin: 0;
   }
   .usuarios{
   padding: 1.4rem 1rem 1.4rem 1rem;
   }
   .usuarios img{
   height: 40px;
   width: 40px;
   border-radius: 50%;
   }
   .usuarios label{
   padding-left: 0.8rem;
   }
   .user{
   padding: 0.5rem 0 0.5rem 0;
   }
   .usuarios div{
   border-top: 1px dashed rgba(220,220,220,1);
   }
   .usuarios div:first-child{
   border: none;
   }
   .table-title{
   width: 100%;
   background-color: #ff8000;
   height: 60px;
   color: white;
   font-weight: bold;
   font-size: 25px;
   padding: 0.7rem 0 0.9rem 1rem;
   }
   .table-title i{
   font-size: 25px;
   padding-right: 0.5rem;
   }
   .btn-input{
   border-radius: 0px 5px 5px 0px;
   }
   .form-control:focus{
   box-shadow: 0px 0px 5px 1px #ff7400;
   border: 1px solid #ff7400;
   }
   .box-adm{
   border: 1px solid rgba(220,220,220,1);
   margin-top: 1rem;
   }
   .title-add-admin{
   padding: 12px 16px;
   font-size: 20px;
   margin: 0;
   font-family: sans-serif;
   color: white;
   background-color: rgba(150,10,10,1);
   }
   .title-add-admin label{
   margin: 0;
   }
   .div-btn{
   padding: 30px 36px;
   background-color: white;
   }
   .adm{
   background-color: white;
   margin-top: 1rem;
   border: 1px solid rgba(220,220,220,1);
   }
   .title-head-content-adm{
   background-color: orange;
   padding: 12px 16px;
   font-size: 20px;
   font-family: sans-serif;
   }
   .title-head-content-adm label{
   margin: 0;
   }
   .content-adm{
   padding: 16px 16px;
   }
   .img-card-perfil-adm{
   height: 120px;
   width: 120px;
   object-fit: cover;
   border-radius: 50%;
   }
   .content-adm-card{
   padding-top: 1.5rem;
   display: flex;
   flex-flow: column nowrap;
   text-align: center;
   }
   .card{
   border: none;
   box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
   }
</style>
<!-- Modals -->
<!-- Modal  Adicionar -->
<div class = "modal fade" id = "adicionarAdministrador" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
   <!-- Modal -->
   <div class = "modal-dialog" role = "document">
      <!-- Conteúdo -->
      <div class = "modal-content">
         <!-- Header -->
         <div class = "modal-header">
            <!-- Título -->
            <h5 class = "modal-title" id = "exampleModalLabel">Adicionar Administrador</h5>
            <!-- Fechar -->
            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
            <span aria-hidden = "true">&times;</span>
            </button>
            <!-- /Fechar -->
         </div>
         <!-- /Header -->
         <!-- Body -->
         <div class="modal-body ">
            <div class="form-group">
               <input id="myInput" type="text"  class="form-control"/>
            </div>
            <form action= "index.php"  method="post">
                   <table  class="table table-striped">
                      <thead>
                         <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">status</th>
                         </tr>
                      </thead>
                      <tbody id="myTable">
                         <?php
                            $sla = ListarUsuarioTodos();
                            while( $c = $sla->fetch_array()){
                                
                            ?>
                         <tr>
                            <td><?php echo $c["NOME"];?></td>
                            <td>
                               <select class="form-control" id="sel2" name="nivel[]">
                                  <option value ="USU" selected><?php echo $c['DS_NIVEL'];?></option>
                                  <option value ="ADM">ADM</option>
                               </select>
                               <input type="hidden" name="user[]" value="<?php echo $c['CD_USUARIO']; ?>"/>
                            </td>
                         </tr>
                         <?php
                            }
                            ?>
                      </tbody>
                   </table>
               
         </div>
         <!-- /Body -->
         <!-- Footer -->
         <div class = "modal-footer">
         <!-- Botão Adicionar -->
         <input type = "submit"  class = "btn btn-outline-success rounded" name="botaoatualizar"  value="Adicionar"/>
         <!-- Botão Cancelar -->
         <button type = "button" class = "btn btn-outline-danger rounded" data-dismiss = "modal">Cancelar</button>
         </form>
         </div>
         <!-- /Footer -->
         
      </div>
      <!-- /Conteúdo -->
   </div>
   <!-- /Modal -->
</div>
<!-- /Modal Adicionar -->
<!-- Modal  Editar -->
<div class = "modal fade" id = "editarAdministrador" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
   <!-- Modal -->
   <div class = "modal-dialog" role = "document">
      <!-- Conteúdo -->
     <form action= "index.php"  method="post">
      <div class = "modal-content">
         <!-- Header -->
         <div class = "modal-header">
            <!-- Título -->
            <h5 class = "modal-title" id = "exampleModalLabel">Editar Administrador</h5>
            <!-- Fechar -->
            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
            <span aria-hidden = "true">&times;</span>
            </button>
            <!-- /Fechar -->
         </div>
         <!-- /Header -->
         <!-- Body -->
         <div class="modal-body">
            <div class="form-group">
               <input id="myInput" type="text"  class="form-control"/>
            </div>
           
            <table  class="table table-striped">
               <thead>
                  <tr>
                     <th scope="col">Nome</th>
                     <th scope="col">status</th>
                  </tr>
               </thead>
               <tbody id="myTable">
                  <?php
                     $sla = ListarUsuarioAdmTodos();
                     while( $c = $sla->fetch_array()){
                         
                     ?>
                  <tr>
                     <td><?php echo $c['NM_USUARIO'];?></td>
                     <td>
                        <select class="form-control" id="sel2" name="nivel[]">
                           <option value ="ADM" selected><?php echo $c['DS_NIVEL'];?></option>
                           <option value ="USU">USU</option>
                        </select>
                        <input type="hidden" name="user[]" value="<?php echo $c['CD_USUARIO']; ?>"/>
                     </td>
                  </tr>
                  <?php
                     }
                     ?>
               </tbody>
            </table>
           
         </div>
         <!-- /Body -->
         <!-- Footer -->
         <div class = "modal-footer">
            <!-- Botão Editar -->
            <input type  = "submit"  class = "btn btn-outline-secondary rounded" name="botaoeditar"  value="Editar"/>
            <!-- Botão Cancelar -->
            <button type = "button" class = "btn btn-outline-danger rounded" data-dismiss = "modal">Cancelar</button>
            </form>
         </div>
         <!-- /Footer -->
      </div>
      <!-- /Conteúdo -->
     
   </div>
   <!-- /Modal -->
</div>
<!-- /Modal Editar -->
<!-- /Modals -->

<!-- Card gerenciar Admin -->
<div class = "col-12">
   <div class = "box-adm">
      <div class = "title-add-admin">
         <label>Gerenciar Administradores</label>
      </div>
      <div class = "div-btn">
         <div class = "row justify-content-around">
            <div class = "col-12 col-lg-6 text-center"><button class = "btn btn-success btn-lg btn-block rounded" data-toggle = "modal" data-target = "#adicionarAdministrador">Adicionar</button></div>
            <div class = "col-12 col-lg-6 my-2 my-lg-0 text-center"><button class = "btn btn-secondary btn-lg btn-block rounded" data-toggle = "modal" data-target = "#editarAdministrador">Editar</button></div>
           </div>
      </div>
   </div>
</div>
<!-- /Card gerenciar Admin -->
<!-- Card Listar Admins -->
<div class = "col-12">
   <!-- Adm -->
   <div class = "adm">
      <!-- Head -->
      <div class = "title-head-content-adm">
         <!--  Título -->
         <label class = "text-white">Administradores</label>
      </div>
      <!-- /Head -->
      <!-- Div adm -->
      <div class = "content-adm">
         <!-- Row -->
         <div class = "row">
            <?php
               $c = ListarUsuarioAdm();
               while ($pokemon = $c->fetch_array()){
               ?>
            <!-- Tamanho -->
            <div class = "col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
               <!-- Card -->
               <div class = "card py-4 col-12">
                  <!-- Div Imagem -->
                  <div class = "img-card-adm text-center">
                     <!-- Foto de perfil do administrador -->
                     <img src = "../<?php  echo $pokemon['DS_FOTO']; ?>" class = "img-card-perfil-adm">
                  </div>
                  <!-- /Div imagem -->
                  <!-- Conteúdo -->
                  <div class = "content-adm-card">
                     <!-- Nome -->
                     <label><?php echo $pokemon['NM_USUARIO']; ?></label>
                     <!-- Email -->
                     <small><?php echo $pokemon['NM_ENDERECO']; ?></small>
                  </div>
                  <!-- /Conteúdo -->
               </div>
               <!-- /Card -->
            </div>
            <!-- /Tamanho -->
            <?php
               }
               ?>
         </div>
         <!-- /Row -->
      </div>
      <!-- /Div adm -->
   </div>
   <!-- /Adm -->
</div>
<!-- /Card Listar Admins -->
<!--Mapa-->
<div class="col-12 col-lg-8">
   <div class="white-box-map">
      <div class="text">
         <label>Conheça nossa localização</label>
      </div>
      <div class="frame">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233099.54390762598!2d-46.95298796316941!3d-24.095151527400446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d1d57349fa6513%3A0x29b318df3a7ca782!2sItanha%C3%A9m+-+SP%2C+11740-000!5e0!3m2!1spt-BR!2sbr!4v1541133976480" allowfullscreen></iframe>
      </div>
   </div>
</div>
<!--/Mapa-->
<!--usuario-->
<div class="col-lg-4 col-12">
   <div class="white-box-chat ">
      <div class="title-users bg-info text-white">
         <label>Usuários Recentes</label>
      </div>
      <hr class = "p-0 m-0">
      <div class="usuarios ">
         <?php
            $listar = ListarUsuarioUsu();
            
            while($a = $listar->fetch_array()){
            
            ?>
         <div  class="user" >
            <a data-toggle="modal" data-target="#ModalInfo" class="info" titulo="<?php echo $a['NM_USUARIO']; ?>"  sobrenome="<?php echo $a['NM_SOBRENOME']; ?>"  email="<?php echo $a['DS_EMAIL']; ?>" picture="<?php echo $a['DS_FOTO']; ?>">
            <img  src = "../<?php echo $a['DS_FOTO'];?>" > 
            </a>
            <label class="name-user"><?php echo $a['NM_USUARIO'];?></label>
         </div>
         <?php
            }
            ?>
      </div>
   </div>
</div>
<!--/usuario-->
</div> <!-- .content -->
</div><!-- /#right-panel -->
<!--  Modal usuario -->
<div id = "ModalInfo" class="modal fade">
   <div class="modal-dialog" role = "document">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <h4 class="modal-title">Mais Informações</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body modaluser ">
            <div class="table-responsive">
               <div class="text-center">
                  <img class = "mt-4 mb-2 rounded-circle" id="fotouser" src="">
               </div>
               <table class="table">
                  <thead>
                     <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Email</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           <p id="nomeuser"></p>
                        </td>
                        <td>
                           <p id="sobrenomeuser"></p>
                        </td>
                        <td>
                           <p id="emailuser"></p>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
         </div>
      </div>
   </div>
</div>
<!--  Modal usuario -->  
<?php include('footer.php'); ?>