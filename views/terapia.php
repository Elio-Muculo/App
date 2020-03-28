<?php
include_once '../models/conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../lib/css/bootstrap.min.css" rel="stylesheet">
		<link href="../lib/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../lib/css/menu.css">
		<link rel="stylesheet" type="text/css" href="../lib/css/footer.css">
		<link href="../lib/css/hide-menu.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="../lib/css/bootstrap-reboot.css">
		<link rel="stylesheet" type="text/css" href="../lib/css/personalizado.css">
		<link href="lib/css/bootstrap-social.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="../lib/css/costumize.css">
		<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
		<script src="http://vjs.zencdn.net/4.12/video.js"></script>
		<style type="text/css">
		.vjs-default-skin { color: #ebc8c8; }
		.vjs-default-skin .vjs-control-bar,
		.vjs-default-skin .vjs-big-play-button { background: rgba(0,0,0,0.47) }
		.vjs-default-skin .vjs-slider { background: rgba(0,0,0,0.15666666666666665) }
		.vjs-default-skin .vjs-control-bar { font-size: 80% }
		</style>
		<title>Terapia Espiritual</title>
	</head>
	<body style="background-color: #eee;">
		<nav class="bg-dark py-1 nav-info">
			<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center align-content-center">
				<div>
					<a href="../index.php"><span class="fa fa-home"></span> Home</a>
					<a href="" class="mx-3" data-toggle="modal" data-target="#modalRegister"><span class="fa fa-envelope"></span> Fale conosco</a>
					<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Fale Connosco</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="send-mail.php" method="post" accept-charset="utf-8">
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Nome:</label>
											<input type="text" class="form-control" name="nome" id="recipient-name">
										</div>
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Seu Email:</label>
											<input type="text" class="form-control" name="email" id="recipient-name">
										</div>
										<div class="form-group">
											<label for="recipient-name" class="col-form-label">Assunto:</label>
											<input type="text" class="form-control" name="assunto" id="recipient-name">
										</div>
										<div class="form-group">
											<label for="message-text" class="col-form-label">Mensagem:</label>
											<textarea class="form-control" id="message-text" name="mensagem"></textarea>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
										<button type="submit" class="btn btn-primary">Enviar mensagem</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex align-items-center align-content-center flex-md-row flex-column mt-md-0 mt-2">
					<div class="d-flex flex-row justify-content-sm-start">
						<a href="https://facebook.com/igrejataf" target="_blank"><span class="fa fa-facebook mr-3"></span></a>
						<a href="https://twitter.com/igrejataf" target="_blank"><span class="fa fa-twitter mr-3"></span></a>
						<a href="#"><span class="fa fa-instagram mr-3"></span></a>
						<a href="https://youtube/igrejataf"><span class="fa fa-youtube mr-3"></span></a>
						<a href="#"><span class="fa fa-whatsapp mr-4"></span></a>
					</div>
					<form class="form-inline mt-md-0 mt-2">
						<div class="input-group">
							<input type="text" class="search form-control" placeholder="Buscar no site" aria-label="search" aria-describedby="basic-addon1">
							<div class="input-group-prepend">
								<span class="input-group-text bg-white search-icon" id="basic-addon1"> <i class="fa fa-search"></i> </span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</nav>
		<hr class="bg-danger my-0 pt-1">
		<!-- Inicio Menu logotipo & mensagem do dia-->
		<div class="menu-hide">
			<div class="bg-white shadow d-flex " style="height: 105px;">
				<div class="container d-md-flex flex-md-row flex-column justify-content-md-between justify-content-center align-items-center  px-5">
					<div> <img src="../galeria/logo.jpg" style="width: 150px; height: 80px;"> </div>
					<div>
						<div class="alert alert-info" role="alert" style="height: 80px;">
							<?php
$sql = "SELECT * FROM msg ORDER BY id DESC LIMIT 1";
$result = mysqli_query($connect, $sql);
while ($msg = mysqli_fetch_assoc($result)) {
	?>
							<p class="font-italic text-dark">" <?php echo $msg['mensagem']; ?> "</p>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Fim Menu logotipo & mensagem do dia -->
		<hr class="bg-dark my-0">
		<!-- Inicio Menu -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<!-- <a class="navbar-brand" href="#">navbar</a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse d-md-flex justify-content-md-center" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item mr-0 mr-md-5">
						<a class="nav-link text-uppercase text-dark" href="sobre.php">Sobre nós<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item mr-0 mr-md-5">
						<a class="nav-link text-uppercase text-dark" href="localizar.php">Localizar igreja</a>
					</li>
					<li class="nav-item mr-0 mr-md-5">
						<a class="nav-link text-uppercase text-dark" href="terapia.php">Terapia espiritual</a>
					</li>
					<li class="nav-item mr-0 mr-md-5">
						<a class="nav-link text-uppercase text-dark" href="contacto.php">contacto</a>
					</li>
					<li class="nav-item mr-0 mr-md-5">
						<a class="nav-link text-uppercase text-dark" href="taf.php">taf tv</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- Fim Menu -->
		<!-- main code of page sobre -->
		<!-- main page noticias publicidade -->
		<div class="container mt-4">
			<div class="row d-flex flex-md-nowrap flex-wrap ">
				<div class="col-md-9 bg-white shadow-sm">
					<!-- // code here -->
					<div class="mt-5 ml-4">
						<hr class="bg-danger ml-0 mb-0" style="width: 35px;">
						<h5 class="pt-2">TERAPIA ESPIRITUAL</h5>
					</div>
					<div class="mt-2 ml-5">
						<h5 class="pt-2">
						<p>Terapia Espiritual (Momento de conversa e de aconselhamento pastoral)
							Terças e Quartas Feiras – 10 horas ás 13 horas
						</p>
						</h5>
					</div>
					<div class="mt-5 ml-4">
						<div class="mt-5 ml-4">
							<hr class="bg-danger ml-0 mb-0" style="width: 35px;">
							<h5 class="pt-2">Preencha o formulário da terapia espiritual</h5>
						</div>
						<form class="bg-light p-2" action="../controller/terapia.php" method="post" accept-charset="utf-8">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4">Nome Completo</label>
									<input type="text" class="form-control" id="inputEmail4" name="nome">
								</div>
								<div class="form-group col-md-4 ml-4">
									<label for="recipient-name" class="col-form-label">Sexo:</label> <br>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="Masculino">
										<label class="form-check-label" for="inlineRadio1">Masculino</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Feminino">
										<label class="form-check-label" for="inlineRadio2">Feminino</label>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputAddress">Idade</label>
									<input type="number" class="form-control" id="inputAddress" name="idade">
								</div>
								<div class="form-group col-md-6">
									<label for="inputAddress2">Tem quantos filhos</label>
									<input type="number" class="form-control" id="inputAddress2" name="filhos">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="inputAddress">Contacto</label>
									<input type="tel" class="form-control" id="inputAddress" name="contato">
								</div>
								<div class="form-group col-md-4">
									<label for="inputAddress2">Nacionalidade</label>
									<input type="text" class="form-control" id="inputAddress2" name="nacionalidade">
								</div>
								<div class="form-group col-md-4">
									<label for="inputState">Estado Actual</label>
									<select id="inputState" name="estado" class="form-control">
										<option selected>Escolha opção...</option>
										<option value="Estou a Medicar">Está Medicar</option>
										<option value="fui ao Hospital">Foi Ao Hospital</option>
										<option value="fui ao Psicologo">Foi ao Psicologo</option>
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-5">
									<label for="inputCity">Cidade</label>
									<input type="text" class="form-control" id="inputCity" name="city">
								</div>
								<div class="form-group col-md-4">
									<label for="inputZip">Bairro</label>
									<input type="text" class="form-control" id="inputZip" name="bairro">
								</div>
								<div class="form-group col-md-3">
									<label for="inputState">Estado civil</label>
									<select id="inputState" name="list1" class="form-control">
										<option selected>Escolha opção...</option>
										<option value="solteiro">Solteiro</option>
										<option value="casado">Casado</option>
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="message-text">Qual a sua preocupação</label>
									<textarea class="form-control" id="message-text" name="msg"></textarea>
								</div>
								<div class="form-group col-md-6">
									<label for="inputAddress2">Qual seu estado atual</label>
									<textarea class="form-control" id="message-text" name="msg2"></textarea>
								</div>
							</div>

							<button type="submit" name="submit" class="btn btn-primary">Enviar</button>
						</form>
					</div>
				</div>
				<?php include_once 'sidebar.php';?>
			</div>
		</div>
	</div>
	<!-- Fim do main page noticias publicidade-->
	<!-- END of main code of page sobre -->
	<!-- BEGIN PHP Live! HTML Code [V3] -->
	<span style="color: #0000FF; text-decoration: underline; line-height: 0px !important; cursor: pointer; position: fixed; bottom: 0px; right: 20px; z-index: 20000000;" id="phplive_btn_1584230858"></span>
	<script data-cfasync="false" type="text/javascript">
	(function() {
	var phplive_e_1584230858 = document.createElement("script") ;
	phplive_e_1584230858.type = "text/javascript" ;
	phplive_e_1584230858.async = true ;
	phplive_e_1584230858.src = "https://t2.phplivesupport.com/TAF/js/phplive_v2.js.php?v=0%7C1584230858%7C2%7C&" ;
	document.getElementById("phplive_btn_1584230858").appendChild( phplive_e_1584230858 ) ;
	if ( [].filter ) { document.getElementById("phplive_btn_1584230858").addEventListener( "click", function(){ phplive_launch_chat_0() } ) ; } else { document.getElementById("phplive_btn_1584230858").attachEvent( "onclick", function(){ phplive_launch_chat_0() } ) ; }
	})() ;
	</script>
	<!-- END PHP Live! HTML Code [V3] -->
	<?php
include_once 'footer.php';
?>