<?php require_once '../models/conexao.php';?>
<!DOCTYPE html>
<html>
    <head>
        <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
        <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <!------ Include the above in your HEAD tag ---------->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../lib/css/bootstrap.min.css" rel="stylesheet">
        <link href="../lib/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../lib/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../lib/css/footer.css">
        <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="../lib/css/personalizado.css">
        <link href="lib/css/bootstrap-social.css" rel="stylesheet" >
        <link href="../lib/css/hide-menu.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../lib/css/costumize.css">
        <title>Termos & Condições</title>
    </head>
    <body style="background-color: #eee;">
        <nav class="bg-dark py-1 nav-info">
            <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center align-content-center">
                <div>
                    <a href="../index.php"><span class="fa fa-home"></span> Home</a>
                    <a href="" class="mx-3"><span class="fa fa-envelope"></span> Fale conosco</a>
                </div>
                <div class="d-flex align-items-center align-content-center flex-md-row flex-column mt-md-0 mt-2">
                    <div class="d-flex flex-row justify-content-sm-start">
                        <a href="https://facebook.com/igrejataf" target="_blank"><span class="fa fa-facebook mr-3"></span></a>
                        <a href="https://twitter.com/igrejataf" target="_blank"><span class="fa fa-twitter mr-3"></span></a>
                        <a href="#"><span class="fa fa-instagram mr-3"></span></a>
                        <a href="#"><span class="fa fa-youtube mr-3"></span></a>
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
                        <a class="nav-link text-uppercase text-dark" href="#">Terapia espiritual</a>
                    </li>
                    <li class="nav-item mr-0 mr-md-5">
                        <a class="nav-link text-uppercase text-dark" href="contacto.php">contacto</a>
                    </li>
                    <li class="nav-item mr-0 mr-md-5">
                        <a class="nav-link text-uppercase text-dark" href="#">taf tv</a>
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
        <!-- main page noticias publicidade -->
        <div class="container mt-4">
            <div class="row d-flex flex-md-nowrap flex-wrap">
                <div class="col-md-9 bg-white shadow-sm">
                    <!-- // code here -->
                    <div class="mt-5 ml-4">
                        <hr class="bg-danger ml-0 mb-0" style="width: 35px;">
                        <h5 class="pt-2">TERMOS & CONDIÇÕES</h5>
                    </div>
                    <div class="mt-2 ml-5">
                        <h5 class="pt-2">
                        <p>O material disponível nesta página gratuída e o objectivo é para glorificar a Deus partilhando a graça que Ele tem nos dado. </p>
                        <p>O material pode ser usado desde que se respeite os termos e condições que aqui são expressos.</p>
                        <p>a) É proíbido o uso de qualquer material disponível nesta página com intensão de proveito financeiro; </p>
                        <p>b) Sempre que utilizar o material contido nesta página faça a devia citação;</p>
                        <p>c) Não é permitido a reprodução ou publicação total ou parcial sem o concentimento contratual da Igreja TAF;</p>
                        <p>d) Qualquer utilização de informações desta página por qualquer meio é necessário uma autorização da igreja TAF;</p>
                        <p>e) A Igreja TAF não assume qualquer dano que for a causa o dispositivo a ser usado para acessar esta página ou criar links desta;</p>
                        <p>f) É responsabilidade do usuário proteger as informações contidas em seus equipamentos através do uso de ferramentas anti-vírus, anti-invasores, firewall e outros com objetivo de prevenir e tratar os riscos à segurança durante a navegação na internet e download de informações pela rede;</p>
                        <p>g) A Igreja TAF irá alterar ou acrescentar ou remover qualquer dado sem aviso prévio.</p>
                        </h5>
                    </div>
                </div>
                <div class="col-md-3 ml-0 ml-md-4 mt-3 mt-md-0">
                    <!-- video -->
                    <div class="shadow-sm mb-5 pb-4" style="height: 150px;">
                        <div class="bg-white border-secondary">
                            <p class="text-center py-2" style="font-size: 18px!important;">Pregação</p>
                        </div>
                        <iframe width="100%" height="155" src="https://www.youtube.com/embed/qQPCzBQC7EE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                <a href="departamentos.php" style="text-decoration: none;"><span class="mt-0 mb-0 ml-3" style="color: #898b96!important;"><i class="fa fa-transgender ml-1 mr-2 text-dark"></i>Pais com Visão</span></a>
                            </div>
                            <hr>
                            <div>
                                <a href="departamentos-mulher.php" style="text-decoration: none;"><span class="mt-0 mb-0 ml-3" style="color: #898b96!important;"><i class="fa fa-transgender ml-1 mr-2 text-dark"></i>Mulher com Visão</span></a>
                            </div>
                            <hr>
                            <div>
                                <a href="departamentos-jovem.php" style="text-decoration: none;"><span class="mt-0 mb-0 ml-3" style="color: #898b96!important;"><i class="fa fa-transgender ml-1 mr-2 text-dark"></i>Jovens Com  Força</span></a>
                            </div>
                            <hr>
                            <div>
                                <a href="departamentos-adolescente.php" style="text-decoration: none;"><span class="mt-0 mb-0 ml-3" style="color: #898b96!important;"><i class="fa fa-transgender ml-1 mr-2 text-dark"></i>Adolescentes</span></a>
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
    </div>
    <!-- Fim do main page noticias publicidade -->
    <?php
include_once 'footer.php';
?>
</body>
</html>