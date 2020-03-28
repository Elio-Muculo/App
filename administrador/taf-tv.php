<?php
include_once '../controller/header.php';
include_once '../models/conexao.php';
//sessao
session_start();

// verificar sessao
if (!isset($_SESSION['logado'])) {
	header('Location: login.php?signup');
	exit();
}

//
if (isset($_SESSION['logado'])) {
	//dados
	$id = $_SESSION['id_user'];
	$sql = "SELECT * FROM users WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
}
?>
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-lg-12">
				<h2>Plataforma de Videos </h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-lg-12">
				<div class="alert alert-info">
					<strong>Bem - vindo! videos e pequena descrição dos respectivos eventos</strong>
				</div>
			</div>
		</div>
		<form action="../controller/taf-controle.php"  accept-charset="utf-8" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col">
					<input type="text" class="form-control" placeholder="nome do arquivo" name="nome">
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Descrição do arquivo" name="desc">
				</div>
			</div>
			<div class="custom-file mt-4">
				<input type="file" class="custom-file-input" name="arquivo" id="customFileLang">
				<label class="custom-file-label" for="customFileLang">Selecionar Arquivo</label>
			</div>
			<button class="btn btn-primary mt-2" type="submit">Upload</button>
		</form>
	</form>
</div>
</div>

<?php
include_once '../controller/footer.php';
?>
