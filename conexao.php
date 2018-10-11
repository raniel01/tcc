<?php
//conexão
$user = "xtranx";
$pass= "";
$server = "localhost";
$banco = "MEUCARRINHO";
$con = new mysqli($server,$user,$pass,$banco);
//Codificação de caracteres em UTF-8
$con->query("SET NAMES 'utf8'");
$con->query('SET character_set_connection=utf8');
$con->query('SET character_set_client=utf8');
$con->query('SET character_set_results=utf8');
// -- Codificação de caracteres em UTF-8

//--conexao
/*

			      -------------------------------------
                 ||				FUNÇÕES               ||
                  -------------------------------------
*/
/*==============================================================================
						 FUNÇÕES DE CADASTRO
==============================================================================*/

/*function CadastrarFormaPgto($nome){
	$sql = 'INSERT INTO TB_FORMA_PGTO VALUES (null,"'.$nome.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		alert("Erro ao cadastrar");
	}
}*/
//------------------------------------------------------------------------------
function CadastrarUsuario($nome, $sobrenome, $email, $sexo, $cpf, $nascimento, $endereco, $bairro, $cidade, $cep, $estado, $referencia, $telefone, $celular, $nivel, $foto, $saldo=0, $status="", $senha){
	$sql = 'INSERT INTO TB_USUARIO (NM_USUARIO, NM_SOBRENOME, DS_EMAIL, DS_SEXO, DT_NASCIMENTO, NR_CELULAR, DS_SENHA ) VALUES ("'.$nome.'", "'.$sobrenome.'", "'.$email.'", "'.$sexo.'", "'.$nascimento.'", "'.$celular.'","'.$senha.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		alert("Erro ao cadastrar");
	}
}
//------------------------------------------------------------------------------
function CadastrarProduto($nomeproduto,$foto,$descricao,$barras,$quantidadeestoque,$quantidademin,$quantidademax,$ncm,$valorcusto,$valorproduto,$fabricante,$categoria){
	$sql='INSERT INTO TB_PRODUTO VALUES (null,"'.$nomeproduto.'","'.$foto.'","'.$descricao.'","'.$barras.'","'.$quantidadeestoque.'","'.$quantidademin.'","'.$quantidademax.'","'.$ncm.'","'.$valorcusto.'","'.$valorproduto.'","'.$fabricante.'","'.$categoria.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert(" Produto Cadastrado com sucesso");
	}else{
		alert("Erro ao Cadastrar o Produto");
		echo $sql;
	}
}
//------------------------------------------------------------------------------
function CadastrarFabricante($fabricante){
	$sql = 'INSERT INTO TB_FABRICANTE VALUES (null,"'.$fabricante.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		alert("Erro ao cadastrar o fabricante");
	}
}
//------------------------------------------------------------------------------
function CadastrarCategoria($nm_categoria){
	$sql = 'INSERT INTO TB_CATEGORIA VALUES (null,"'.$nm_categoria.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		("Erro ao ecluir");
	}
}
//------------------------------------------------------------------------------
function CadastrarCarrinho($qt_produto, $ds_status){
	$sql = 'INSERT INTO TB_CARRINHO VALUES (null,"'.$qt_produto."','".$ds_descricao.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		("Erro ao cadastrar");
	}
}
/*==============================================================================
						FIM DAS FUNÇÕES DE CADASTRO
==============================================================================*/


/*==============================================================================
						 FUNÇÕES DE EXCLUIR
==============================================================================*/
function ExcluirFormaPgto($cd){
	$sql = 'DELETE FROM TB_FORMA_PGTO WHERE CD_FORMA_PGTO ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		alert("Erro ao excluir");
	}
}
//------------------------------------------------------------------------------
function ExcluirUsuario($cd){
	$sql = 'DELETE FROM TB_USUARIO WHERE CD_USUARIO ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert(" Usuario Excluido com sucesso");
	}else{
		alert("Erro ao Excluir o Usuario");
	}
}
//------------------------------------------------------------------------------
function ExcluirProduto($cd){
	$sql = 'DELETE FROM TB_PRODUTO WHERE CD_PRODUTO ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Produto Excluido com sucesso");
	}else{
		alert("Erro ao Excluir o Produto");
	}
}
//------------------------------------------------------------------------------
function ExcluirFabricante($cd){
	$sql = 'DELETE FROM TB_FABRICANTE WHERE CD_FABRICANTE ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		alert("Erro ao excluir");
	}
}
//------------------------------------------------------------------------------
function ExcluirCategoria($nm_categoria){
	$sql = 'DELETE FROM TB_CATEGORIA WHERE CD_CATEGORIA INT ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		alert("Erro ao excluir");
	}
}
//------------------------------------------------------------------------------
function ExcluirCarrinho($qt_produto, $ds_status){
	$sql = 'INSERT INTO TB_CARRINHO VALUES (null,"'.$qt_produto."','".$ds_status.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		("Erro ao excluir");
	}
}
/*==============================================================================
						FIM DAS FUNÇÕES DE EXCLUIR
==============================================================================*/


/*==============================================================================
						FUNÇÕES DE ATUALIZAR
==============================================================================*/
function AtualizarFormaPgto($cd, $nome){
	$sql= 'UPDATE TB_FORMA_PGTO SET NM_PGTO = "'.$nome.'" WHERE CD_FORMA_PGTO = '.$cd;
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Atualizado!");
	}else{
		alert("Erro ao atualizar");
	}
}
//------------------------------------------------------------------------------
function AtualizarFabricante($cd, $nm_fabricante){
	$sql= 'UPDATE TB_PRODUTO SET NM_PRODUTO = "'.$nm_fabricante.'" WHERE CD_INTERNO ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Atualizado!");
	}else{
		alert("Erro ao atualizar");
	}
}
//------------------------------------------------------------------------------
function AtualizarCategoria($cd, $nm_categoria){
	$sql= 'UPDATE TB_CATEGORIA SET CD_CATEGORIA = "'.$nm_categoria.'" WHERE CD_INTERNO ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Atualizado!");
	}else{
		alert("Erro ao atualizar");
	}
}

/*==============================================================================
						FIM DAS FUNÇÕES DE ATUALIZAR
==============================================================================*/


/*==============================================================================
						FUNÇÕES DE LISTAR
==============================================================================*/
function ListarFormaPgto(){
	$sql = 'SELECT * FROM TB_FORMA_PGTO';
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
//------------------------------------------------------------------------------
function ListarUsuario(){
	$sql='SELECT * FROM TB_USUARIO';
	$res= $GLOBALS['con']->query($sql);
 	return $res;
 	  }
//------------------------------------------------------------------------------
function ListarProduto(){
	$sql='SELECT * FROM TB_PRODUTO';
	$res=$GLOBALS['con']->query($sql);
	return $res;
}
//------------------------------------------------------------------------------
function ListarFabricante(){
	$sql = 'SELECT * FROM TB_FABRICANTE';
	$res = $GLOBALS['con']->query($sql);
	return $res;	
}
//------------------------------------------------------------------------------
function ListarCategoria(){
	$sql = 'SELECT * FROM TB_CATEGORIA';
	$res = $GLOBALS['con']->query($sql);
	return $res;	
}
//------------------------------------------------------------------------------
function ListarCarrinho(){
	$sql = 'SELECT * FROM TB_CARRINHO';
	$res = $GLOBALS['con']->query($sql);
	return $res;	
}
/*==============================================================================
						FIM DAS FUNÇÕES DE LISTAR
==============================================================================*/


/*==============================================================================
						FUNÇÕES ÚTEIS
==============================================================================*/
function Login($email,$senha){
	$sql ='SELECT * FROM  TB_USUARIO WHERE DS_EMAIL =  "'.$email.'"
		   AND DS_SENHA =  "'.md5($senha).'"';
	$res = $GLOBALS['con']->query($sql);
	//alert($sql);
	if($res->num_rows > 0){
		$usuario = $res->fetch_array();
		$_SESSION['id']=$usuario['CD_USUARIO'];
		$_SESSION['nome']=$usuario['NM_USUARIO'];
		echo '<script> window.location="perfil.php";</script>';
		
	}else{
		echo "Dados Incorretos";
	}
	
}
//------------------------------------------------------------------------------
function Sair(){
	if(isset($_GET['Sair'])){
		session_destroy();
			echo '<script> window.location="index.php";</script>';
	}
}
//------------------------------------------------------------------------------
function BuscaProduto($busca){
	$sql='SELECT * FROM TB_PRODUTO WHERE NM_PRODUTO LIKE "%'.$busca.'%" limit 0,9';
	$res=$GLOBALS['con']->query($sql);
	//echo ($sql);
	//echo '<script> window.location="busca.php?busca="'.$busca.'"";</script>';
	return $res;
	
}
//------------------------------------------------------------------------------
function alert($msg){
	echo '<script>alert("'.$msg.'");</script>';
}

/*==============================================================================
						FIM FUNÇÕES ÚTEIS
==============================================================================*/