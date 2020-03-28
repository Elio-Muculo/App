<?php
include_once '../models/conexao.php';
if (isset($_POST)) {

	// start a session...
	session_start();

	// connect to databases...

	function clear($input) {
		global $connect;
		// sql injection
		$filter = mysqli_real_escape_string($connect, $input);

		// XSS
		$filter = htmlspecialchars($filter);
		return $filter;
	}

	$id = clear($_POST['id']);

	$sqld = "UPDATE upload_slides SET status = 1 WHERE id = '$id'";
	if (mysqli_query($connect, $sqld)) {
		header("Location: ../views/index.php?mensagem=delected");
		exit();
	}
}
