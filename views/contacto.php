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
         <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
        <script src="http://vjs.zencdn.net/4.12/video.js"></script>
        <style type="text/css">
        .vjs-default-skin { color: #ebc8c8; }
        .vjs-default-skin .vjs-control-bar,
        .vjs-default-skin .vjs-big-play-button { background: rgba(0,0,0,0.47) }
        .vjs-default-skin .vjs-slider { background: rgba(0,0,0,0.15666666666666665) }
        .vjs-default-skin .vjs-control-bar { font-size: 80% }
        </style>
        <title>Contacto</title>
    </head>
    <style type="text/css">
    body{
    /*background: -webkit-linear-gradient(left, #0072ff, #00c6ff);*/
    }
    .contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
    }
    .contact-form .form-control{
    border-radius:1rem;
    }
    .contact-image{
    text-align: center;
    }
    .contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
    }
    .contact-form form{
    padding: 14%;
    }
    .contact-form form .row{
    margin-bottom: -7%;
    }
    .contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
    }
    .contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    }
    .btnContactSubmit
    {
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
    }
    </style>
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
        <!-- main page noticias publicidade -->
        <div class="container mt-4">
            <div class="row d-flex flex-md-nowrap flex-wrap">
                <div class="col-md-9 bg-white shadow-sm">
                    <!-- // code here -->
                    <div class="mt-5 ml-4">
                        <hr class="bg-danger ml-0 mb-0" style="width: 35px;">
                        <h5 class="pt-2">CONTACTO</h5>
                    </div>
                    <div class="container contact-form">
                        <div class="contact-image">
                            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
                        </div>
                        <form method="post" accept-charset="utf-8">
                            <h3>Drop Us a Message</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <?php include_once 'sidebar.php';?>

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
    <?php
include_once 'footer.php';
?>
</body>
</html>