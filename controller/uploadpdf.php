<?php
header("content-type: text/html: charset=utf-8");
require_once '../models/conexao.php';
if (isset($_POST)) {
	function clear($input) {
		global $connect;
		//sql injection
		$filter = mysqli_real_escape_string($connect, $input);
		//XSS
		$filter = htmlspecialchars($filter);
		return $filter;
	}
	$format = array("pdf", "docx"); // formatos permitidos
	$ext = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION); //pegar extensao
	//verificar se arquivo é válido
	if (in_array($ext, $format)) {
		$dir = "../galeria/ficheiros/";
		$newName = md5(time()) . ".$ext";
		$tmp = $_FILES['arquivo']['tmp_name'];
		//verificar erros
		$msg = 0;
		if ($_FILES['arquivo']['error'] === 0) {
			//tamanho do arquivo
			if ($_FILES['arquivo']['size'] < 15000000) {
				if (move_uploaded_file($tmp, $dir . $newName)) {
					$msg = 1;
				} else {
					$msg = 0;
				}
			} else {
				echo 'File size is not supported';
			}
		} else {
			echo 'Erro no upload';
		}
	}
	$descricao = clear($_POST['desc']);
	$sql = "INSERT INTO pdfupload (id, arquivo, data, descricao) VALUES (NULL, '$newName', NOW(), '$descricao')";
	if (mysqli_query($connect, $sql)) {
		header('Location: ../index.php?upload = sucess');
		exit();
	}
}
mysqli_close($connect);
