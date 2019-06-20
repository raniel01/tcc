<?php
//conexão
$user = "root";
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

?>
