<?php
   include('../../conexao.php');
   function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false){
   // Caracteres de cada tipo
   $lmin = 'abcdefghijklmnopqrstuvwxyz';
   $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $num = '1234567890';
   $simb = '!@#$%*-';
   // Variaveis internas
   $retorno = '';
   $caracteres = '';
   
   // Agrupamos todos os caracteres que poderão ser utilizados
   $caracteres .= $lmai;
   if ($maiusculas) $caracteres .= $lmin;
   if ($numeros) $caracteres .= $num;
   if ($simbolos) $caracteres .= $simb;
   
   // Calculamos o total de caracteres possíveis
   $len = strlen($caracteres);
   for ($n = 1; $n <= $tamanho; $n++) {
   // Criamos um número aleatório de 1 até $len para pegar um dos caracteres
   $rand = mt_rand(1, $len);
   // Concatenamos um dos caracteres na variável $retorno
   $retorno .= $caracteres[$rand-1];
   }
   return $retorno;
   }
   
   $senha = geraSenha(10, false, true, false);
   
   if(isset($_POST['email-rec'])){
       $a = $_POST['email-rec'];
       $am = ListarEmailRecuperacao($a);
         while ($an = $am->fetch_array()){
            $codigo = ($an['CD_USUARIO']);
         }
      AtualizarSenha($codigo, md5($senha));
      alert('Senha enviada para o email, siga as instruções.'); 
      echo '<script> window.location="../../index.php";</script>';
   }else{
   	echo '<script> window.location="../../index.php";</script>';
   }
   //______________________________________________________________________________
   include "class.phpmailer.php";
   include "class.smtp.php";
   $email_user = "sitemeucarrinho.com@gmail.com";
   $email_password = "meu1212carrinho";
   $the_subject = "Recuperação de Senha";
   $address_to = $a;
   $from_name = "Equipe de recuperação de senha.";
   $phpmailer = new PHPMailer();
   // ---------- datos de la cuenta de Gmail -------------------------------
   $phpmailer->Username = $email_user;
   $phpmailer->Password = $email_password; 
   //-----------------------------------------------------------------------
   // $phpmailer->SMTPDebug = 1;
   $phpmailer->SMTPSecure = 'ssl';
   $phpmailer->Host = "smtp.gmail.com"; // GMail
   $phpmailer->Port = 465;
   $phpmailer->IsSMTP(); // use SMTP
   $phpmailer->SMTPAuth = true;
   $phpmailer->CharSet = 'utf-8';
   $phpmailer->setFrom($phpmailer->Username,$from_name);
   $phpmailer->AddAddress($address_to); // recipients email
   $phpmailer->Subject = $the_subject;	
   $phpmailer->Body .='<!DOCTYPE html>
   <html>
   <head>
   	<meta charset="utf-8">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
         </script>
         <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
         <style type="text/css">
         	.col-md-6{
         		border: 3px solid black;
         		background-color: #dddddd;
         	}
         	.logo{
         		width: 180px;
         		height: 155px;
         		padding: 15px;
         	}
         	@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
        	@import url("https://fonts.googleapis.com/css?family=Marvel");
   		body {
       font-family: "Marvel", sans-serif;
       background: #fafafa;
   	}
   	p {
       font-family: "Marvel", sans-serif;
       font-size: 1.1em;
       font-weight: 300;
       line-height: 1.7em;
       color: black;
       padding: 15px;
   }
         </style>
   </head>
   <body>
   	<div class="container-fluid">
   		<div class="row ">
   			<div class="col  col-md-6">
   				<div class="row " style="text-align: center;">
   				<img src="https://tcc-xtranx.c9users.io/rascunho-tcc/imgs/logo1.png" class="logo">
   			
   				<h2 style="color: #FF4500; text-align: center;">Equipe Meu Carrinho.com</h2>
   			
   				
   				<h1 style="text-align: center;">RECUPERÇÃO DE SENHA</h1>
   			
   			<p style="text-align: center;"><b><i>Leia as instrções com ateção</i></b></p>
   			</div>	
   				<p>Senha Temporária:<span style="color: #FF4500;"> <b>'.$senha.'</b></span><br>
       Faça login com a senha provisória, depois vá em conficurações, click em atualizar senha, no campo senha antiga digite a senha provisória, depois preencha sua nova senha, confirme a digitando novamente a senha, depois click no botão atualizar.</p>
      
   			</div>		
   		</div>
   	</div>	
   	
   
   </body>
   </html>';
   $phpmailer->Body .= "<p>Data e Hora: ".date("d-m-Y h:i:s")."</p>";
   $phpmailer->IsHTML(true);
   $phpmailer->Send();
   
   ?>