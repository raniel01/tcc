<?php
//conexão
$user = "root";
$pass= "";
$server = "localhost";
$banco = "mercado";
$con = new mysqli($server,$user,$pass,$banco);
//--conexao

//--produto
function CadastrarProduto($nm_produto, $ds_descricao,
$cd_barras, $qt_estoque, $qt_estoque_min, $cd_ncm, $vl_custo_decimal, $vl_produto_decimal){
	$sql = 'INSERT INTO tb_produto VALUES (null,"'.$nm_produto.'","'.$ds_descricao.'","'.$cd_barras.'","'.$qt_estoque.'","'.$qt_estoque_min.'","'.$cd_ncm.'",'.$vl_custo_decimal.','.$vl_produto_decimal.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		alert("Erro ao cadastrar");
	}
}

function ExcluirProduto($cd){
	$sql = 'DELETE FROM tb_produto WHERE cd_interno int ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		alert("Erro ao excluir");
	}
}
function ListarProduto(){
	$sql = 'SELECT * FROM tb_produto';
	$res = $GLOBALS['con']->query($sql);
	return $res;	
}
function AtualizarProduto($cd, $nm_produto, $ds_descricao,
$cd_barras, $qt_estoque, $qt_estoque_min, $cd_ncm, $vl_custo_decimal, $vl_produto_decimal){
	$sql= 'UPDATE tb_produto SET NM_PRODUTO = "'.$nm_produto.'","'.$ds_descricao.'","'.$cd_barras.'","'.$qt_estoque.'","'.$qt_estoque_min.'","'.$cd_ncm.'",'.$vl_custo_decimal.','.$vl_produto_decimal.'" WHERE cd_interno ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Atualizado!");
	}else{
		alert("Erro ao atualizar");
	}
}
//--produto
 
//--fabricante 
function CadastrarFabricante($nm_fabricante){
	$sql = 'INSERT INTO tb_fabricante VALUES (null,"'.$nm_fabricante.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		alert("Erro ao cadastrar");
	}
}

function ExcluirFabricante($cd){
	$sql = 'DELETE FROM tb_fabricante WHERE cd_fabricante ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		alert("Erro ao excluir");
	}
}

function ListarFabricante(){
	$sql = 'SELECT * FROM tb_fabricante';
	$res = $GLOBALS['con']->query($sql);
	return $res;	
}

function AtualizarFabricante($cd, $nm_fabricante){
	$sql= 'UPDATE tb_produto SET NM_PRODUTO = "'.$nm_fabricante.'" WHERE cd_interno ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Atualizado!");
	}else{
		alert("Erro ao atualizar");
	}
}
//--fabricante

//--categoria

function CadastrarCategoria($nm_categoria){
	$sql = 'INSERT INTO tb_categoria VALUES (null,"'.$nm_categoria.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		("Erro ao ecluir");
	}
}

function ExcluirCategoria($nm_categoria){
	$sql = 'DELETE FROM tb_categoria WHERE cd_categoria int ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		alert("Erro ao excluir");
	}
}

function ListarCategoria(){
	$sql = 'SELECT * FROM tb_categoria';
	$res = $GLOBALS['con']->query($sql);
	return $res;	
}

function AtualizarCategoria($cd, $nm_categoria){
	$sql= 'UPDATE tb_categoria SET cd_categoria = "'.$nm_categoria.'" WHERE cd_interno ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Atualizado!");
	}else{
		alert("Erro ao atualizar");
	}
}
//--categoria

//--carrinho

function CadastrarCarrinho($qt_produto, $ds_status){
	$sql = 'INSERT INTO tb_carrinho VALUES (null,"'.$qt_produto."','".$ds_descricao.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		("Erro ao cadastrar");
	}
}

function ExcluirCarrinho($qt_produto, $ds_status){
	$sql = 'INSERT INTO tb_carrinho VALUES (null,"'.$qt_produto."','".$ds_status.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		("Erro ao excluir");
	}
}

function ListarCarrinho(){
	$sql = 'SELECT * FROM tb_carrinho';
	$res = $GLOBALS['con']->query($sql);
	return $res;	
}

function AtualizarCategoria($cd, $qt_produto, $ds_status){
	$sql = 'UPDATE tb_carrinho SET cd_carrinho = "'.$qt_produto."','".$ds_status.'" WHERE cd_interno ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Atualizado!");
	}else{
		alert("Erro ao atualizar");
	}
}
//--carrinho 

//--usuario
function CadastrarUsuario($nm_usuario, $nm_sobrenome, $ds_email, $ds_sexo, $nr_cpf, $dt_nascimento, $nm_endereco, $nm_bairro, $nm_cidade, $cd_cep, $sg_estado, $nm_ponto_referencia, $nr_telefone, $nr_celular, $ds_nivel, $ds_foto, $vl_saldo_decimal){
	$sql = 'INSERT INTO tb_usuario VALUES (null,"'.$nm_usuario.'","'.$nm_sobrenome.'","'.$ds_email.'","'.$ds_sexo.'","'.$nr_cpf.'","'.$dt_nascimento.'",'.$nm_endereco.','.$nm_bairro.','.$nm_cidade.','.$cd_cep.',"'.$sg_estado.'","'.$nm_ponto_referencia.'","'.$nr_telefone.'","'.$nr_celular.'","'.$ds_nivel.'","'.$ds_foto.'","'.$vl_saldo_decimal.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		("Erro ao ecluir");
	}
}

function ExcluirUsuario($nm_usuario, $nm_sobrenome, $ds_email, $ds_sexo, $nr_cpf, $dt_nascimento, $nm_endereco, $nm_bairro, $nm_cidade, $cd_cep, $sg_estado, $nm_ponto_referencia, $nr_telefone, $nr_celular, $ds_nivel, $ds_foto, $vl_saldo_decimal){
	$sql = 'INSERT INTO tb_usuario VALUES (null,"'.$nm_usuario.'","'.$nm_sobrenome.'","'.$ds_email.'","'.$ds_sexo.'","'.$nr_cpf.'","'.$dt_nascimento.'",'.$nm_endereco.','.$nm_bairro.','.$nm_cidade.','.$cd_cep.',"'.$sg_estado.'","'.$nm_ponto_referencia.'","'.$nr_telefone.'","'.$nr_celular.'","'.$ds_nivel.'","'.$ds_foto.'","'.$vl_saldo_decimal.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		("Erro ao excluir");
	}
}

function ListarUsuario(){
	$sql = 'SELECT * FROM tb_usuario';
	$res = $GLOBALS['con']->query($sql);
	return $res;	
}

function AtualizarUsuario($cd, $nm_usuario, $nm_sobrenome, $ds_email, $ds_sexo, $nr_cpf, $dt_nascimento, $nm_endereco, $nm_bairro, $nm_cidade, $cd_cep, $sg_estado, $nm_ponto_referencia, $nr_telefone, $nr_celular, $ds_nivel, $ds_foto, $vl_saldo_decimal){
	$sql = 'UPDATE tb_usuario SET cd_usuario = "'.$nm_usuario.'","'.$nm_sobrenome.'","'.$ds_email.'","'.$ds_sexo.'","'.$nr_cpf.'","'.$dt_nascimento.'",'.$nm_endereco.','.$nm_bairro.','.$nm_cidade.','.$cd_cep.',"'.$sg_estado.'","'.$nm_ponto_referencia.'","'.$nr_telefone.'","'.$nr_celular.'","'.$ds_nivel.'","'.$ds_foto.'","'.$vl_saldo_decimal.'" WHERE cd_usuario ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Atualizado!");
	}else{
		alert("Erro ao atualizar");
	}
}
//--usuario

//--produto compra
function CadastrarProdutoCompra($qt_produto, $vl_unitario){
	$sql = 'INSERT INTO tb_produto_compra VALUES (null,"'.$qt_produto."','".$vl_unitario.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		("Erro ao cadastrar");
	}
}

function ExcluirProdutoCompra($qt_produto, $vl_unitario){
	$sql = 'INSERT INTO tb_produto_compra VALUES (null,"'.$qt_produto."','".$vl_unitario.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		("Erro ao exclur");
	}
}

function ListarProdutoCompra(){
	$sql = 'SELECT * FROM tb_produto_compra';
	$res = $GLOBALS['con']->query($sql);
	return $res;	
}

function AtualizarProdutoCompra($cd, $qt_produto, $vl_unitario){
	$sql = 'UPDATE tb_produto_compra SET cd_produto_compra = "'.$qt_produto."','".$vl_unitario.'" WHERE cd_produto_compra ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Atualizado!");
	}else{
		alert("Erro ao atualizar");
	}
}
//--produto compra

function CadastrarCompra($dt_compra, $vl_total){
	$sql = 'INSERT INTO tb_compra VALUES (null,"'.$dt_compra."','".$vl_total.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		("Erro ao cadastrar");
	}
}