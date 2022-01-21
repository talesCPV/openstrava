<?php

	function smtpmailer($user, $pass, $para, $de, $de_nome, $assunto, $corpo) { 
		$mail = new PHPMailer();
		$mail->IsSMTP();		// Ativar SMTP
		$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
		$mail->SMTPAuth = true;		// Autenticação ativada
		$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
		$mail->Host = 'flexibus.com.br';	// SMTP utilizado
		$mail->Port = 465;  		// A porta 465 deverá estar aberta em seu servidor
		$mail->IsHTML(true); 
		$mail->CharSet = 'UTF-8';
		$mail->Username = $user;
		$mail->Password = $pass;
		$mail->SetFrom($de, $de_nome);
		$mail->Subject = $assunto;
		$mail->Body = $corpo;
		$mail->AddAddress($para);
		if(!$mail->Send()) {
			return 'Houve um erro no envio, favor tentar mais tarde: '.$mail->ErrorInfo; 
		} else {
			return true;
		}
	}



	require_once("class.phpmailer.php");


	$name = $_POST["name"];
	$toaddr = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

//	$host = "ns610.hostgator.com.br"; 
//	$usuario = 'site@flexibus.com.br';
//	$senha = '@Flex0169';
//  $fromaddr = "comercial@flexibus.com.br";

$usuario = 'tales@openstrava.com';
$senha = 'Xspider0#';
$fromaddr = $usuario;
$fromname = "OpenStrava";



//	$name = "OpenStrava - Confirm New User"];



//	echo('usuario:'.$usuario.' senha:'.$senha.' para:'.$fromaddr.' de:'.$toaddr. ' nome:'.$name.' assunto:'.$subject.' mss:'.$mensagem);
	smtpmailer($usuario, $senha, $toaddr, $fromaddr, $fromname, $subject, $message);



?>