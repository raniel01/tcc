<?php
// array com dados nescessarios a serem enviados
$data=[
	'token'=>'C5AACBC184564B8C92B0C51AE22DFFA0',
	'email'=>'gabrielleiteolimpio@gmail.com',
	'currency'=>'BRL',
	'itemId1'=>'1',
	'itemQuantity1'=>'1',
	'itemDescription1'=>'Produto de Teste',
	'itemAmount1'=>'20.00'
];

// url do pagseguro

$url = 'https://ws.pagseguro.uol.com.br/v2/checkout';

// strig de consulta
$data = http_build_query($data);

// inicia sessao curl
$curl = curl_init($url);

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
