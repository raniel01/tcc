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

// formas de pagamento
function CadastrarFormaPgto($nome){
	$sql = 'INSERT INTO TB_FORMA_PGTO VALUES (null,"'.$nome.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		alert("Erro ao cadastrar");
	}
}
// CadastrarFormaPgto("Cartão de crédito");
function ExcluirFormaPgto($cd){
	$sql = 'DELETE FROM TB_FORMA_PGTO WHERE CD_FORMA_PGTO ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		alert("Erro ao excluir");
	}
}
function ListarFormaPgto(){
	$sql = 'SELECT * FROM TB_FORMA_PGTO';
	$res = $GLOBALS['con']->query($sql);
	return $res;	
}
function AtualizarFormaPgto($cd, $nome){
	$sql= 'UPDATE TB_FORMA_PGTO SET NM_PGTO = "'.$nome.'" WHERE CD_FORMA_PGTO = '.$cd;
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Atualizado!");
	}else{
		alert("Erro ao atualizar");
	}
}
/*$formas=ListarFormaPgto();
  while ($forma = $formas->fetch_array()){
  	echo $forma['CD_FORMA_PGTO'];
  	echo $forma['NM_PGTO'];
  }*/
  
// -- formas de pagamento

// crud usuario
function CadastrarUsuario($nome, $sobrenome, $email, $sexo, $cpf, $nascimento, $endereco, $bairro, $cidade, $cep, $estado, $referencia, $telefone, $celular, $nivel, $foto, $saldo=0, $status="", $senha){
	$sql = 'INSERT INTO TB_USUARIO (NM_USUARIO, NM_SOBRENOME, DS_EMAIL, DS_SEXO, DT_NASCIMENTO, NR_CELULAR, DS_SENHA ) VALUES ("'.$nome.'", "'.$sobrenome.'", "'.$email.'", "'.$sexo.'", "'.$nascimento.'", "'.$celular.'","'.$senha.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		alert("Erro ao cadastrar");
	}
}
//crud reservas
function ListarUsuario(){
	$sql='SELECT * FROM TB_USUARIO';
	$res= $GLOBALS['con']->query($sql);
 	return $res;
 	  }
//função de login
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
//Colocar Atualizar Usuario
//função sair
function Sair(){
	if(isset($_GET['Sair'])){
		session_destroy();
			echo '<script> window.location="index.php";</script>';
	}
}

//CadastrarUsuario("Raniel", "", "raniel@raniel.com", "", "", "1994-11-01", "Maxmíno Nunes Barreto, 36", "Oasis", "Itamhaém", "11740000", "SP", "", "1334223713", "13997267744", "", "dmasdmsd", "","", "");

function ExcluirUsuario($cd){
	$sql = 'DELETE FROM TB_USUARIO WHERE CD_USUARIO ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert(" Usuario Excluido com sucesso");
	}else{
		alert("Erro ao Excluir o Usuario");
	}
}
// -- crud usuario

//Crud Produtos
//function CadastrarProduto($nomeproduto,$descricao,$cdbarras,$quantidadeestoque,$quantidademin,$quantidademax,$ncm,$valorcusto,$valorproduto,"' id do Fabricante'","'.Id Da Categoria"){
	//$sql='INSERT INTO TB_PRODUTO VALUES (null,"'.$nomeproduto.'","'$descricao'","'.$cdbarras.'","'.$quantidadeestoque.'","'.$quantidademin.'","'.$quantidademax.'","'.$ncm.'","'.$valorcusto.'","'.$valorproduto.'","' id do Fabricante'","'.Id Da Categoria.'")';
	//$res = $GLOBALS['con']->query($sql);
	//if($res){
	//	alert(" Produto Cadastrado com sucesso");
	//}else{
	//	alert("Erro ao Cadastrar o Produto");
	//}
//}
//Função Listar Produtos
//function ListarProduto(){
//	$sql='SELECT * FROM TB_PRODUTO';
//	$res=$GLOBALS['con']->query($sql);
//	return $res;
//}
function ExcluirProduto($cd){
	$sql = 'DELETE FROM TB_PRODUTO WHERE CD_PRODUTO ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Produto Excluido com sucesso");
	}else{
		alert("Erro ao Excluir o Produto");
	}
}
//--Crud Produtos
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


// funcoes uteis
function alert($msg){
	echo '<script>alert("'.$msg.'");</script>';
}


//-- funçoes uteis