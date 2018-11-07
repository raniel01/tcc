<?php  
include("conexao.php");
//VERIFICAMOS SE ESTA TENTANDO CADASTRAR UM NOVO USUARIO 
if (isset($_POST['nomepgto'])) {
	CadastrarUsuario($_POST['nomeusuario']);
}
if (isset($_POST['codigo'])) {
	ExcluirUsuario($_POST['codigo']);
}
if (isset($_POST['cd'])) {
	AtualizarUsuario($_POST['cd'], $_POST['nome']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>xxxxxx</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
		width: auto;
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

$(document).on('click','.edit, .info', function(){
	var cd = $(this).attr('id');
	var forma = $(this).attr('nome');
	var ender = $(this).attr('endereco');
	var local = $(this).attr('bairro');
	var referencia= $(this).attr('ponto');
	$('#cd').val(cd);
	alert(ender);
	$('#nome').val(forma);
	$('#cdr').val(cd);
	$('#nomer').html(forma);
	$('#endereco').html(ender);
	$('#bairro').html(local);
	$('#ponto').html(referencia);
	
	console.log(forma);
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
                    <div class="col-sm-6">
						<h2>CRUD <b>DELIVERY</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#ModalAdicionar" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar Usuario</span></a>
						<a href="#ModalExcluir" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Apagar</span></a>						
					</div>
                </div>
            </div>
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
                        <th>ENDEREÇO</th>
                        <th>CONTROLES </th>
                    </tr>
                </thead>
                <tbody>
                	<?php 
                		$formas = ListarUsuario();
                		while ($forma = $formas->fetch_array()){
                	 ?>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><?php echo $forma['CD_USUARIO']; ?></td>
                        <td><?php echo $forma['NM_USUARIO']; ?></td>
                        <td><?php echo $forma['NM_ENDERECO']; ?></td>
                        <td>
                            <a href="#ModalEditar" id="<?php echo $forma['CD_USUARIO']; ?>" nome="<?php echo $forma['NM_USUARIO']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                            <a href="#ModalRegistros" id="<?php  echo ($forma['CD_USUARIO']); ?>" nome="<?php echo $forma['NM_USUARIO']; ?>" endereco="<?php echo $forma['NM_ENDERECO']; ?>" bairro="<?php echo $forma['NM_BAIRRO']; ?>" ponto="<?php echo $forma['NM_PONTO_REFERENCIA']; ?>" class="info" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Info">info</i></a>
                            <a href="#ModalExcluir" id="<?php  echo($forma['CD_USUARIO']); ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Excluir">&#xE872;</i></a>
                        </td>
                           
                    </tr>
                	<?php  
               			 } 
                	?>
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Exibindo <b>5</b> de <b>25</b> registros</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Anterior</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Próximo</a></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<div id="ModalAdicionar" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudpedidos.php" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Adicionar Novo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Delivery:</label>
							<input type="text" name="nomepgto" class="form-control" required>
						</div>
					<!-- NÃO VAMOS USAR AGORA
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Descrição</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Telefone</label>
							<input type="text" class="form-control" required>
						</div>	
					-->				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Cadastrar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="ModalEditar" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudpedidos.php" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Ver Registro De Pedidos</h4>
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
	<!-- Check Modal HTML -->
	<div id="ModalRegistros" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudpedidos.php" method="post" >
					<div class="modal-header">						
						<h4 class="modal-title text-center">Mais Informações</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<table class="table  table-striped">
						    <thead>
						      <tr>
						        <th>Nome</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>
						        	<p name="nome" id="nomer"></p>
						        </td>
						      </tr>
						    <thead>
						      <tr>
						        <th>Endereço</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<tr>
						        	<td>
						        		<p name="endereco" id="endereco" required></p>
						        	</td>
						      	</tr>
						    </tbody>
						    <thead>
						    	<tr>
						    	<th>Bairro</th>
						        </tr>
						    </thead>
						    <tbody>
						    	<tr>
						        	<td>
						        		<p name="bairro" id="bairro" required></p>
						        	</td>
						        </tr>
						    </tbody>
						    <thead>
						    	<tr>
						    	<th>Ponto De Referencia</th>
						        </tr>
						    </thead>
						    <tbody>
						    	<tr>
						        	<td>
						        		<p name="ponto" id="ponto" required></p>
						        	</td>
						        </tr>
						    </tbody>
						</table>				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Voltar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="ModalExcluir" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="crudpedidos.php" method="post">
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
                            		          