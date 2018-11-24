<?php  
include("conexao.php");
//VERIFICAMOS SE ESTA TENTANDO CADASTRAR UM NOVO USUARIO 
if (isset($_POST['nomepgto'])) {
	CadastrarCategoria($_POST['nomecategoria']);
}
if (isset($_POST['cd'])) {
	AtualizarCategoria($_POST['cd'], $_POST['nome']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Crud - Categoria</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/crud.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                        <th>CONTROLES </th>
                    </tr>
                </thead>
                <tbody>
                	<?php 
                		$formas = ListarCategoria();
                		while ($forma = $formas->fetch_array()){
                	 ?>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><?php echo $forma['CD_CATEGORIA']; ?></td>
                        <td><?php echo $forma['NM_CATEGORIA']; ?></td>
                 
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
                            		          