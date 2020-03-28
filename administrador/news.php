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
                <h2>Cadastro de Noticias</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-lg-12 ">
                <div class="alert alert-info">
                    <strong>Bem - vindo! cadastre novas noticias e deixe seus seguidores actualizados</strong>
                </div>
            </div>
        </div>
        <form action="../controller/noticias.php"  accept-charset="utf-8" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputtitle">Titulo</label>
                    <input type="text" class="form-control" id="inputtitle" placeholder="titulo" name="titulo">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputSubtitulo">Subtitulo</label>
                    <input type="text" class="form-control" id="Subtitulo" placeholder="Subtitulo" name="Subtitulo">
                </div>
            </div>
            <div class="form-group">
                <label for="Noticia">Redação da noticia</label>
                <textarea class="form-control" id="Noticia" name="Noticia" rows="4"></textarea>
            </div>
            <div class="custom-file mt-2">
                <input type="file" class="custom-file-input" name="arquivo" id="customFileLang">
                <label class="custom-file-label" for="customFileLang">Selecionar Arquivo</label>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputautor">Autor da noticia</label>
                    <input type="text" class="form-control" id="inputautor" name="autor">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php
include_once '../controller/footer.php';
?>
