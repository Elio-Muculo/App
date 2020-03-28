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
                <h2>Agenda <i class="fa fa-calendar "></i></h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info">
                    <strong>Bem - vindo! hora de organizar a sua agenda</strong>
                </div>
            </div>
        </div>
        <form action="../controller/agenda.php"  accept-charset="utf-8" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <input type="date" class="form-control" placeholder="Data" name="data">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Descrição da agenda" name="desc">
                </div>
            </div>
            <button class="btn btn-primary mt-2" type="submit">Enviar</button>
        </form>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php
include_once '../controller/footer.php';
?>
