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
$data = clear($_POST['data']);
$desc = clear($_POST['desc']);
if (!empty($data) and !empty($desc)) {
	// 	$dia = explode("-", $data);
	// $data = $_POST['data'];
	// date("d - F - Y", strtotime($data));
	$sql = "INSERT INTO agenda (id, data, descricao) VALUES (NULL, '$data', '$desc')";
	mysqli_query($connect, $sql);
	header("Location: ../administrador/agenda.php?mensagem=sucess");
	mysqli_close($connect);
}
