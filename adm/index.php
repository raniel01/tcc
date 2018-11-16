<?php include('include_head_perfil_adm.php'); ?>

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
               <a  href = "../../rascunho-tcc/crudprodutos.php">
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
                <a  href = "../../rascunho-tcc/crudusuarios.php">
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
                <a  href = "../../rascunho-tcc/crudfabricante.php">
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
                <a  href = "../../rascunho-tcc/crudcategoria.php">
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
                            <strong><span class="count">40</span> k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <strong><span class="count">450</span></strong>
                            <span>feeds</span>
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
                            <strong><span class="count">30</span> k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <strong><span class="count">450</span></strong>
                            <span>tweets</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-linkedin"></i>
                    <ul>
                        <li>
                            <strong><span class="count">40</span> +</strong>
                            <span>contacts</span>
                        </li>
                        <li>
                            <strong><span class="count">250</span></strong>
                            <span>feeds</span>
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
                            <strong><span class="count">94</span> k</strong>
                            <span>followers</span>
                        </li>
                        <li>
                            <strong><span class="count">92</span></strong>
                            <span>circles</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->
            
            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Ganhos Totais</div>
                                <div class="stat-digit">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">New Customer</div>
                                <div class="stat-digit">961</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Projects</div>
                                <div class="stat-digit">770</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
       
            
            <!--Tabela-->
            
            <!--Lembre-me de colocar no style.css -->
            <style>
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
                                    <th class="col-auto">Sobrenome</th>
                                    <th class="col-auto">Email</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                            <?php
                            $listar = ListarUsuarioAdm();
                            while($a = $listar->fetch_array()){
                            ?>
                                        <tr>
                                            <td>
                                            <?php echo $a['CD_USUARIO'];?>
                                            </td>
                                            <td>
                                            <?php echo $a['NM_USUARIO'];?>
                                            </td>
                                            <td>
                                            <?php echo $a['NM_SOBRENOME'];?>
                                            </td>
                                            <td>
                                            <?php echo $a['DS_EMAIL'];?>
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
                    $listar = ListarUsuarioAdm();

                    while($a = $listar->fetch_array()){
                    
                    ?>
                        <div  class="user" >
                             <a id="info" titulo="<?php echo $a['NM_USUARIO']; ?>"  data-sobrenome="<?php echo $a['NM_SOBRENOME']; ?>"  data-email="<?php echo $a['DS_EMAIL']; ?>">
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
  <div class="modal fade modalinfo" id = "exampleModal" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
    <div class="modal-dialog" role = "document">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Mais Informações</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><p id="nome"></p></td>
                      </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th>Sobrenome</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><p id="sobrenome"></p></td>
                      </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><p id="email"></p></td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
    
    <?php include('footer.php'); ?>