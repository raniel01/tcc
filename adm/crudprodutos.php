<?php  
session_start();
include("../conexao.php");
$checked_arr = $_GET['checkbox'];
$busca = $_REQUEST['buscador'];
$count = count($checked_arr);

			/*$sql.= ")";
			$c = explode(' ', $sql);
			$g = $c[count($c) -2];
			$d = array_pop($c);
			$textocorrigido = str_replace(strrchr($g,' '),')',$sql);
			$test = strrchr($g,' ');
			echo "<br>";
			echo $g;
			echo "<br>";
			echo $test;
			echo "<br>";
		echo $textocorrigido;*/
	

echo "voce tem ".$count." checkbox marcados";
//VERIFICAMOS SE ESTA TENTANDO CADASTRAR
	if (isset($_REQUEST['busca'])) {
		$busca=$_GET['busca'];
		BuscaProduto($busca);
	}
	if (isset($_REQUEST['buscacategoria'])) {
		$buscacategoria=$_GET['buscacategoria'];
		BuscaCategoria($buscacategoria);
	}
	//if($_FILES){
	if (isset($_FILES['foto'])) {
		$destino= "imgs/produtos/".$_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'],$destino);
		CadastrarProduto($_POST['nome'],$destino,$_POST['descricao'],$_POST['barras'],$_POST['estoque'],$_POST['qtminimo'],$_POST['qtmaximo'],$_POST['ncm'],$_POST['custo'],$_POST['valor'],$_POST['fabricante'],$_POST['categoria'],$_SESSION['id']);
				
	}
	//}
	if (isset($_POST['nomefabricante'])) {
		CadastrarFabricante($_POST['nomefabricante']);
	}
	if (isset($_POST['cd'])) {
		AtualizarProduto($_POST['cd'], $_POST['nome']);
	}
	


if (isset($_POST['codigo'])) {
	ExcluirProduto($_POST['codigo']);
}

if(isset($_SESSION['nivel'])!= "ADM"){ 
    alert("Acesso restrito, por favor entre como administrador!");
    echo '<script> window.location="adm/loginadm.php";</script>';
}else{
//if($_FILES){
		
		
//}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MC.com|Crud Produto </title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="crud.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script>
	$('#1').on('change', function () {
    var total = $(this).length;
    alert(total);
});
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #566787;
		background: #f1ef99;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
</style>
<script type="text/javascript">

$(document).on('click','.edit', function(){
	var cd = $(this).attr('id');
	var forma = $(this).attr('nome');
	$('#cd').val(cd);
	$('#nome').val(forma);
});

$(document).on('click','.delete', function(){
	var id = $(this).attr('id');
	$('#codigo').val(id);
});

$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#SelecionarTudo").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#SelecionarTudo").prop("checked", false);
		}
	});
});

</script>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
					<div class="col-sm-12">
						<a href="#ModalBusca" class="btn btn-dark" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Buscar Produto</span></a>
						<a href="#ModalBuscaCategoria" class="btn btn-dark" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>teste produto</span></a>
						<a href="#ModalCategoria" class="btn btn-info" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Buscar Categoria</span></a>
						<a href="#ModalAdicionar" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar Produtos</span></a>
						<a href="#ModalFabricante" class="btn btn-warning" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar Fabricante</span></a>
						<!--<a href="#ModalExcluir" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Apagar</span></a>-->						
					</div>
                </div>
            </div>
            <h1>Busca Dos Produtos</h1>
            <p>Buscando Pelo Produto <b><?php echo $busca; ?></b></p>
            <?php
            if($count == ' '){
            	
            
            ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="SelecionarTudo">
								<label for="SelecionarTudo"></label>
							</span>
						</th>
                        <th>#</th>
                        <th>NOME</th>
                        <th>User</th>
                        <th>Controles</th>
                    </tr>
                </thead>
                <tbody>
                	<?php
                		$produtos = 'SELECT * FROM TB_PRODUTO WHERE NM_PRODUTO LIKE "%'.$_GET['busca'].'%" ORDER BY CD_INTERNO ASC';
                    	$resultados = $GLOBALS['con']->query($produtos);
                    	
                    	$total = $resultados->num_rows;
                    	$porpagina = 12;
                    	$total_pagina = ceil($total/$porpagina);
                    	
                    	$pagina = isset($_GET['p']) ? $_GET['p'] : 1;
                    	$inicio = ($pagina * $porpagina) - $porpagina;
                    	
                    	$exibicao = 'SELECT * FROM TB_PRODUTO WHERE NM_PRODUTO LIKE "%'.$_GET['busca'].'%" ORDER BY CD_INTERNO ASC LIMIT '.$inicio.', '.$porpagina.'';
                    	$resultado = $GLOBALS['con']->query($exibicao);
                    	
                    	while($pesquisa = $resultado->fetch_array()){
                		
                		/*$pesquisas = BuscaProduto($busca);
                		while ($pesquisa = $pesquisas->fetch_array()){*/
                	 ?>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><?php echo $pesquisa['CD_INTERNO']; ?></td>
                        <td><?php echo $pesquisa['NM_PRODUTO']; ?></td>
                        <td><?php echo NomeUsuario($pesquisa['ID_USUARIO']) ; ?></td>
                        <td>
                            <a href="#ModalEditar" id="<?php echo $forma['CD_FORMA_PGTO']; ?>" nome="<?php echo $forma['NM_PGTO']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                            <a href="#ModalExcluir" id="<?php  echo $pesquisa['CD_INTERNO']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Excluir">&#xE872;</i></a>
                        </td>
                    </tr>
                	<?php  
               			 } 
                	?>
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Exibindo 
                <b> 5</b> de <b>25</b> registros</div>
                <ul class="pagination">
                <?php
                  if($pagina > 2){
                     echo '<li><a href="?cd='.$_GET['busca'].'&p='.($pagina - 2).'"  style="color: black;"><<</a></li>';
                  }
                  
                  if($pagina > 1){
                     echo '<li><a href="?cd='.$_GET['busca'].'&p='.($pagina - 1).'"  style="color: black;">Anterior</a></li>';
                  }
                  
                  for($i=1;$i<=$total_pagina;$i++){
                     $cor = ($pagina == $i) ? "#20B2AA" : "white";
                     $fonte = ($pagina == $i) ? "white" : "black";
                     echo '<li><a href="?cd='.$_GET['busca'].'&p='.$i.'" style="background-color: '.$cor.'; color: '.$fonte.';">'.$i.'</a></li>';
                  }
                  
                  if($pagina < $total_pagina){
                     echo '<li><a href="?cd='.$_GET['busca'].'&p='.($pagina + 1).'" style="color: black;">Próximo</a></li>';
                  }
                  
                  if($pagina < $total_pagina - 1){
                     echo '<li><a href="?cd='.$_GET['busca'].'&p='.($pagina + 2).'" style="color: black;">>></a></li>';
                  }
               ?>
                </ul>
            </div>
            <!-- Edit Modal HTML -->
	<div id="ModalAdicionar" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudprodutos.php" method="post" enctype='multipart/form-data'>
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Novo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nome Do Produto:</label>
							<input type="text" name="nome" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Foto:</label>
							<input type="file" name="foto" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Descrição:</label>
							<textarea class="form-control" rows=10 name="descricao" required></textarea>
						</div>
						<div class="form-group">
							<label>Codigo De Barrras:</label>
							<input type="number" name="barras" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Quantidade No Estoque:</label>
							<input type="number" name="estoque" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Quantidade Minima:</label>
							<input type="number" name="qtminimo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Quantidade Maxima:</label>
							<input type="number" name="qtmaximo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Ncm:</label>
							<input type="number" name="ncm" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Valor Do Custo:</label>
							<input type="number" step="0.01" name="custo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Valor do Produto:</label>
							<input type="number" step="0.01" name="valor" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Fabricante:</label>
							<select class="wide form-control" name="fabricante">
                                <?php
                                    $fabricantes = ListarFabricante();
                                        while($f = $fabricantes->fetch_array()){
                                                echo '<option value="'.$f['CD_FABRICANTE'].'">
                                                        '.$f['NM_FABRICANTE'].'
                                                      </option>';
                                        }
                                ?>
                            </select>   
						</div>
						<div class="form-group">
							<label>Categoria:</label>
							<select class="wide form-control" name="categoria">
                                <?php
                                    $categorias = ListarCategoria();
                                        while($c = $categorias->fetch_array()){
                                                echo '<option value="'.$c['CD_CATEGORIA'].'">
                                                        '.$c['NM_CATEGORIA'].'
                                                      </option>';
                                        }
                                ?>
                            </select>   
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Cadastrar">
					</div>
				</form>
			</div>
		</div>
	</div>	<!-- Edit Modal HTML -->
	<div id="ModalFabricante" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudprodutos.php" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Novo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nome Do Fabricante:</label>
							<input type="text" name="nomefabricante" class="form-control" required>
						</div>
						
					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Cadastrar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- modal busca de produto-->
	<div id="ModalBusca" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudprodutos.php" method="get">
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Novo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Busca:</label>
							<input type="text" name="busca" class="form-control" >
						</div>
						
					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Buscar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- modal busca de produto-->
	<div id="ModalBuscaCategoria" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudprodutos.php" method="get">
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Novo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Busca:</label>
							<input type="text" name="buscador" class="form-control" >
						</div>
						<h5 class="modal-title">Categorias</h5>
						<br>
						<?php
						$a = ListarCategoria();
						while($b = $a->fetch_array()){
						?>
						<div class="form-group">
							<input type="checkbox" nome="<?php echo $b['NM_CATEGORIA']; ?>" name="checkbox[]" id="1" value="<?php echo $b['NM_CATEGORIA']; ?>" class="form-check-input" >
							<label><?php echo $b['NM_CATEGORIA']; ?></label>
						</div>
						<?php
						}
						?>
						
						
					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Buscar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- modal busca de categoria-->
	<div id="ModalCategoria" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudprodutos.php" method="get">
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Novo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Busca:</label>
							<input type="text" name="buscacategoria" class="form-control" >
						</div>
						
					
					</div>
					<div class="modal-footer">
							<label>Categoria:</label>
							<select class="wide form-control" name="categoria">
                                <?php
                                    $categorias = ListarCategoria();
                                        while($c = $categorias->fetch_array()){
                                                echo '<option value="'.$c['CD_CATEGORIA'].'">
                                                        '.$c['NM_CATEGORIA'].'
                                                      </option>';
                                        }
                                ?>
                            </select>   
						<input type="submit" class="btn btn-success" value="Buscar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="ModalEditar" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudcadastrar.php" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Registro</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nome</label>
							<input type="hidden" name="cd" id="cd">
							<input type="text" name="nome" id="nome" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Salvar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="ModalExcluir" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudprodutos.php" method="post">
					<input type="hidden" name="codigo" id="codigo" value=" ">
					<div class="modal-header">						
						<h4 class="modal-title">Excluir Registro</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Tem certeza de que deseja excluir esse registro?</p>
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
            <?php
            }else{
            ?>
             <table class="table table-striped table-hover">
             	<?php
             		$sql = "SELECT P.NM_PRODUTO AS 'NOME DO PRODUTO',P.ID_USUARIO AS 'USUARIO',
	C.NM_CATEGORIA AS 'NOME DA CATEGORIA' FROM TB_PRODUTO P,TB_CATEGORIA C WHERE P.ID_CATEGORIA = C.CD_CATEGORIA AND(";
	if($count == 1){
		$sql .= "C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
	}
	else if ($count > 1){
		echo "entrou no else if";
		echo "<br>";
		echo implode(' ',$checked_arr);
		echo "<br>";
		/*contando todas as categorias*/
		switch($count){
		case 2;
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
		break;
		case 3;
			
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.=" AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
		break;
		case 4;
			
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
		break;
		case 5;
		
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[4]."%'";
		break;
		case 6;
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[4]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[5]."%'";
		break;
		case 7;
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.=" OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[4]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[5]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[6]."%'";
		break;
		case 8;
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[4]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[5]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[6]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[7]."%'";
		break;
		case 9;
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[4]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[5]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[6]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[7]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[8]."%'";
		break;
		case 10;
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[4]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[5]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[6]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[7]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[8]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[9]."%'";
		break;
		case 11;
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[4]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[5]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[6]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[7]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[8]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[9]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[10]."%'";
		break;
		case 12;
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[4]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[5]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[6]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[7]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[8]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[9]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[10]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[11]."%'";
		break;
		case 13;
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[4]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[5]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[6]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[7]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[8]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[9]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[10]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[11]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[12]."%'";
		break;
		case 14;
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[4]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[5]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[6]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[7]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[8]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[9]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[10]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[11]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[12]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[13]."%'";
		break;
		case 15;
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[4]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[5]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[6]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[7]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[8]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[9]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[10]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[11]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[12]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[13]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[14]."%'";
		break;
		case 16;
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[0]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[1]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[2]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[3]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[4]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[5]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[6]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[7]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[8]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[9]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[10]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[11]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[12]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[13]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[14]."%'";
			$sql.="OR ";
			$sql.="P.NM_PRODUTO LIKE '%".$busca."%'"; 
    		$sql.="AND ";
			$sql.="C.NM_CATEGORIA LIKE '%".$checked_arr[15]."%'";
		break;
		}
	}
	$sql.=")";
	}
             	?>
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="SelecionarTudo">
								<label for="SelecionarTudo"></label>
							</span>
						</th>
                        <th>NOME</th>
                        <th>CATEGORIA</th>
                        <th>USER</th>
                    </tr>
                </thead>
                <tbody>
                	<?php
                		$res = $GLOBALS['con']->query($sql);
                		if($res ->num_rows > 0 ){
                		while ($a = $res->fetch_array()){
                	 ?>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><?php echo $a['NOME DO PRODUTO']; ?></td>
                        <td><?php echo $a['NOME DA CATEGORIA']; ?></td>
                        <td><?php echo NomeUsuario($a['USUARIO']); ?></td>
                        <td>
                            <a href="#ModalEditar" id="<?php echo $forma['CD_FORMA_PGTO']; ?>" nome="<?php echo $forma['NM_PGTO']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                            <a href="#ModalExcluir" id="<?php  echo($forma['CD_FORMA_PGTO']); ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Excluir">&#xE872;</i></a>
                        </td>
                    </tr>
                	<?php  
                			}
                		
               			 }
               			 	else{
                				echo "<b>O Produto digitado Não existe nessa categoria</b>";
                			}
                	?>
                </tbody>
            </table>
            <?php
           
            ?>
			<div class="clearfix">
                <div class="hint-text">Exibindo 
                <b> 5</b> de <b>25</b> registros</div>
            </div>
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<div id="ModalAdicionar" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudprodutos.php" method="post" enctype='multipart/form-data'>
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Novo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nome Do Produto:</label>
							<input type="text" name="nome" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Foto:</label>
							<input type="file" name="foto" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Descrição:</label>
							<textarea class="form-control" rows=10 name="descricao" required></textarea>
						</div>
						<div class="form-group">
							<label>Codigo De Barrras:</label>
							<input type="number" name="barras" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Quantidade No Estoque:</label>
							<input type="number" name="estoque" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Quantidade Minima:</label>
							<input type="number" name="qtminimo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Quantidade Maxima:</label>
							<input type="number" name="qtmaximo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Ncm:</label>
							<input type="number" name="ncm" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Valor Do Custo:</label>
							<input type="number" step="0.01" name="custo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Valor do Produto:</label>
							<input type="number" step="0.01" name="valor" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Fabricante:</label>
							<select class="wide form-control" name="fabricante">
                                <?php
                                    $fabricantes = ListarFabricante();
                                        while($f = $fabricantes->fetch_array()){
                                                echo '<option value="'.$f['CD_FABRICANTE'].'">
                                                        '.$f['NM_FABRICANTE'].'
                                                      </option>';
                                        }
                                ?>
                            </select>   
						</div>
						<div class="form-group">
							<label>Categoria:</label>
							<select class="wide form-control" name="categoria">
                                <?php
                                    $categorias = ListarCategoria();
                                        while($c = $categorias->fetch_array()){
                                                echo '<option value="'.$c['CD_CATEGORIA'].'">
                                                        '.$c['NM_CATEGORIA'].'
                                                      </option>';
                                        }
                                ?>
                            </select>   
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Cadastrar">
					</div>
				</form>
			</div>
		</div>
	</div>	<!-- Edit Modal HTML -->
	<div id="ModalFabricante" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudprodutos.php" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Novo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nome Do Fabricante:</label>
							<input type="text" name="nomefabricante" class="form-control" required>
						</div>
						
					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Cadastrar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- modal busca de produto-->
	<div id="ModalBusca" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudprodutos.php" method="get">
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Novo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Busca:</label>
							<input type="text" name="busca" class="form-control" >
						</div>
						
					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Buscar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- modal busca de produto-->
	<div id="ModalBuscaCategoria" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudprodutos.php" method="get">
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Novo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Busca:</label>
							<input type="text" name="buscador" class="form-control" >
						</div>
						<h5 class="modal-title">Categorias</h5>
						<br>
						<?php
						$a = ListarCategoria();
						while($b = $a->fetch_array()){
						?>
						<div class="form-group">
							<input type="checkbox" nome="<?php echo $b['NM_CATEGORIA']; ?>" name="checkbox[]" id="1" value="<?php echo $b['NM_CATEGORIA']; ?>" class="form-check-input" >
							<label><?php echo $b['NM_CATEGORIA']; ?></label>
						</div>
						<?php
						}
						?>
						
						
					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Buscar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- modal busca de categoria-->
	<div id="ModalCategoria" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudprodutos.php" method="get">
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Novo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Busca:</label>
							<input type="text" name="buscacategoria" class="form-control" >
						</div>
						
					
					</div>
					<div class="modal-footer">
							<label>Categoria:</label>
							<select class="wide form-control" name="categoria">
                                <?php
                                    $categorias = ListarCategoria();
                                        while($c = $categorias->fetch_array()){
                                                echo '<option value="'.$c['CD_CATEGORIA'].'">
                                                        '.$c['NM_CATEGORIA'].'
                                                      </option>';
                                        }
                                ?>
                            </select>   
						<input type="submit" class="btn btn-success" value="Buscar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="ModalEditar" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudcadastrar.php" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Registro</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nome</label>
							<input type="hidden" name="cd" id="cd">
							<input type="text" name="nome" id="nome" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Salvar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="ModalExcluir" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudcadastar.php" method="post">
					<input type="hidden" name="codigo" id="codigo" value="">
					<div class="modal-header">						
						<h4 class="modal-title">Excluir Registro</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Tem certeza de que deseja excluir esse registro?</p>
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
</body>
</html>  
<?php } ?>                            		          