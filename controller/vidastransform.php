<?php
header("content-type: text/html: charset=utf-8");
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

	$format = array("png", "jpg", "bmp"); //formatos permitidos
	$ext = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION); // pegar extensao

	// verificar se o arquivo e valido (a extensao do arquivo)

	if (in_array($ext, $format)) {
		$dir = "../galeria/vidas/"; // pasta que vai ter os upload
		// $file_name = basename($_FILES['upload']['name']); // dar novo nome ao arquivo
		$newName = md5(time()) . "." . $ext;
		$tmp = $_FILES['arquivo']['tmp_name']; // Directory temporario
		$msg = 0;
		//verificar erros de upload
		if ($_FILES['arquivo']['error'] === 0) {
			//verificar tamanho do arquivo 1mb == 1 000 000 bytes
			if ($_FILES['arquivo']['size'] < 15000000) {
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

	$titulo = clear($_POST['titulo']);
	$subtitulo = clear($_POST['Subtitulo']);
	$autor = clear($_POST['autor']);
	$noticia = clear($_POST['Noticia']);

	$sql = "INSERT INTO vidas (id, titulo, subtitulo, texto, data, autor, foto) VALUES (NULL, '$titulo', '$subtitulo', '$noticia', NOW(), '$autor', '$newName')";
	if (mysqli_query($connect, $sql)) {
		header('Location: ../administrador/vidas.php?cadastro = sucess');
		exit();
	}
}

mysqli_close($connect);
