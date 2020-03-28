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
                <h2>Painel de Controle</h2>
                <?php if (isset($_GET['mensagem=sucess'])): ?>
                <?php echo "<h5> teste funcionando </h5>"; ?>
                <?php endif?>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-lg-12 ">
                <div class="alert alert-info">
                    <strong>Bem - vindo!</strong>
                </div>
            </div>
        </div>
        <form method="post" action="../controller/dailyword.php"  accept-charset="utf-8">
            <div class="row">
                <div class="col-lg-12 mr-auto ">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mensagem do dia</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="3"></textarea>
                    </div>
                    <input type="submit" name="btn-msg" class="btn btn-primary mt-2" value="Enviar">
                </div>
            </div>
        </form>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<?php
include_once '../controller/footer.php';
?>
