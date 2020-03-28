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
                                                            <source src="../galeria/videos/<?=$produto['arquivo']?>" type='video/mp4'>
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