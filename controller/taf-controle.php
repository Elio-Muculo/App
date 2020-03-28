<?php
require_once '../models/conexao.php';
if (isset($_POST)) {
	function clear($input) {
		global $connect;
		// sql injection
		$filter = mysqli_real_escape_string($connect, $input);
		// XSS
		$filter = htmlspecialchars($filter);
		return $filter;
	}
	$format = array("ogv", "wmv", "mp4", "mkv"); //formatos permitidos
	$ext = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION); // pegar extensao
	// verificar se o arquivo e valido (a extensao do arquivo)
	if (in_array($ext, $format)) {
		$dir = "../galeria/videos/"; // pasta que vai ter os upload
		// $file_name = basename($_FILES['upload']['name']); // dar novo nome ao arquivo
		$newName = md5(time()) . "." . $ext;
		$tmp = $_FILES['arquivo']['tmp_name']; // Directory temporario
		$msg = 0;
		//verificar erros de upload
		if ($_FILES['arquivo']['error'] === 0) {
			//verificar tamanho do arquivo 1mb == 1 000 000 bytes
			if ($_FILES['arquivo']['size'] < 55000000) {
				//verificar se upload foi feito
				if (move_uploaded_file($tmp, $dir . $newName)) {
					$msg = 1;
				} else {
					$msg = 0;
				}
			} else {
				echo "FIle size is not supported";
			}
		} else {
			echo "Houve erro ao fazer upload";
		}
	}
	$desc = clear($_POST['desc']);
	$sql = "INSERT INTO tafvideos (id, arquivo, data, descricao) VALUES (NULL, '$newName', NOW(), '$desc')";
	if (mysqli_query($connect, $sql)) {
		header('Location: ../administrador/taf.php?upload = sucess');
		exit();
	}
}
mysqli_close($connect);