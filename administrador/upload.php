<?php
include_once '../controller/header.php';
include_once '../models/conexao.php';

$sql = "SELECT * FROM upload_slides WHERE status = 0";
$result = mysqli_query($connect, $sql);

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
	$id_user = $_SESSION['id_user'];
	$sqll = "SELECT * FROM users WHERE id = '$id_user'";
	$resultado = mysqli_query($connect, $sqll);
	$dados = mysqli_fetch_array($resultado);
}
?>
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-lg-12">
        <h2>Upload de Imagens</h2>
      </div>
    </div>
    <!-- /. ROW  -->
    <hr />
    <div class="row">
      <div class="col-lg-12 ">
        <div class="alert alert-info">
          <strong>Bem - vindo! pronto para fazer o upload de novos arquivos </strong>
        </div>
      </div>
    </div>
    <form action="../controller/upload.php"  accept-charset="utf-8" method="post" enctype="multipart/form-data">
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



      <div class="mt-5">
          <table class="table table-striped mt-4">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Data</th>
              <th scope="col">Descrição</th>
              <th scope="col">Opções</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($dado = mysqli_fetch_array($result)) {?>
            <tr>
              <th scope="row"> <?php echo $dado['id']; ?> </th>
              <td><?php echo utf8_encode($dado['arquivo']); ?></td>
              <td><?php echo $dado['data']; ?></td>
              <td><?php echo $dado['descricao']; ?></td>
              <td> <a data-toggle="modal" href="#modal<?php echo $dado['id']; ?>">Excluir</a></td>




            <!-- Modal estrutura Ecluir -->
            <!-- Modal -->
            <div class="modal fade" id="modal<?php echo $dado['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Excluir o produto <?php echo utf8_encode($dado['descricao']); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <p>Tem certeza que deseja excluir esse produto?</p>
                  </div>
                  <div class="modal-footer">
                    <form action="../controller/excluir.inc.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $dado['id']; ?>">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          <button type="submit" class="btn btn-primary">Excluir</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </tr>
          <?php }?>
          </tbody>
        </table>
      </div>
  </div>
  <!-- /. PAGE INNER  -->


</div>
<?php
include_once '../controller/footer.php';
?>
