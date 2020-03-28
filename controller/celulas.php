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

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
//#########################################
$nome = clear($_POST['nome']);
$pais = clear($_POST['Pais']);
$city = clear($_POST['city']);
$contacto = clear($_POST['cel']);
$msg = clear($_POST['msg']);
$assunto = "Célula";

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
	$mail->Body = "Olá, tudo bem sou " . $nome . "<br><br> " . "Sou residente do bairro $city em $pais.
	<br><br> $msg <br> <br> TAF obrigado por contactar. ";
	$mail->send();
	echo 'Message has been sent';
	header('Location: ../index.php?email-enviado');
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
