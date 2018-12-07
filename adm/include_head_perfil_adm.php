<!doctype html>
<?php
include('../conexao.php');
session_start();
SairAdm();
if(isset($_SESSION['id'])){
    $a = $_SESSION['id'];
    $usuarios = ListarUsuarioCerto($a);
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
    
    <link rel = "stylesheet" href = "info-hover.css">
    
    
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
                         <?php 
                          while ($b = $usuarios->fetch_array()){
                          ?> 
                    <a href="perfil.php" class ="perfil" nome = "<?php echo $b['NM_USUARIO']; ?>" endereco = "<?php echo $b['NM_ENDERECO']; ?>" sobrenome = "<?php echo $b['NM_SOBRENOME']; ?>" celular = "<?php echo $b['NR_CELULAR']; ?>" email = "<?php echo $b['DS_EMAIL']; ?>">
                            <i class="menu-icon fa fa-user"></i>
                             Perfil
                        </a>
                        <?php
                          }
                        ?>
                    </li>
                    <h3 class="menu-title">Cruds</h3><!-- /.menu-title -->
                    <li>
                        <a href="crudprodutos.php"><i class="menu-icon fa fa-laptop"></i>Produtos</a>
                    </li>
                    <li>
                        <a href="crudfabricante.php"> <i class="menu-icon fa fa-table"></i>Fabricantes</a>
                    </li>
                    <li>
                        <a href="crudcategoria.php"> <i class="menu-icon fa fa-th"></i>Categorias</a>
                    </li>

                   
                    <h3 class="menu-title">Contato</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus-square"></i>Adicionar Um</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="manutencao.php">Crud</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="manutencao.php">Tabela</a></li>

                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
 <!-- Left Panel -->
<div id="right-panel" class="right-panel">
    
    <!-- Não Apaga -->
    
    <style>
        
        .user-avatar{
            height: 50px;
            width: 50px;
            object-fit: cover;
        }
        .fa-table{
            color:orange;
        }
        
    </style>
    
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
                                <a class="nav-link" href="../index.php">Voltar Para o Site</a>

                                <a class="nav-link" href="perfil.php"><i class="fa fa -cog"></i>Configurações</a>

                                <a class="nav-link" href="?SairAdm"><i class="fa fa-power -off"></i>Sair</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->