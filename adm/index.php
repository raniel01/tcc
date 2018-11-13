<!doctype html>
<?php
include('../conexao.php');
session_start();
SairAdm();
if(isset($_SESSION['id'])){
    $a = $_SESSION['id'];
   }else{
       	echo '<script> window.location="loginadm.php";</script>';
   }
if(isset($_SESSION['nivel'])!= "ADM"){ 
    alert("Acesso restrito, por favor entre como administrador!");
    echo '<script> window.location="loginadm.php";</script>';
}else{   
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MeuCarrinho - Admin Dashboard</title>
    <meta name="description" content="MeuCarrinho - Admin Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
      <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
     <script  type="text/javascript">
             $.noConflict();
                jQuery(document).ready(function(){
                    var value = $("#myInput").val().toLowerCase();
                jQuery("#myInput").on("keyup", function() {
                    jQuery("#myTable tr").filter(function() {
                      jQuery(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
    </script>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Adm</a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png"
            alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Inicio </a>
                    </li>
                    <h3 class="menu-title">Cruds</h3><!-- /.menu-title -->
                    <li>
                        <a href="#"><i class="menu-icon fa fa-laptop"></i>Produtos</a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-table"></i>Fabricantes</a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-th"></i>Categorias</a>
                    </li>

                    <h3 class="menu-title">Redes Sociais</h3><!-- /.menu-title -->

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    </li>

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    </li>
                    <h3 class="menu-title">Contato</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area mr-2  dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php
                            
            $foto= (isset($_SESSION['foto'])) ? "../".$_SESSION['foto'] : "images/logo2.png";
            	
              echo $foto;
            ?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Meu Perfil</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notificações <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Configurações</a>

                                <a class="nav-link" href="https://meucarrinho-xtranx.c9users.io/rascunho/rascunho-tcc/adm/index.php?Sair"><i class="fa fa-power -off"></i>Sair</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

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
  <div>
    <!-- Right Panel -->

 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
  
   
</body>
</html>
<?php } ?>