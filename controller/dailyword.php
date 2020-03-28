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
$mensagem = clear($_POST['msg']);
if (!empty($mensagem)) {
	$sql = "INSERT INTO msg (id, mensagem) VALUES (NULL, '$mensagem')";
	mysqli_query($connect, $sql);
	header("Location: ../administrador/admnistrador.php?mensagem=sucess");
	mysqli_close($connect);
} else {
	header("Location: ../administrador/admnistrador.php?mensagem=error");
}
