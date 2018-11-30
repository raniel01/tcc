<?php
include('con.php');
session_start();
$func = $_GET['func'];
/*seletor de função*/
switch($func){
	/*caso selecionado session*/
	case 'session':
			PaginaCarrinho($_GET['carrinho']);
	break;
}
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
	$sql = 'INSERT INTO TB_USUARIO (NM_USUARIO, NM_SOBRENOME, DS_EMAIL, DS_SEXO, DT_NASCIMENTO, NR_CELULAR, DS_FOTO, DS_SENHA ) VALUES ("'.$nome.'", "'.$sobrenome.'", "'.$email.'", "'.$sexo.'", "'.$nascimento.'", "'.$celular.'","'.$foto.'","'.$senha.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Cadastrado com sucesso");
	}else{
		alert("Erro ao cadastrar");
	}
}
//------------------------------------------------------------------------------
function CadastrarProduto($nomeproduto,$foto,$descricao,$barras,$quantidadeestoque,$quantidademin,$quantidademax,$ncm,$valorcusto,$valorproduto,$fabricante,$categoria,$usuario){
	$sql='INSERT INTO TB_PRODUTO VALUES (null,"'.$nomeproduto.'","'.$foto.'","'.$descricao.'","'.$barras.'","'.$quantidadeestoque.'","'.$quantidademin.'","'.$quantidademax.'","'.$ncm.'","'.$valorcusto.'","'.$valorproduto.'","'.$fabricante.'","'.$categoria.'","'.$usuario.'")';
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
	$sql = 'DELETE FROM TB_PRODUTO WHERE CD_INTERNO ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Produto Excluido com sucesso");
	}else{
		alert("Erro ao Excluir o Produto");
		alert($sql);
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
		alert("Erro ao atualizar forma de pagamento");
	}
}
//------------------------------------------------------------------------------
function AtualizarFabricante($cd, $nm_fabricante){
	$sql= 'UPDATE TB_FABRICANTE SET NM_FABRICANTE = "'.$nm_fabricante.'" WHERE CD_FABRICANTE ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Atualizado!");
	}else{
		alert("Erro ao atualizar fabricante");
	}
}
//------------------------------------------------------------------------------
function AtualizarCategoria($cd, $nm_categoria){
	$sql= 'UPDATE TB_CATEGORIA SET NM_CATEGORIA = "'.$nm_categoria.'" WHERE CD_INTERNO ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Atualizado!");
	}else{
		alert("Erro ao atualizar categoria");
	}
}
//------------------------------------------------------------------------------
function AtualizarUsuario($cd, $nome, $sobrenome, $email, $cpf,   $nascimento, $sexo, $endereco, $bairro, $cidade, $cep, $estado, $ponto, $telefone, $celular){
	$sql='UPDATE TB_USUARIO SET  NM_USUARIO="'.$nome.'", NM_SOBRENOME="'.$sobrenome.'", DS_EMAIL="'.$email.'", DS_SEXO="'.$sexo.'", NR_CPF="'.$cpf.'", DT_NASCIMENTO="'.$nascimento.'", NM_ENDERECO="'.$endereco.'", NM_BAIRRO="'.$bairro.'", NM_CIDADE="'.$cidade.'", CD_CEP="'.$cep.'", SG_ESTADO="'.$estado.'", NM_PONTO_REFERENCIA="'.$ponto.'", NR_TELEFONE="'.$telefone.'", NR_CELULAR="'.$celular.'" WHERE CD_USUARIO = '.$cd;
	$res = $GLOBALS['con']->query($sql);
		if ($res) {
			alert("Atualizado!");
		}else{
			alert("Erro ao atualizar usuario");
		}
		
}
function AtualizarUsuarioTodos($cd,$status){
/*	echo var_dump($cd);
	echo var_dump($status);*/
	$sql="";
	for($i=0; $i<sizeof($cd);$i++){
		if($status[$i] == "ADM")
		$sql.='UPDATE TB_USUARIO SET DS_NIVEL = "'.$status[$i].'" WHERE CD_USUARIO = '.$cd[$i].'; ';
	}
	/*echo $sql ;*/
	$GLOBALS['con']->query($sql);
	// if ($res) {
	// 		alert("Atualizado!");
	// 	}else{
	// 		alert("Erro ao atualizar usuario");
	// 	}
}
function AtualizarAdmTodos($cd,$status){
/*	echo var_dump($cd);
	echo var_dump($status);*/
	$sql="";
	for($i=0; $i<sizeof($cd);$i++){
		if($status[$i] == "USU")
		$sql.='UPDATE TB_USUARIO SET DS_NIVEL = "'.$status[$i].'" WHERE CD_USUARIO = '.$cd[$i].'; ';
	}
	/*echo $sql ;*/
	$GLOBALS['con']->query($sql);
	// if ($res) {
	// 		alert("Atualizado!");
	// 	}else{
	// 		alert("Erro ao atualizar usuario");
	// 	}
}
//------------------------------------------------------------------------------
function AtualizarSenha($cd, $senha){
	$sql='UPDATE TB_USUARIO SET  DS_SENHA="'.$senha.'" WHERE CD_USUARIO='. $cd;
	$res = $GLOBALS['con']->query($sql);
		if ($res) {
			alert("Senha atualizada com sucesso");
		}else{
			alert("Erro ao atualizar senha");
		}
}
//------------------------------------------------------------------------------
function AtualizarFotoPerfil($cd, $foto){
	$sql='UPDATE TB_USUARIO SET  DS_FOTO="'.$foto.'" WHERE CD_USUARIO='. $cd;
	$res = $GLOBALS['con']->query($sql);
		if ($res) {
			alert("Foto atualizada com sucesso");
				echo '<script> window.location="perfil.php";</script>';
		}else{
			alert("Erro ao atualizar foto");
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
function ListarUsuarioUsu(){
	$sql='SELECT * FROM TB_USUARIO 
WHERE  DS_NIVEL = "USU"
ORDER BY TB_USUARIO.CD_USUARIO DESC limit 0,7';
	$res= $GLOBALS['con']->query($sql);
 	return $res;
 	  }
 function ListarUsuarioTodos(){
	$sql="SELECT CONCAT(NM_USUARIO,' ',NM_SOBRENOME) AS 'NOME', CD_USUARIO, DS_FOTO, DS_NIVEL  FROM TB_USUARIO 
WHERE  DS_NIVEL = 'USU'
ORDER BY TB_USUARIO.CD_USUARIO DESC";
	$res= $GLOBALS['con']->query($sql);
 	return $res;
 	  }
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
function ListarUsuarioAdm(){
	$sql='SELECT * FROM TB_USUARIO 
WHERE  DS_NIVEL = "ADM"
ORDER BY TB_USUARIO.CD_USUARIO DESC limit 0,8';
	$res= $GLOBALS['con']->query($sql);
 	return $res;
}

function ListarUsuarioAdmTodos(){
	$sql='SELECT * FROM TB_USUARIO 
WHERE  DS_NIVEL = "ADM"
ORDER BY TB_USUARIO.CD_USUARIO DESC';
	$res= $GLOBALS['con']->query($sql);
 	return $res;
}
//------------------------------------------------------------------------------
function ListarUsuarioCerto($cd){
	$sql='SELECT * FROM TB_USUARIO WHERE CD_USUARIO LIKE '.$cd;
	$res= $GLOBALS['con']->query($sql);
	return $res;
}
//------------------------------------------------------------------------------
function ListarEmailRecuperacao($email_rec){
	$sql='SELECT * FROM TB_USUARIO WHERE DS_EMAIL LIKE "'.$email_rec.'"';
	$res= $GLOBALS['con']->query($sql);
	return $res;
}
//------------------------------------------------------------------------------
function ListarProduto(){
	$sql='SELECT * FROM TB_PRODUTO';
	$res=$GLOBALS['con']->query($sql);
	return $res;
}
function ListarUltimosProdutos(){
	$sql = 'SELECT * FROM TB_PRODUTO ORDER BY CD_INTERNO DESC LIMIT 7';
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
//------------------------------------------------------------------------------
function ListarFabricante(){
	$sql = 'SELECT * FROM TB_FABRICANTE';
	$res = $GLOBALS['con']->query($sql);
	return $res;	
}
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
function ListarFabricanteBusca(){
	$sql = 'SELECT * FROM TB_FABRICANTE ORDER BY TB_FABRICANTE.CD_FABRICANTE ASC limit 0,5';
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
	// SELECT * FROM tb_desejos WHERE id_produto = 17,
	if($res->num_rows > 0){
		$usuario = $res->fetch_array();
		$_SESSION['id']=$usuario['CD_USUARIO'];
		$_SESSION['nome']=$usuario['NM_USUARIO'];
		$_SESSION['foto']=$usuario['DS_FOTO'];
		echo '<script> window.location="perfil.php";</script>';
		
	}else{
		echo '<div class = "alert alert-danger mt-5">
					Dados Incorretos
			  </div>';
	}
	
}
//------------------------------------------------------------------------------
function LoginAdm($email,$senha){
	$sql ='SELECT * FROM  TB_USUARIO WHERE DS_EMAIL =  "'.$email.'"
		   AND DS_SENHA =  "'.md5($senha).'" AND DS_NIVEL =  "ADM" OR  DS_EMAIL =  "'.$email.'"
		   AND DS_SENHA =  "'.md5($senha).'" AND DS_NIVEL =  "GES" ';
	$res = $GLOBALS['con']->query($sql);
	//alert($sql);
	if($res->num_rows > 0){
		$usuario = $res->fetch_array();
		$_SESSION['id']=$usuario['CD_USUARIO'];
		$_SESSION['nome']=$usuario['NM_USUARIO'];
		$_SESSION['foto']=$usuario['DS_FOTO'];
		$_SESSION['nivel']=$usuario['DS_NIVEL'];
		echo '<script> window.location="index.php";</script>';
		
	}else{
		alert("Dados Incorretos");
	}
	
}
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
function LoginGes($email,$senha){
	$sql ='SELECT * FROM  TB_USUARIO WHERE DS_EMAIL =  "'.$email.'"
		   AND DS_SENHA =  "'.md5($senha).'" AND DS_NIVEL =  "GES" ';
	$res = $GLOBALS['con']->query($sql);
	//alert($sql);
	if($res->num_rows > 0){
		$usuario = $res->fetch_array();
		$_SESSION['id']=$usuario['CD_USUARIO'];
		$_SESSION['nome']=$usuario['NM_USUARIO'];
		$_SESSION['foto']=$usuario['DS_FOTO'];
		$_SESSION['nivel']=$usuario['DS_NIVEL'];
		echo '<script> window.location="index.php";</script>';
		
	}else{
		alert("Dados Incorretos");
	}
	
}
//------------------------------------------------------------------------------
function Sair(){
	if(isset($_GET['Sair'])){
		session_destroy();
			echo '<script> window.location="index.php";</script>';
	}
}
function SairAdm(){
	if(isset($_GET['Sair'])){
		session_destroy();
			echo '<script> window.location="loginadm.php";</script>';
	}
}
//------------------------------------------------------------------------------
function BuscaProduto($busca){
	$sql='SELECT * FROM TB_PRODUTO WHERE NM_PRODUTO LIKE "%'.$busca.'%" order by CD_INTERNO DESC limit 0,12 ';
	$res=$GLOBALS['con']->query($sql);
	//echo ($sql);
	//echo '<script> window.location="busca.php?busca="'.$busca.'"";</script>';
	return $res;
}
//------------------------------------------------------------------------------
function BuscaCategoria($busca_categoria){
	$sql='SELECT * FROM TB_PRODUTO WHERE ID_CATEGORIA ="'.$categoria.'" order by CD_INTERNO DESC limit 0,12';
	$res=$GLOBALS['con']->query($sql);
	//echo ($sql);
	//echo '<script> window.location="busca.php?busca="'.$busca.'"";</script>';
	return $res;
}
//------------------------------------------------------------------------------
function ListaUnitaria($buscaunitaria){
	$sql='SELECT * FROM TB_PRODUTO WHERE CD_INTERNO ='.$buscaunitaria;
	$res=$GLOBALS['con']->query($sql);
	return $res;
}
//------------------------------------------------------------------------------
function ListaCategoriaProduto($idcategoria){
	$sql='SELECT * FROM TB_PRODUTO WHERE ID_CATEGORIA ='.$idcategoria.' order by CD_INTERNO DESC limit 0,15';
	$res=$GLOBALS['con']->query($sql);
	return $res;
}
//------------------------------------------------------------------------------
function QtdRegistrosUsuario(){
	$sql ='SELECT COUNT(CD_USUARIO) FROM TB_USUARIO';
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
//------------------------------------------------------------------------------

//------------------------------------------------------------------------------
function QtdRegistrosFabricante(){
	$sql ='SELECT COUNT(CD_FABRICANTE) FROM TB_FABRICANTE';
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
//------------------------------------------------------------------------------

//------------------------------------------------------------------------------
function QtdRegistrosProdutos(){
	$sql ='SELECT COUNT(CD_INTERNO) FROM TB_PRODUTO';
	$res = $GLOBALS['con']->query($sql);
	return $res;
	
}
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
function QtdRegistrosCategorias(){
	$sql ='SELECT COUNT(CD_CATEGORIA) FROM TB_CATEGORIA';
	$res = $GLOBALS['con']->query($sql);
	return $res;
	
}
//------------------------------------------------------------------------------

function ListaFabricanteProduto($idfabricante){
	$sql='SELECT * FROM TB_PRODUTO WHERE ID_FABRICANTE ='.$idfabricante.' order by CD_INTERNO DESC limit 0,15';
	$res=$GLOBALS['con']->query($sql);
	return $res;
}
/*function toArray($str){
		$aux = explode("]",explode("[",$str)[1])[0];
	}*/
//------------------------------------------------------------------------------
function alert($msg){
	echo '<script>alert("'.$msg.'");</script>';
}
//------------------------------------------------------------------------------
function NomeUsuario($id){
		$sql = "SELECT * FROM TB_USUARIO WHERE CD_USUARIO=".$id;
		$res = $GLOBALS['con']->query($sql);
		$reserva = $res->fetch_array();
		return $reserva['NM_USUARIO'];
	}
function NomeFabricante($id){
		$sql = "SELECT * FROM TB_FABRICANTE WHERE CD_FABRICANTE=".$id;
		$res = $GLOBALS['con']->query($sql);
		$reserva = $res->fetch_array();
		return $reserva['NM_FABRICANTE'];
	}
function NomeCategoria($id){
		$sql = "SELECT * FROM TB_CATEGORIA WHERE CD_CATEGORIA=".$id;
		$res = $GLOBALS['con']->query($sql);
		$reserva = $res->fetch_array();
		return $reserva['NM_CATEGORIA'];
	}	
//------------------------------------------------------------------------------
function PaginacaoProdutos($inicio,$porpagina){
	 //mostrando todos os produtos
        $sql = "SELECT * FROM TB_PRODUTO ORDER BY CD_INTERNO, NM_PRODUTO DESC";
        $produtos  = $GLOBALS['con']->query($sql);
        
        $total = $produtos->num_rows;
        
        $porpagina = 12;
        
        $total_pagina = ceil($total/$porpagina);
        
        $pagina = isset($_GET['p']) ? $_GET['p'] : 1;
        $inicio = ($pagina * $porpagina) - $porpagina;
        
        $sql = "SELECT * FROM TB_PRODUTO ORDER BY CD_INTERNO, NM_PRODUTO DESC LIMIT $inicio, $porpagina";
        $res = $GLOBALS['con']->query($sql);
        
}
//------------------------------------------------------------------------------
function SessionCar(){
	$car= $_POST['sessaoCar'];
	$id_produto = toArray($car);
	$_SESSION['car'] = $id_produto;
	
	echo "foi";
}
//------------------------------------------------------------------------------
function toArray($str){
	//deixando o array em forma de lista 
	$aux = explode("]",explode("[",$str)[1])[0];
	return explode(",",$aux);
}

function PaginaCarrinho($carrinho){
	session_start();
	
	$carrinho = str_replace('[', '', $carrinho);
	$carrinho = str_replace(']', '', $carrinho);
	$carrinho =explode(",", $carrinho);
	
	$_SESSION['newCar'] = $carrinho;
	
	if(count($carrinho>0)){
			foreach($carrinho as $id){
					
							$sql = 'SELECT * FROM TB_PRODUTO WHERE  CD_INTERNO='.$id;
							$res = $GLOBALS['con']->query($sql);
							$mostrar = $res->fetch_array();
							$cd = $mostrar['CD_INTERNO'];
							$qtd = $mostrar['QT_ESTOQUE'];
							$nome = $mostrar['NM_PRODUTO'];
							$img = $mostrar['DS_FOTO_PRODUTO'];
							$valor = $mostrar['VL_PRODUTO'];
							$quantidade['quantidade'] = $_REQUEST['valor'];
							
							echo '<div class = "col-md-4 col-lg-4 col-sm-12 mt-3 mt-md-0" id="produto'.$id.'">
			         <div class = "card">
			            <img class = "card-img-top" src = "'.$img.'" alt = "Card image cap">
			            <div class = "card-body">
			               <h5 class = "card-title">'.$nome.'</h5>
			               <p class = "card-text text-center">'.$valor.'</p>
			               <!-- Div quantidade -->
                            <div class = "qtde">
                                
                                <!-- Quantidade -->
                                <input type = "number"  name="valor[]" class = "form-control" value = "1">
                                
                            </div>
                            <!-- /Div quantidade -->
			               <button id ="remove" class = "rCar btn btn-danger"
			               data-codigo="'.$cd.'" data-produto="'.$nome.'">Remover do carrinho</button>
			            </div>
			         </div>
			      </div>
			</div>';
					
				
			}
	}else{
		echo $carrinho;
	}
}
					/*Adicionar item a lista*/
function AdicionarItem($cd, $conteudo){
	$sql = 'INSERT INTO TB_LISTA VALUES (null,"'.$conteudo.'", "'.$cd.'")';
	$res = $GLOBALS['con']->query($sql);
	if($res){
			echo '<script> window.location="lista.php";</script>';
	}else{
		("Erro ao cadastrar");
	}
}
					/*Visualizar item da lista*/
function ListarItemLista($cd){
	$sql='SELECT * FROM TB_LISTA WHERE ID_USUARIO LIKE '.$cd;
	$res= $GLOBALS['con']->query($sql);
	return $res;
}
				   /*Excluir Item da lista */
function ExcluirItemLista($cd){
	$sql = 'DELETE FROM TB_LISTA WHERE CD_LISTA ='.$cd;
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso");
	}else{
		alert("Erro ao excluir");
		echo $res;
	}
}

/*function AdicionarAoCarrinho()
$sql = */
					/*Excluir VARIOS Item da lista (CONSTRUÇÃO DO COMANDO)*/
					
/*function ExcluirItensLista($itens){
	$sql = 'DELETE FROM TB_LISTA WHERE CD_LISTA IN ('.$itens.')';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		alert("Excluido com sucesso itens");
	}else{
		alert("Erro ao excluir");
	}
	
	
}
//------------------------------------------------------------------------------

/*==============================================================================
						FIM FUNÇÕES ÚTEIS
==============================================================================*/