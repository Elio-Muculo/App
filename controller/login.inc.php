<?php
include_once '../models/conexao.php';
if (isset($_POST['btn'])) {

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

	$nome = clear($_POST['nome']);
	$pass = clear($_POST['password']);

	if (empty($nome) || empty($pass)) {
		header("Location: ../administrador/login.php?empty fields");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE nome = '$nome'";
		$result = mysqli_query($connect, $sql);
		if (mysqli_num_rows($result) < 1) {
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($dados = mysqli_fetch_array($result)) {
				$hashedPass = password_verify($pass, $dados['senha']);

				if ($hashedPass == false) {
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedPass == true) {
					if ($dados['status'] == 1) {
						$_SESSION['logado'] = true;
						$_SESSION['id_user'] = $dados['id'];
						$_SESSION['name_user'] = $dados['nome'];
						header("Location: ../administrador/index.php?login=sucess");
						exit();
					} else {
						$_SESSION['logado'] = true;
						$_SESSION['id_user'] = $dados['id'];
						$_SESSION['name_user'] = $dados['nome'];
						header("Location: ../administrador/index.php?login=sucess");
						exit();
					}
				}
			}
		}
	}
} else {
	header("Location: login.php");
	exit();
}
