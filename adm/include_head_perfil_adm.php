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
} 
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
                    <li class="">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Inicio </a>
                    </li>
                    <li class="">
                        <a href="perfil.php"> <i class="menu-icon fa fa-user"></i>Perfil</a>
                    </li>
                    <li class="">
                        <a href="pedidos.php"> <i class="menu-icon fa fa-truck"></i>Pedidos</a>
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