<?php

header("content-type: text/html: charset=utf-8");
require_once '../models/conexao.php';
function clear($input) {
	global $connect;
	// sql injection
	$filter = mysqli_real_escape_string($connect, $input);
	// XSS
	$filter = htmlspecialchars($filter);
	return $filter;
}

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//#########################################
$nome = clear($_POST['nome']);
$pais = clear($_POST['nacionalidade']);
$sexo = clear($_POST['sexo']);
$idade = clear($_POST['idade']);
$nrFilhos = clear($_POST['filhos']);
$city = clear($_POST['city']);
$bairro = clear($_POST['bairro']);
$contato = clear($_POST['contato']);
$msg = clear($_POST['msg']);
$msg2 = clear($_POST['msg2']);
$assunto = "Terapia Espiritual";

// comboboxes
$estado_civil = $_POST['list1'];
$estado = $_POST['estado'];
// Load Composer's autoloader
require '../vendor/autoload.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
//Server settings
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = 'base64';
	$mail->SMTPDebug = 0;
	$mail->isSMTP(); // Send using SMTP
	$mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = 'emuculo25@gmail.com'; // SMTP username
	$mail->Password = 'eliodark25'; // SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	$mail->Port = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
	//Recipients
	$mail->setFrom("darkamgel38@gmail.com", $nome);
	$mail->addAddress('emuculo25@gmail.com', 'TAF'); // Add a recipient
	// Content
	$mail->isHTML(true); // Set email format to HTML
	$mail->Subject = $assunto;
	$mail->Body = "Olá, tudo bem sou " . $nome . "<br> <br> <br> " . "Sou residente do bairro $bairro cidade de $city em $pais e tenho $idade anos do sexo $sexo meu estado civil é $estado_civil tenho $nrFilhos filhos
	<br> <br> Meu contacto: $contato <br> <br>Meu estado actual $estado detalhando $msg2 minha preocupação $msg <br> <br> TAF obrigado por contactar. ";

	$mail->send();
	echo 'Message has been sent';
	header('Location: ../index.php?email-enviado');
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
