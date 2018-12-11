<?php
include('include_head_perfil_adm.php'); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Cruds</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            


           <div class="col-sm-6 col-lg-3">
               <a  href = "crudprodutos.php">
                <div class="card text-white bg-flat-color-1">
                    <?php
                     $registros =  QtdRegistrosProdutos();
                         while($a = $registros->fetch_array()){
                             
                      ?>
                    <div class="card-body pb-0">
                       
                        <h4 class="mb-0">
                            <span class="count"><?php echo $a['COUNT(CD_INTERNO)']; ?></span><!--isso pode ser um contador de registros-->
                        </h4>
                        <p class="text-light">Produtos</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>
                     <?php
                         }
                    ?>
                    </div>

                </div>
                </a>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <a  href = "crudusuarios.php">
                <div class="card text-white bg-flat-color-2">
                     <?php
                     $registros =  QtdRegistrosUsuario();
                         while($a = $registros->fetch_array()){
                             
                      ?>
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count"><?php echo $a['COUNT(CD_USUARIO)']; ?></span>
                        </h4>
                        <p class="text-light">Usuarios</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                    <?php
                         }
                    ?>
                </div>
                </a>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <a  href = "crudfabricante.php">
                <div class="card text-white bg-flat-color-3">
                     <?php
                     $registros =  QtdRegistrosFabricante();
                         while($a = $registros->fetch_array()){
                             
                      ?>
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count"><?php echo $a['COUNT(CD_FABRICANTE)']; ?></span>
                        </h4>
                        <p class="text-light">Fabricantes</p>

                    </div>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart3"></canvas>
                        </div>
                     <?php
                         }
                    ?>
                </div>
                </a>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <a  href = "crudcategoria.php">
                <div class="card text-white bg-flat-color-4">
                    <?php
                     $registros =  QtdRegistrosCategorias();
                         while($a = $registros->fetch_array()){
                             
                      ?>
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count"><?php echo $a['COUNT(CD_CATEGORIA)']; ?></span>
                        </h4>
                        <p class="text-light">Categorias</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                     <?php
                         }
                    ?>
                </div>
                </a>
            </div>
            <!--/.col-->
        
        </div> <!-- .content -->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Redes Sociais</h1>
                    </div>
                </div>
            </div>
        </div>
         <div class="content mt-3">
             <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-facebook"></i>
                    <ul>
                        <li>
                            <a  href = "https://www.facebook.com/projetomeucarrinho/" target="_blank">
                            <strong><span>MeuCarrinho </span></strong>
                            </a>
                        </li>
                        
                        <li>
                            <a  href = "https://www.facebook.com/pg/projetomeucarrinho/community/?mt_nav=0&msite_tab_async=0" target="_blank">
                            <strong><span>Seguidores</span></strong>
                            </a>
                        </li>

                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-twitter"></i>
                    <ul>
                         <li>
                            <strong><span>MeuCarrinho </span></strong>
                        </li>
                        
                        <li>
                            <strong><span>Seguidores</span></strong>
                        </li>

                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-instagram"></i>
                    <ul>
                        <li>
                            <strong><span>MeuCarrinho </span></strong>
                        </li>
                        
                        <li>
                            <strong><span>Seguidores</span></strong>
                        </li>

                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-youtube-play"></i>
                    <ul>
                         <li>
                            <strong><span>MeuCarrinho </span></strong>
                        </li>
                        
                        <li>
                            <strong><span>Seguidores</span></strong>
                        </li>

                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
            
            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Outros</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fas fa-users"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Consumidores</div>
                                 <?php
                                     $registros =  QtdRegistrosUsuario();
                                         while($a = $registros->fetch_array()){
                                             
                                  ?>
                                   <div class="stat-digit count"><?php echo $a ['COUNT(CD_USUARIO)']; ?></div>
                                 <?php
                                     }
                                ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fas fa-table"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Cruds Ativos</div>
                                <div class="stat-digit count">4</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
       
            
            <!--Tabela-->
            
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
                .text-users{
                    text-align: center;
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
             </style>
            
            <div class="col-12 ">
                <div class = "table-title text-center">
                    <span><i class="fas fa-table"></i>Tabela de Produtos</span>
                </div>
                
                <div class="white-box ">
                    
                <!-- Form -->
                <form>
                    
                    <!-- Div Input -->
                    <div class = "input-group pt-2 pb-1">
                        
                        <!-- Input Pesquisa -->
                        <input id="myInput" type = "text" class = "form-control" placeholder = "Pesquisar">
                        
                        <!-- Botão 
                        <div class = "input-group-append">
                            
                            <button class = "btn btn-success btn-input" type = "button">Buscar</button>
                            
                        </div>
                        <!-- /Botão -->
                        
                    </div>
                    <!-- /Div Input -->
                        
                </form>
                <!-- /Form -->
                  
                    <div class="table-responsive pt-2">
                        <table  class="table text-center">
                            <thead>  
                                <tr>
                                    <th class="col-auto">#</th>
                                    <th class="col-auto">Nome</th>
                                    <th class="col-auto">Fabricante</th>
                                    <th class="col-auto">Categoria</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                            <?php
                            $listar = ListarUltimosProdutos();
                            while($a = $listar->fetch_array()){
                            ?>
                                        <tr>
                                            <td>
                                            <?php echo $a['CD_INTERNO'];?>
                                            </td>
                                            <td>
                                            <?php echo $a['NM_PRODUTO'];?>
                                            </td>
                                            <td>
                                            <?php echo NomeFabricante($a['ID_FABRICANTE']);?>
                                            </td>
                                            <td>
                                            <?php echo NomeCategoria($a['ID_CATEGORIA']);?>
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
            
            <!--/Tabela-->
            
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
                    <div class="title-users">
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
                                  <img  src = "<?php echo "../".$a['DS_FOTO'];?>" > 
                             
                            <label class="name-user"><?php echo $a['NM_USUARIO'];?></label> </a>
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
                        <td><p id="nomeuser"></p></td>
                        <td><p id="sobrenomeuser"></p></td>
                        <td><p id="emailuser"></p></td>
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