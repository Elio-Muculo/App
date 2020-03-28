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
		<link rel="stylesheet" type="text/css" href="../lib/css/bootstrap-reboot.css">
		<link rel="stylesheet" type="text/css" href="../lib/css/personalizado.css">
		<link href="../lib/css/hide-menu.css" rel="stylesheet" />
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
		<title>Localizar igreja</title>
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
									<form action="send-mail.php" accept-charset="utf-8" method="post">
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
						<a class="nav-link text-uppercase text-dark" href="contacto.php">Contacto</a>
					</li>
					<li class="nav-item mr-0 mr-md-5">
						<a class="nav-link text-uppercase text-dark" href="taf.php">Taf tv</a>
					</li>
					<!-- <li class="nav-item dropdown mr-0 mr-md-5">
							<a class="nav-link dropdown-toggle text-uppercase text-dark" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								programa especial
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item text-uppercase text-dark" href="#">pregação</a>
								<a class="dropdown-item text-uppercase text-dark" href="#">música</a>
						</div>
					</li> -->
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
						<h5 class="pt-2">LOCALIZAR IGREJA</h5>
					</div>
					<div class="mt-5 ml-4">
						<hr class="bg-info ml-0 mb-0" style="width: 55px;">
						<h5 class="pt-2">IGREJA SEDE</h5>
					</div>
					<div class="mt-2 ml-5">
						<!-- <hr class="bg-info ml-0 mb-0" style="width: 55px;"> -->
						<h5 class="pt-2"><span class="fa fa-map mr-1"></span>Igreja Sede – Esturro, Beira</h5>
						<h5 class="pt-2"><span class="fa fa-phone-square mr-1"></span>Contacto: 84 74 84 700 │84 7494859 | 87 421 7760</h5>
						<h5 class="pt-2"><span class="fa fa-envelope mr-1"></span>Email: igrejataf@gmail.com</h5>
					</div>
					<div class="mt-5 ml-4">
						<hr class="bg-warning ml-0 mb-0" style="width: 65px;">
						<h5 class="pt-2">PROVÍNCIA DE SOFALA</h5>
					</div>
					<div class="mt-2 ml-5">
						<hr class="bg-info ml-0 mb-0" style="width: 55px;">
						<p>Bairro da Munhava</p>
						<h5 class="pt-2"><span class="fa fa-map mr-1"></span>Av. Kruss Gomes, atrás do Estadio Municipal da Munhava, na Munhava</h5>
						<h5 class="pt-2"><span class="fa fa-phone-square mr-1"></span>Contacto: 84 793 4421</h5>
						<h5 class="pt-2"><span class="fa fa-user mr-1"></span>Responsável: Obreiro Inácio Inoque</h5>
					</div>
					<div class="mt-5 ml-5">
						<hr class="bg-info ml-0 mb-0" style="width: 55px;">
						<p>Bairro de Ndunda</p>
						<h5 class="pt-2"><span class="fa fa-map mr-1"></span>Rua de ADPP, próximo do primeiro PT, no Bazar Filipe.</h5>
						<h5 class="pt-2"><span class="fa fa-phone-square mr-1"></span>Contacto: 84 640 4987│87 640 4980</h5>
						<h5 class="pt-2"><span class="fa fa-user mr-1"></span>Responsável: Pastor António Chironda</h5>
					</div>
					<div class="mt-5 ml-5">
						<hr class="bg-info ml-0 mb-0" style="width: 55px;">
						<p>Bairro de Vila Massane</p>
						<h5 class="pt-2"><span class="fa fa-map mr-1"></span>Terminal de chapas na Passagem de Nível ao lado da Linha Férrea</h5>
						<h5 class="pt-2"><span class="fa fa-phone-square mr-1"></span>Contacto: 84 354 9168</h5>
						<h5 class="pt-2"><span class="fa fa-user mr-1"></span>Responsável: Pastor António Marcane</h5>
					</div>
					<div class="mt-5 ml-5">
						<hr class="bg-info ml-0 mb-0" style="width: 55px;">
						<p>Bairro Mafarinha</p>
						<h5 class="pt-2"><span class="fa fa-map mr-1"></span>Atrás de Chidengo</h5>
						<h5 class="pt-2"><span class="fa fa-phone-square mr-1"></span>Contacto: 84 049 1510</h5>
						<h5 class="pt-2"><span class="fa fa-user mr-1"></span>Responsável: Pastor Paulo Bola</h5>
					</div>
					<div class="mt-5 ml-4">
						<hr class="bg-warning ml-0 mb-0" style="width: 65px;">
						<h5 class="pt-2">MAPUTO CIDADE</h5>
					</div>
					<div class="mt-2 ml-5">
						<hr class="bg-info ml-0 mb-0" style="width: 55px;">
						<p>Bairro de Magoanine</p>
						<h5 class="pt-2"><span class="fa fa-map mr-1"></span>Av. General Sebastião Mabote, paragem Rua 9, na Rua de Nampula, Magoanine CMC</h5>
						<h5 class="pt-2"><span class="fa fa-phone-square mr-1"></span>Contacto: 84 749 4859 │ 84 536 7200 │ 84 812 8971</h5>
						<h5 class="pt-2"><span class="fa fa-user mr-1"></span>Responsável: Pastor Remígio Nloco</h5>
					</div>
					<div class="mt-5 ml-4">
						<hr class="bg-warning ml-0 mb-0" style="width: 65px;">
						<h5 class="pt-2">PROVÍNCIA DE MANICA</h5>
					</div>
					<div class="mt-2 ml-5">
						<hr class="bg-info ml-0 mb-0" style="width: 55px;">
						<p>Bairro 25 de Junho</p>
						<h5 class="pt-2"><span class="fa fa-map mr-1"></span>Entre bar Na Albertina e Joia de África</h5>
						<h5 class="pt-2"><span class="fa fa-phone-square mr-1"></span>Contacto: 84 765 1769 │ 84 250 2336 │ 87 765 1769</h5>
						<h5 class="pt-2"><span class="fa fa-user mr-1"></span>Responsável: Pastor José Zacarias</h5>
					</div>
					<div class="mt-5 ml-4">
						<hr class="bg-warning ml-0 mb-0" style="width: 65px;">
						<h5 class="pt-2">PROVÍNCIA DE TETE</h5>
					</div>
					<div class="mt-2 ml-5">
						<hr class="bg-info ml-0 mb-0" style="width: 55px;">
						<p>Bairro 25 de Setembro</p>
						<h5 class="pt-2"><span class="fa fa-map mr-1"></span>Estrada Nacional 107 Moatize, Paragem principal: Posto Policial do Comando, no Embondeiro Moatize</h5>
						<h5 class="pt-2"><span class="fa fa-phone-square mr-1"></span>Contacto: 84 650 9033</h5>
						<h5 class="pt-2"><span class="fa fa-user mr-1"></span>Responsável: Pastor Victórino Binze</h5>
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