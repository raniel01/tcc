<?php
// array com dados nescessarios a serem enviados
// array com dados nescessarios a serem enviados
header('Content-Type: text/html; charset=utf-8');
include_once('../conexao.php');
session_start();
$i=0;
$data['token']='A23DC63E423F469C9F7679833B2C8881';
$data['email']='joaoeuno2011@gmail.com';
$data['currency']='BRL';
 $a = MostrarCarrinhoUsuario($_SESSION['id']);
	while($mostrar = $a->fetch_array()){
		$id = $mostrar['CD'];
		$nome = $mostrar['PRODUTO'];
		$quantidade = $mostrar['QUANTIDADE DO PRODUTO'];
		$valor = $mostrar['VALOR DO PRODUTO'];
		$i++;
		$data['itemId'.$i]=$id;
		$data['itemQuantity'.$i]=$quantidade;
		$data['itemDescription'.$i]=$nome;
		$data['itemAmount'.$i]=$valor;	
	}


// url do pagseguro

$http = 'https://ws.pagseguro.uol.com.br/v2/checkout';

// strig de consulta
$data = http_build_query($data);

// inicia sessao curl
$curl = curl_init($http);

// enia opções para tranferencia curl
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

// executa a sessao curl
$xml = curl_exec($curl);

// fecha a sessao curl
curl_close($curl);

// le o xml
$xml = simplexml_load_string($xml);

// escreve na tela
echo $xml->code;
