<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html charset=utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Administrador</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="../lib/jquery/bootstrap.min.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="../lib/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="../lib/css/style.css" rel="stylesheet" />
        <!-- LIBRARY CHART JS-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js">
        </script>
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <body>
        <div id="wrapperr">
            <nav class="navbar navbar-light bg-dark py-4 mt-0"  style="margin-top: 0 auto;">
                <a class="navbar-brand px-5" style="color:#fff; font-size: 24px;">T A F</a>
                <form class="form-inline">
                    <a href="../controller/log.php" class="px-5" style="color:#fff; font-size: 24px;">LOGOUT</a>
                </form>
            </nav>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav flex-column" id="main-menu">
                        <li class="nav-item py-3  px-2">
                            <a href="index.php"><i class="fa fa-desktop "></i>Painel Admin <span class="badge"></span></a>
                        </li>
                        <li  class="nav-item py-3  px-2">
                            <a href="news.php"><i class="fa fa-bar-chart-o "></i>Noticias<span class="badge"></span></a>
                        </li>
                        <li  class="nav-item py-3  px-2">
                            <a href="admnistrar-departamentos.php"><i class="fa fa-bar-chart-o "></i>Departamentos<span class="badge"></span></a>
                        </li>
                        <li  class="nav-item py-3  px-2">
                            <a href="taf-tv.php"><i class="fa fa-bar-chart-o "></i>TAF Tv<span class="badge"></span></a>
                        </li>
                        <li  class="nav-item py-3  px-2">
                            <a href="vidas.php"><i class="fa fa-bar-chart-o "></i>Vidas Transformadas<span class="badge"></span></a>
                        </li>
                        <li  class="nav-item py-3  px-2">
                            <a href="agenda.php"><i class="fa fa-calendar "></i>Agendas<span class="badge"></span></a>
                        </li>
                        <li  class="nav-item py-3  px-2">
                            <a href="upload.php"><i class="fa fa-file-picture-o"></i>Upload Imagens<span class="badge"></span></a>
                        </li>
                        <li  class="nav-item py-3  px-2">
                            <a href="upldpdf.php"><i class="fa fa-file-pdf-o"></i>Upload Ficheiros<span class="badge"></span></a>
                        </li>
                       <!--  <li  class="nav-item py-3 px-2">
                            <a href="ui.php"><i class="fa fa-cog "></i>Definições<span class="badge"></span></a>
                        </li> -->
                    </ul>
                </div>
            </nav>
            <!-- /. NAV SIDE  -->
