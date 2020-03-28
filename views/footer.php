<footer class="footer-area footer--light">
  <div class="footer-big">
    <!-- start .container -->
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="footer-widget">
            <div class="widget-about">
              <img src='../galeria/logo.jpg' alt='logo' class='img-fluid' style='width: 100%; height: 80px;'>
              <ul class="contact-details">
                <li>
                  <span class="icon-earphones"></span> Ligue já:
                  <a href="tel:344-755-111">+258847494859</a>
                </li>
                <li>
                  <span class="icon-envelope-open">E - mail:</span>
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
                              <form action="../controller/suporte.php" method="post" accept-charset="utf-8">
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
                              <form action="../controller/celulas.php" method="post" accept-charset="utf-8">
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
                              <form action="../controller/testemunhas.php" method="post" accept-charset="utf-8">
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
                  <a href="termos.php">Termos &amp; Condições</a>
                </li>
                <li>
                  <a href="politicas.php">Políticas de Privacidade</a>
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
<script type="text/javascript" src="../lib/jquery/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../lib/js/dropdown.js"></script>
<script type="text/javascript" src="../lib/js/back-top.js"></script>
<script type="text/javascript">
$('.carousel').carousel();
</script>
</body>
</html>
