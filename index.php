<?php
include_once 'views/header.php';
include_once 'models/conexao.php';
?>
<nav class="bg-dark py-1 nav-info">
	<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center align-content-center">
		<div>
			<a href="index.php"><span class="fa fa-home"></span> Home</a>
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
							<form action="controller/send-mail.php" method="post" accept-charset="utf-8">
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
				<a href="https://www.instagram.com/igrejataf/"><span class="fa fa-instagram mr-3"></span></a>
				<a href="https://www.youtube.com/user/igrejataf"><span class="fa fa-youtube mr-3"></span></a>
				<a href="https://wa.me/258847494859"><span class="fa fa-whatsapp mr-4"></span></a>
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
	<div class="bg-white shadow d-flex menu-hide" style="height: 105px;">
		<div class="container d-md-flex flex-md-row flex-column justify-content-md-between justify-content-center align-items-center  px-5 menu-hide">
			<div> <img src="galeria/logo.jpg" style="width: 150px; height: 80px;"> </div>
			<div>
				<div class="alert alert-info" role="alert" style="height: 80px;">
					<?php
$result_carousel = "SELECT * FROM msg ORDER BY id DESC LIMIT 1";
$resultado_carousel = mysqli_query($connect, $result_carousel);
while ($row_msg = mysqli_fetch_assoc($resultado_carousel)) {
	$msg = $row_msg['mensagem'];
	?>
					<p class="font-italic text-dark">" <?php echo $msg; ?> "</p>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Fim Menu logotipo & mensagem do dia -->
<hr class="bg-dark my-0">
<!-- Inicio Menu  principal-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<!-- <a class="navbar-brand" href="#">navbar</a> -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse d-md-flex justify-content-md-center" id="navbarNavDropdown">
		<ul class="navbar-nav">
			<li class="nav-item mr-0 mr-md-5">
				<a class="nav-link text-uppercase text-dark" href="views/sobre.php">Sobre nós<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item mr-0 mr-md-5">
				<a class="nav-link text-uppercase text-dark" href="views/localizar.php">Localizar igreja</a>
			</li>
			<li class="nav-item mr-0 mr-md-5">
				<a class="nav-link text-uppercase text-dark" href="views/terapia.php">Terapia espiritual</a>
			</li>
			<li class="nav-item mr-0 mr-md-5">
				<a class="nav-link text-uppercase text-dark" href="views/contacto.php">contacto</a>
			</li>
			<li class="nav-item mr-0 mr-md-5">
				<a class="nav-link text-uppercase text-dark" href="views/taf.php">taf tv</a>
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
<hr class="bg-dark my-0">
<!-- slide show -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
	<ol class="carousel-indicators">
		<?php
$controle_ativo = 2;
$controle_num_slide = 1;
$result_carousel = "SELECT * FROM upload_slides WHERE status = 0 ORDER BY id ASC";
$resultado_carousel = mysqli_query($connect, $result_carousel);
while ($row_carousel = mysqli_fetch_assoc($resultado_carousel)) {
	if ($controle_ativo == 2) {
		?>
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<?php
$controle_ativo = 1;
	} else {
		?>
		<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $controle_num_slide; ?>"></li>
		<?php
$controle_num_slide++;
	}
}
?>
	</ol>
	<div class="carousel-inner">
		<?php
$controle_ativo = 2;
$result_carousel = "SELECT * FROM upload_slides WHERE status = 0 ORDER BY id ASC";
$resultado_carousel = mysqli_query($connect, $result_carousel);
while ($row_carousel = mysqli_fetch_assoc($resultado_carousel)) {
	if ($controle_ativo == 2) {
		?>
		<div class="carousel-item active">
			<img class="d-block w-100" src="galeria/slides/<?php echo $row_carousel['arquivo']; ?>" alt="<?php echo $row_carousel['descricao']; ?>" style="height: 300px;">
		</div>
		<?php
$controle_ativo = 1;
	} else {?>
		<div class="carousel-item">
			<img class="d-block w-100" src="galeria/slides/<?php echo $row_carousel['arquivo']; ?>" alt="<?php echo $row_carousel['descricao']; ?>" style="height: 300px;">
		</div>
		<?php
}
}
?>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- Fim do slide -->
<!-- main page noticias publicidade -->
<div class="container mt-4">
	<div class="row d-flex flex-md-nowrap flex-wrap">
		<div class="col-md-9 bg-white shadow-sm">
			<div class="row mt-4 d-flex flex-md-nowrap flex-wrap justify-content-between">
				<div class="col-md-6">
					<div>
						<hr class="bg-danger ml-0 mb-0" style="width: 35px;">
						<h5 class="pt-2">Últimas Notícias</h5>
					</div>
					<?php
$sql_news = "SELECT * FROM noticias ORDER BY id DESC LIMIT 3";
$resultado_news = mysqli_query($connect, $sql_news);
while ($row_news = mysqli_fetch_assoc($resultado_news)) {?>
					<div class="col-md-12 mt-2 mt-md-0" style="height: 120px;">
						<div>
							<div class="media">
								<img class="mr-3" src="galeria/noticias/<?php echo $row_news['foto']; ?>" alt="<?php echo utf8_encode($row_news['titulo']); ?>" style="height: 95px; width: 145px;">
								<div class="media-body">
									<p class="mt-0"><?php echo $row_news['subtitulo']; ?>
										<a href="views/noticias.php?id=<?=$row_news['id']?>">Leia Mais</a>
									</div>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
					<div class="col-md-6 mt-5 mt-md-0">
						<div>
							<hr class="bg-danger ml-0 mb-0" style="width: 35px;">
							<h5 class="pt-2">Vidas transformadas</h5>
						</div>
						<?php
$sql_news = "SELECT * FROM vidas ORDER BY id DESC LIMIT 3";
$resultado_news = mysqli_query($connect, $sql_news);
while ($row_news = mysqli_fetch_assoc($resultado_news)) {?>
						<div class="col-md-12 mt-2 mt-md-0" style="height: 120px;">
							<div>
								<div class="media">
									<img class="mr-3" src="galeria/vidas/<?php echo $row_news['foto']; ?>" alt="<?php echo utf8_encode($row_news['titulo']); ?>" style="height: 95px; width: 145px;">
									<div class="media-body">
										<p class="mt-0"><?php echo utf8_encode($row_news['subtitulo']); ?>
											<a href="views/vidas-transformadas.php?id=<?=$row_news['id']?>">Leia Mais</a>
										</div>
									</div>
								</div>
							</div>
							<?php }?>
						</div>
					</div>
					<div>
						<hr class="bg-danger mt-5 ml-0 mb-0" style="width: 35px;">
						<h5 class="pt-2">Agenda</h5>
					</div>
					<div class="row mt-4 justify-content-center">
						<?php
$result = "SELECT * FROM agenda ORDER BY id DESC LIMIT 3";
$agenda_data = mysqli_query($connect, $result);
while ($row_agenda = mysqli_fetch_assoc($agenda_data)) {
	$data = $row_agenda['data'];
	$dia_complete = date("d-F-Y", strtotime($data));
	$dia = date("d-M-Y", strtotime($data));
	$new_data = explode("-", $dia_complete);
	$old_data = explode("-", $dia);
	?>
						<div class="col-md-3 border rounded border border-danger ml-3 ml-md-5 my-3 mr-3" style="height: 260px; width: 240px; border: 4px solid #000 !important;">
							<div class="d-flex justify-content-center">
								<div class="shadow rounded text-center px-4 py-2 mt-4">
									<h1 class="mb-0"><?=$new_data[0]?> </h1>
									<p class="mt-0"><?=$old_data[1]?></p>
								</div>
							</div>
							<div class="mt-4 text-dark pb-4">
								<?php echo $new_data[0] . " de " . $new_data[1] . " de " . $new_data[2]; ?>
								<p class="text-danger mt-0"><?php echo $row_agenda['descricao']; ?></p>
							</div>
						</div>
						<?php }?>
					</div>
					<div>
						<hr class="bg-danger mt-5 ml-0 mb-0" style="width: 35px;">
						<h5 class="pt-2">Apoio Igreja</h5>
					</div>
					<div class="d-flex flex-md-row flex-column py-4  justify-content-md-between justify-content-center">
						<div class="text-center ml-0 pl-0 ml-md-3 pl-md-5">
							<h5>Marcar um encontro</h5>
							<li>
								<a href="#" data-toggle="modal" data-target="#modalencontro">Agende já o seu encontro pastoral</a>
								<div class="modal fade" id="modalencontro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Agendar Encontro Pastoral</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<form action="controller/encontro.php" method="post" accept-charset="utf-8">
													<div class="form-group">
														<label for="recipient-name" class="col-form-label">Nome Completo:</label>
														<input type="text" class="form-control" id="recipient-name" name="nome">
													</div>
													<div class="form-group">
														<label for="recipient-name" class="col-form-label">Idade:</label>
														<input type="text" class="form-control" id="recipient-name" name="idade">
													</div>
													<div class="form-group">
														<label for="recipient-name" class="col-form-label">País:</label>
														<input type="text" class="form-control" id="recipient-name" name="Pais">
													</div>
													<div class="form-group">
														<label for="recipient-name" class="col-form-label">Cidade:</label>
														<input type="text" class="form-control" id="recipient-name" name="city">
													</div>
													<div class="form-group">
														<label for="recipient-name" class="col-form-label">Contacto:</label>
														<input type="text" class="form-control" id="recipient-name" name="contato">
													</div>
													<div class="form-group">
														<label for="message-text" class="col-form-label">Pedido de oração:</label>
														<textarea class="form-control" id="message-text" name="msg"></textarea>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
													<button type="submit" class="btn btn-primary">Enviar mensagem</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</li>
						</div>
						<div class="text-center py-4 my-2 my-md-0 py-md-0">
							<h5>Pedido de Oração</h5>
							<li>
								<a href="#"  data-toggle="modal" data-target="#modaloracao">Envie o seu pedido</a>
								<div class="modal fade" id="modaloracao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Pedido de oração</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<form action="controller/pedido-oracao.php" method="post" accept-charset="utf-8">
													<div class="form-group">
														<label for="recipient-name" class="col-form-label">Nome Completo:</label>
														<input type="text" class="form-control" id="recipient-name" name="nome">
													</div>
													<div class="form-group">
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
													<div class="form-group">
														<label for="recipient-name" class="col-form-label">Idade:</label>
														<input type="number" class="form-control" id="recipient-name" name="idade">
													</div>
													<div class="form-group">
														<label for="recipient-name" class="col-form-label">País:</label>
														<input type="text" class="form-control" id="recipient-name" name="Pais">
													</div>
													<div class="form-group">
														<label for="recipient-name" class="col-form-label">Cidade:</label>
														<input type="text" class="form-control" id="recipient-name" name="city">
													</div>
													<div class="form-group">
														<label for="message-text" class="col-form-label">SEU PEDIDO:</label>
														<textarea class="form-control" id="message-text" name="msg" placeholder="detalhe o que tem lhe acontecido"></textarea>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
													<button type="submit" class="btn btn-primary">Enviar mensagem</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</li>
						</div>
						<div class="text-center mr-0 pr-0 mr-md-5 pr-md-5">
							<h5>DOA</h5>
							<li>
								<a href="#" data-toggle="modal" data-target="#modaldoa">Faça a sua doação</a>
								<div class="modal fade" id="modaldoa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Doações</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<form>
													<div class="">
														<h4>CONTAS</h4>
														<p>MOEDA: METICAL (MZ)</p>
														<p>MPESA – 84 62 16 425 - SÉRGIO LICOVA</p>
														<p>BIM – 335166914 – SÉRGIO LICOVA</p>
														<p>PONTO 24 – 84 42 17 760</p>
													</div>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
												<!-- <button type="button" class="btn btn-primary">Enviar mensagem</button> -->
											</div>
										</div>
									</div>
								</div>
							</li>
						</div>
					</div>
				</div>
				<div class="col-md-3 ml-0 ml-md-4 mt-3 mt-md-0">
					<!-- video -->
					<div class="shadow-sm mb-5 pb-4" style="height: 150px;">
						<div class="bg-white border-secondary">
							<p class="text-center py-2" style="font-size: 18px!important;">Pregação</p>
						</div>
						<div>
							<div class="col-md-12">
								<section class="painel mais-vendidos">
									<div class="row">
										<?php
$dados = mysqli_query($connect, "SELECT *   FROM    tafvideos ORDER BY id DESC LIMIT 1");
while ($produto = mysqli_fetch_array($dados)):
?>
										<video id="MY_VIDEO_1" class="video-js vjs-default-skin" controls
											preload="auto" poster="MY_VIDEO_POSTER.jpg"
											data-setup="{}" width="100%">
											<source src="galeria/videos/<?=$produto['arquivo']?>" type='video/mp4'>
											<!-- <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p> -->
										</video>
										<!--  <figcaption class="py-2 bg-dark text-white text-center">
										<?php echo utf8_encode($produto['descricao']) ?>
										</figcaption> -->
										<?php endwhile;?>
									</div>
								</section>
							</div>
						</div>
					</div>
					<!-- fim do video -->
					<div class="mt-2">
						<hr>
					</div>
					<!-- departamentos -->
					<div class="mt-5 bg-white pb-3 shadow-sm">
						<div class=" border-secondary">
							<p class="text-center pt-2" style="font-size: 18px!important;">Departamentos<i class="fas fa-file-pdf"></i></p>
						</div>
						<hr>
						<div class="ml-3">
							<div >
								<a href="views/departamentos.php" style="text-decoration: none;"><span class="mt-0 mb-0 ml-3" style="color: #898b96!important;"><i class="fa fa-transgender ml-1 mr-2 text-dark"></i>Pais com Visão</span></a>
							</div>
							<hr>
							<div>
								<a href="views/departamentos-mulher.php" style="text-decoration: none;"><span class="mt-0 mb-0 ml-3" style="color: #898b96!important;"><i class="fa fa-transgender ml-1 mr-2 text-dark"></i>Mulher com Visão</span></a>
							</div>
							<hr>
							<div>
								<a href="views/departamentos-jovem.php" style="text-decoration: none;"><span class="mt-0 mb-0 ml-3" style="color: #898b96!important;"><i class="fa fa-transgender ml-1 mr-2 text-dark"></i>Jovens Com  Força</span></a>
							</div>
							<hr>
							<div>
								<a href="views/departamentos-adolescente.php" style="text-decoration: none;"><span class="mt-0 mb-0 ml-3" style="color: #898b96!important;"><i class="fa fa-transgender ml-1 mr-2 text-dark"></i>Adolescentes</span></a>
							</div>
						</div>
					</div>
					<!-- fim de departamentos -->
					<!-- formulario de noticias -->
					<div class="mt-4 shadow-sm" style="height: 250px;">
						<div class="bg-white ">
							<p class="text-center py-2" style="font-size: 18px!important;">Leia Mais</p>
						</div>
						<?php
$sql_pdf = "SELECT * FROM pdfupload ORDER BY id DESC LIMIT 6";
$result_pdf = mysqli_query($connect, $sql_pdf);
while ($pdf = mysqli_fetch_assoc($result_pdf)) {?>
						<div class="read">
							<a href="galeria/ficheiros/<?php echo $pdf['arquivo']; ?>" target="_blank" style="text-decoration: none;"><span class="mt-0 mb-0 ml-3" style="color: #898b96!important;"><i class="fa fa-file-pdf-o ml-3 mr-2 text-dark" target="_blank"></i><?php echo $pdf['descricao']; ?></span></a>
							<hr style="width: 260px;">
						</div>
						<?php }?>
					</div>
					<!-- fim do formulario -->
				</div>
			</div>
		</div>
		<!-- Fim do main page noticias publicidade -->
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
		<!-- Rodape -->
		<footer class="footer-area footer--light">
			<div class="footer-big">
				<!-- start .container -->
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="footer-widget">
								<div class="widget-about">
									<img src='logo.jpg' alt='logo' class='img-fluid' style='width: 100%; height: 80px;'>
									<ul class="contact-details">
										<li>
											<span class="icon-earphones"></span> Ligue já:
											<a href="tel:344-755-111">+258847494859</a>
										</li>
										<li>
											<span class="icon-envelope-open ml-2 pl-1">E - mail: </span>
											<a href="mailto:igrejataf@gmail.com">igrejataf@gmail.com</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- Ends: .footer-widget -->
						</div>
						<!-- end /.col-md-4 -->
						<div class="col-md-3 col-sm-4">
							<div class="footer-widget">
								<div class="footer-menu footer-menu--1">
									<h4 class="footer-widget-title">Redes Sociais</h4>
									<ul>
										<li>
											<a href="https://facebook.com/igrejataf">Facebook</a>
										</li>
										<li>
											<a href="https://www.youtube.com/user/igrejataf">Youtube</a>
										</li>
										<li>
											<a href="https://www.instagram.com/igrejataf/">Instagram</a>
										</li>
										<li>
											<a href="https://twitter.com/igrejataf">Twitter</a>
										</li>
										<li>
											<a href="https://wa.me/258847494859">whatsapp</a>
										</li>
									</ul>
								</div>
								<!-- end /.footer-menu -->
							</div>
							<!-- Ends: .footer-widget -->
						</div>
						<!-- end /.col-md-3 -->
						<div class="col-md-3 col-sm-4">
							<div class="footer-widget">
								<div class="footer-menu">
									<h4 class="footer-widget-title">Nossa Igreja</h4>
									<ul>
										<li>
											<a href="views/sobre.php">Acerca de nós</a>
										</li>
										<li>
											<a href="#"  data-toggle="modal" data-target="#modalsuport">TAF Suporte</a>
											<div class="modal fade" id="modalsuport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">TAF Suporte</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form action="controller/suporte.php" method="post" accept-charset="utf-8">
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Nome Completo:</label>
																	<input type="text" class="form-control" id="recipient-name" name="nome">
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">País:</label>
																	<input type="text" class="form-control" id="recipient-name" name="Pais">
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Cidade:</label>
																	<input type="text" class="form-control" id="recipient-name" name="city">
																</div>
																<div class="form-group">
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
																<div class="form-group">
																	<label for="message-text" class="col-form-label">Deixa o seu pedido:</label>
																	<textarea class="form-control" id="message-text" name="msg"></textarea>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
																<button type="submit" class="btn btn-primary">Enviar mensagem</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</li>
										<li>
											<a href="#">Parceiros</a>
										</li>
										<li>
											<a href="#"  data-toggle="modal" data-target="#modalcelulas">Células</a>
											<div class="modal fade" id="modalcelulas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Células</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form action="controller/celulas.php" method="post" accept-charset="utf-8">
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Nome Completo:</label>
																	<input type="text" class="form-control" id="recipient-name" name="nome">
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">País:</label>
																	<input type="text" class="form-control" id="recipient-name" name="Pais">
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Cidade:</label>
																	<input type="text" class="form-control" id="recipient-name" name="city">
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Contacto:</label>
																	<input type="tel" class="form-control" id="recipient-name" name="cel">
																</div>
																<div class="form-group">
																	<label for="message-text" class="col-form-label">Mais Detalhes:</label>
																	<textarea class="form-control" id="message-text" name="msg"></textarea>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
																<button type="submit" class="btn btn-primary">Enviar mensagem</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</li>
										<li>
											<a href="#"  data-toggle="modal" data-target="#modaltestemunhas">Testemunhas</a>
											<div class="modal fade" id="modaltestemunhas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Testemunhas</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form action="controller/testemunhas.php" method="post" accept-charset="utf-8">
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Nome Completo:</label>
																	<input type="text" class="form-control" id="recipient-name" name="nome">
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">País:</label>
																	<input type="text" class="form-control" id="recipient-name" name="Pais">
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Cidade:</label>
																	<input type="text" class="form-control" id="recipient-name" name="city">
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Idade:</label>
																	<input type="number" class="form-control" id="recipient-name" name="idade">
																</div>
																<div class="form-group">
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
																<div class="form-group">
																	<label for="inputState">Estado civil</label>
																	<select id="inputState" name="list1" class="form-control">
																		<option selected>Escolha opção...</option>
																		<option value="solteiro">Solteiro</option>
																		<option value="casado">Casado</option>
																	</select>
																</div>
																<div class="form-group">
																	<label for="message-text" class="col-form-label">Detalhe como conheceu a igreja:</label>
																	<textarea class="form-control" id="message-text" name="msg"></textarea>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
																<button type="submit" class="btn btn-primary">Enviar mensagem</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- end /.footer-menu -->
							</div>
							<!-- Ends: .footer-widget -->
						</div>
						<!-- end /.col-lg-3 -->
						<div class="col-md-3 col-sm-4">
							<div class="footer-widget">
								<div class="footer-menu no-padding">
									<h4 class="footer-widget-title">Suporte de Ajuda</h4>
									<ul>
										<li>
											<a href="#">Fórum de Suporte</a>
										</li>
										<li>
											<a href="views/termos.php">Termos &amp; Condições</a>
										</li>
										<li>
											<a href="views/politicas.php">Políticas de Privacidade</a>
										</li>
										<li>
											<a href="#">FAQs</a>
										</li>
									</ul>
								</div>
								<!-- end /.footer-menu -->
							</div>
							<!-- Ends: .footer-widget -->
						</div>
						<!-- Ends: .col-lg-3 -->
					</div>
					<!-- end /.row -->
				</div>
				<!-- end /.container -->
			</div>
			<!-- end /.footer-big -->
			<div class="mini-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="copyright-text">
								<p>© <?php echo date("Y") ?>
									<a href="#"></a>. All rights reserved. Created by
									<a href="https://github.com/Elio-dark/" target="_blank">Elio Muculo</a>
								</p>
							</div>
							<div class="go_top">
								<span class="icon-arrow-up" onclick="topFunction()" id="myBtn" title="Go to top" style="font-size: 42px;"><span class="fa fa-arrow-circle-up"></span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="lib/jquery/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="lib/js/dropdown.js"></script>
		<script type="text/javascript" src="lib/js/back-top.js"></script>
		<script type="text/javascript">
		$('.carousel').carousel();
		</script>
	</body>
</html>