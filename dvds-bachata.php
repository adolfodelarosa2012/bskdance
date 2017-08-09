<?php
  // Initialisation
  require_once('includes/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Aprende a bailar salsa, aprende a bailar bachata, ejercitarce bailando zumba, practicar boxeo, aprender defensa personal">
    <meta name="description" content="Diviertete y aprende a bailar Bachata y Salsa, también puedes ejercitarte practicando zumba, puedes aprender defensa personal o boxeo en un ambiente sano y divertido.">
    <meta name="author" content="adelarosa">
    <meta name="owner" content="Basi Gonzalez Matallanos">
    <meta name="robots" content="index, follow">

    <title>BSK Dance DVDs</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css?v=1.1" rel="stylesheet">
    <link href="css/full.css?v=1.1" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Salsa" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container paddingtop30">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand salsa hidden-xs" href="index.html">
                    <img  class="logo"src="image/Logo02min.png" alt="Logotipo" width="60px" height="60px"> BSK Dance DVDs</a>
                <a class="navbar-brand salsa25 visible-xs" href="index.html">
                    <img  class="logo2"src="image/Logo02min.png" alt="Logotipo" width="40px" height="40px"> BSK Dance DVDs</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php if (I18n::get_locale() == 'es_ES'): ?><img src="img/black.png" class="flag16 flag-es" alt="Español" /> Español<?php endif; ?>
                        <?php if (I18n::get_locale() == 'en_GB'): ?><img src="img/black.png" class="flag16 flag-us" alt="English" /> English<?php endif; ?>
                        <b class="caret"></b>
                      </a>                          
                      <ul class="dropdown-menu" role="menu">
                        <?php if (I18n::get_locale() == 'es_ES'): ?>
                          <li class="active"><a href="change_language.php?lang=es_ES"><img src="img/black.png" class="flag flag-es" alt="Español" /> Español</a></li>
                          <li class=""><a href="change_language.php?lang=en_GB"><img src="img/black.png" class="flag flag-us" alt="English" /> English</a></li>                       
                        <?php else: ?>
                          <li class=""><a href="change_language.php?lang=es_ES"><img src="img/black.png" class="flag flag-es" alt="Español" /> Español</a></li>
                          <li class="active"><a href="change_language.php?lang=en_GB"><img src="img/black.png" class="flag flag-us" alt="English" /> English</a></li>                       
                        <?php endif; ?> 
                      </ul>
                    </li> 
                    <li>
                        <a href="index.html">
                          <?php if (I18n::get_locale() == 'es_ES'): ?>
                            Escuelas
                          <?php else: ?>
                            School
                          <?php endif; ?> 
                        </a>
                    </li>
                    <li>
                        <a href="#services">Packs DVDs</a>
                    </li>
                    <li>
                        <a href="http://www.bachatasalsaonline.com" target="_black">
                          <span class="hidden-sm">
                            <?php if (I18n::get_locale() == 'es_ES'): ?>
                              Escuela Virtual
                            <?php else: ?>                              
                              Virtual School
                            <?php endif; ?> 
                          </span>
                          <span class="visible-sm">Virtual</span>
                        </a>
                    </li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div id="wrapper">
      <!-- Header -->
      <a name="about"></a>
      <div class="intro-header black-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message ">
                        <h1>
                          <?php if (I18n::get_locale() == 'es_ES'): ?>
                            PACKS DVDs BACHATA y SALSA
                          <?php else: ?>                              
                            PACKS DVDs BACHATA & SALSA
                          <?php endif; ?> 
                        </h1>
                        <h2>                          
                          <?php if (I18n::get_locale() == 'es_ES'): ?>
                            Gastos de envío GRATIS.
                          <?php else: ?>                              
                            Free shipping.
                          <?php endif; ?>
                        </h2>
                        <h3>
                          <?php if (I18n::get_locale() == 'es_ES'): ?>
                            Aprende a bailar bachata con los videos de los mejores profesores. Selecciona el paquete de DVDs que más te guste y te los enviamos gratuitamente a cualquier parte del mundo, podrás verlos todas las veces que quieras.
                          <?php else: ?>                              
                            Learn to dance bachata with the videos of the best teachers. Select the package of DVDs that you like and send them for free anywhere in the world, you can see them as many times as you want.
                          <?php endif; ?>
                        </h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#services" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-cd"></i> <span class="network-name">PACKS DVD</span></a>
                            </li>                            
                        </ul>
                        <hr class="intro-divider">
                        <h2>
                          <?php if (I18n::get_locale() == 'es_ES'): ?>
                            Formas de Comprar los DVDs
                          <?php else: ?>                              
                            Ways to Buy DVDs
                          <?php endif; ?>
                        </h2>
                        <h1>1.  <!--<i class="fa fa-paypal" aria-hidden="true"></i>--> PAYPAL</h1> 
                        <h2>
                          <?php if (I18n::get_locale() == 'es_ES'): ?>
                            2. TRANSFERENCIA BANCARIA
                          <?php else: ?>                              
                            2. WIRE TRANSFER
                          <?php endif; ?>
                        </h2>
                        <h3>
                          <?php if (I18n::get_locale() == 'es_ES'): ?>
                            NÚMERO DE CUENTA IBAN:  ES64 2038 1621 1530 0016 2039<br>
                            TITULAR DE LA CUENTA: JOSE BASILIO GONZALEZ MATALLANOS<br>
                            Después de hacer la transferencia nos mandas el justificante de pago, dirección de envío, los DVDs que quieres comprar al siguiente correo: basiydeisy@hotmail.com
                          <?php else: ?>                              
                            IBAN ACCOUNT NUMBER:  ES64 2038 1621 1530 0016 2039<br>
                            ACCOUNT HOLDER: JOSE BASILIO GONZALEZ MATALLANOS<br>
                            After making the transfer send us the proof of payment, shipping address, the DVDs you want to buy the next email: basiydeisy@hotmail.com
                          <?php endif; ?>
                        </h3>
                        <a  name="services"></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
      </div><!-- /.intro-header -->

      <!-- Page Content -->
      <!-- BASI y DEISY BACHATA -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  DVDs FIGURAS DE BACHATA BASI Y DEISY
                <?php else: ?>                              
                  DVDs FIGURES OF BACHATA BASI AND DEISY
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  PACK 3 DVDs de estos magníficos profesores que han impartido clases por todo el mundo.
                <?php else: ?>                              
                  PACK 3 DVDs of these great teachers who have taught all over the world.
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">40€</h2>
              <!-- Existen 2 Form uno para cada imagen-->
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="3YJGG8T77HSE8">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="3YJGG8T77HSE8">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>            
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/BDHome1.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- DEISY Lady Style -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                DVDs BACHATA LADY STYLE DEISY CARRERA
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  PACK 3 DVDs, aprende la técnica y elegancia de la mejor, sin duda mejoraras tu estilo.
                <?php else: ?>                              
                  PACK 3 DVDs, learn the technique and elegance of the best, you will certainly improve your style.
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">40€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="REUG6T3AMKR2N">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="REUG6T3AMKR2N">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/DHome.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Chavez y Silvia Bachata -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  DVDs BACHATA SENSUAL CHAVES Y SILVIA
                <?php else: ?>                              
                  DVDs BACHATA SENSUAL CHAVES AND SILVIA
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  PACK 3 DVDs. Los pasos más modernos de la bachata sensual los encontraras en esta colección.
                <?php else: ?>                              
                  PACK 3 DVDs. The most modern steps of sensual bachata will be found in this collection.
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">40€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="29VDLR3CG9BMG">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="29VDLR3CG9BMG">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/CSHome.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Ronald y Alba Bachata -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  DVDs BACHATA FUSIÓN RONALD Y ALBA
                <?php else: ?>                              
                  DVDs BACHATA FUSIÓN RONALD AND ALBA
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  PACK 4 DVDs, con los pasos más modernos de los campeones del mundo.
                <?php else: ?>                                              
                  PACK 4 DVDs, with the most modern steps of the world champions.
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">50€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="AGESBWNQXKK9N">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="AGESBWNQXKK9N">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/RAHome.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Marcos y Sara Bachata -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  DVDs BACHATA SENSUAL MARCO Y SARA  
                <?php else: ?>                              
                  DVDs BACHATA SENSUAL MARCO AND SARA  
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  PACK 4 DVDs de los campeones de España.
                <?php else: ?>                              
                  PACK 4 DVDs of the champions of Spain.
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">50€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="F3L46F25TEGDC">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="F3L46F25TEGDC">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/MSHome.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Basy y Deisy + Lady Style -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                   PACK 6 DVDs BASI Y DEISY
                <?php else: ?>                              
                  PACK 6 DVDs BASI AND DEISY
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                   PACK 6 DVDs de los mejores con figuras de bachata y lady style.
                <?php else: ?>                              
                  PACK 6 DVDs of the best with bachata and lady style figures.
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">70€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="K9WQYC29BGBPJ">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="K9WQYC29BGBPJ">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/PACK_FyLS_ByD.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      
      <!-- Junior y Tamini Bachata Pack I-->
      <!-- Basi y Deisy Salsa en Línea -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  SOCIAL SUPERPACK I 10 DVDs JUNIOR Y TAMINI
                <?php else: ?>                              
                  SOCIAL SUPERPACK I 10 DVDs JUNIOR AND TAMINI
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  SUPERPACK 10 DVDs, con explicaciones detalladas sobre los pasos más modernos de la bachata sensual.
                <?php else: ?>                              
                  SUPERPACK 10 DVDs, with detailed explanations about the most modern steps of sensual bachata.
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">125€</h2>              
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="FX8E333H95HLS">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="FX8E333H95HLS">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/jytp1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      
      <!-- Junior y Tamini Bachata Pack II-->
      <!-- PACK NO DISPONIBLE AUN 
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">SUPERPACK 10 DVDs SOCIAL PACK II JUNIOR Y TAMIN</h2>
              <p class="lead">II SUPERPACK 10 DVDs, seguiras aprendiendo con explicaciones detalladas sobre la bachata sensual.</p>
              <h2 class="text-center">100€</h2>
              <p class="text-center">
                <input type="image" src="img/gold-rect-paypal-60px.png" name="submit" alt="Realizar pagos con PayPal - es rápido, gratis y seguro!">
                <input type="image" src="img/cc-badges-ppmcvdam.png" name="submit" alt="Realizar pagos con PayPal - es rápido, gratis y seguro!">
              </p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/jytp2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      -->
      <!-- MultiPack -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">SUPER PACK 17 DVDs</h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  PACK 4 DVDs BACHATA FUSIÓN RONALD Y ALBA<br>
                  PACK 4 DVDs BACHATA SENSUAL MARCO Y SARA<br>
                  PACK 3 DVDs FIGURAS DE BACHATA BASI Y DEISY<br>
                  PACK 3 DVDs BACHATA SENSUAL CHAVES Y SILVIA<br>
                  PACK 3 DVDs BACHATA LADY STYLE DEISY<br>
                <?php else: ?>                              
                  PACK 4 DVDs BACHATA FUSION RONALD AND ALBA <br>
                  PACK 4 DVDs BACHATA SENSUAL MARCO AND SARA <br>
                  PACK 3 DVDs FIGURES OF BACHATA BASI AND DEISY <br>
                  PACK 3 DVDs BACHATA SENSUAL CHAVES AND SILVIA <br>
                  PACK 3 DVDs BACHATA LADY STYLE DEISY <br>
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">175€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="LNRP8XBMRD8QN">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="LNRP8XBMRD8QN">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/all5.jpg" alt="">
            </div>
          </div>
        </div><!-- /.container -->
      </div><!-- /.content-section-b -->
      <!-- Basi y Deisy Salsa en Línea -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  DVDs SALSA EN LINEA BASI Y DEISY
                <?php else: ?>                              
                  DVDs SALSA OF LINEA BASI AND DEISY
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  PACK 2 DVDs para aprender salsa en línea de los mejores.
                <?php else: ?>                              
                  PACK 2 DVDs to learn salsa online from the best.
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">25€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick"> 
                  <input type="hidden" name="hosted_button_id" value="8BYPWUCX4T2ZA"> 
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet."> 
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick"> 
                  <input type="hidden" name="hosted_button_id" value="8BYPWUCX4T2ZA"> 
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet."> 
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/SLByD.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- DVDS INDIVIDUALES -->
      <!-- Basi y Deisy V1 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">                
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  FIGURAS DE BACHATA DVD VOL 1 Basi & Deisy


                <?php else: ?>                              
                  FIGURES OF BACHATA DVD VOL 1 Basi & Deisy


                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="92W2LC46SP6Q6">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="92W2LC46SP6Q6">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/ByDV1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Basi y Deisy V2 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  FIGURAS DE BACHATA DVD VOL 2 Basi & Deisy
                <?php else: ?>                              
                  FIGURES OF BACHATA DVD VOL 2 Basi & Deisy
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="VU5KF54RWAFQS">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="VU5KF54RWAFQS">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/ByDV2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Basi y Deisy V3 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  FIGURAS DE BACHATA DVD VOL 3 Basi & Deisy
                <?php else: ?>                              
                  FIGURES OF BACHATA DVD VOL 3 Basi & Deisy
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="DS639HXNRM7M2">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="DS639HXNRM7M2">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/ByDV3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Deisy V1 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA LADY STYLE DVD VOL 1 Deisy Carrera
                <?php else: ?>                              
                  BACHATA LADY STYLE DVD VOL 1 Deisy Carrera
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="PC6P8VA7RVBDY">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="PC6P8VA7RVBDY">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/DV1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Deisy V2 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA LADY STYLE DVD VOL 2 Deisy Carrera
                <?php else: ?>                              
                  BACHATA LADY STYLE DVD VOL 2 Deisy Carrera
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="278EVAQRA5LSS">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="278EVAQRA5LSS">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/DV2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Deisy V3 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA LADY STYLE DVD VOL 3 Deisy Carrera
                <?php else: ?>                              
                  BACHATA LADY STYLE DVD VOL 3 Deisy Carrera
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="VBJKZEHDFVSVG">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="VBJKZEHDFVSVG">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/DV3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Chaves y Silvia V1 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL DVD VOL 1 Chaves & Silvia
                <?php else: ?>                              
                  BACHATA SENSUAL DVD VOL 1 Chaves & Silvia
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="67TBLPR2Y5QNA">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="67TBLPR2Y5QNA">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/CySV1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Chaves y Silvia V2 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL DVD VOL 2 Chaves & Silvia
                <?php else: ?>                              
                  BACHATA SENSUAL DVD VOL 2 Chaves & Silvia
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="SPBVBSFKVM82E">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="SPBVBSFKVM82E">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/CySV2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Chaves y Silvia V3 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL DVD VOL 3 Chaves & Silvia
                <?php else: ?>                              
                  BACHATA SENSUAL DVD VOL 3 Chaves & Silvia
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="MU86H2ZL8U676">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="MU86H2ZL8U676">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/CySV3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Ronald y Alba V1 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA FUSION DVD VOL 1 Ronald & Alba
                <?php else: ?>                              
                  BACHATA FUSION DVD VOL 1 Ronald & Alba
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="HAXKYACF9P6CS">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="HAXKYACF9P6CS">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/RyAV1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Ronald y Alba V2 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA FUSION DVD VOL 2 Ronald & Alba
                <?php else: ?>                              
                  BACHATA FUSION DVD VOL 2 Ronald & Alba
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="96B8HGZ6Z5NTS">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="96B8HGZ6Z5NTS">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/RyAV2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Ronald y Alba V3 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA FUSION DVD VOL 3 Ronald & Alba
                <?php else: ?>                              
                  BACHATA FUSION DVD VOL 3 Ronald & Alba
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="ZF7687ZQSPNC8">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="ZF7687ZQSPNC8">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/RyAV3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Ronald y Alba V4 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA FUSION DVD VOL 4 Ronald & Alba
                <?php else: ?>                              
                  BACHATA FUSION DVD VOL 4 Ronald & Alba
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="879575VHJN5EY">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="879575VHJN5EY">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/RyAV4.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Marco y Sara V1 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL DVD VOL 1 Marco & Sara
                <?php else: ?>                              
                  BACHATA SENSUAL DVD VOL 1 Marco & Sara
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="8LPDEP8X7SQHE">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="8LPDEP8X7SQHE">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/MySV1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Marco y Sara V2 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL DVD VOL 2 Marco & Sara
                <?php else: ?>                              
                  BACHATA SENSUAL DVD VOL 2 Marco & Sara
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="CJ9VYEA2FE3QQ">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="CJ9VYEA2FE3QQ">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/MySV2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Marco y Sara V3 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL DVD VOL 3 Marco & Sara
                <?php else: ?>                              
                  BACHATA SENSUAL DVD VOL 3 Marco & Sara
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="2UE9NDFT92ASU">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="2UE9NDFT92ASU">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/MySV3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Marco y Sara V4 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL DVD VOL 4 Marco & Sara
                <?php else: ?>                              
                  BACHATA SENSUAL DVD VOL 4 Marco & Sara
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="5U8WTZM385DRW">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="5U8WTZM385DRW">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/MySV4.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Junior y Tatami V1 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL SOCIAL DVD VOL 1 Junior & Tamini
                <?php else: ?>                              
                  BACHATA SENSUAL SOCIAL DVD VOL 1 Junior & Tamini
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="KRULPRLKET23S">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="KRULPRLKET23S">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/JyTV1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Junior y Tatami V2 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL SOCIAL DVD VOL 2 Junior & Tamini
                <?php else: ?>                              
                  BACHATA SENSUAL SOCIAL DVD VOL 2 Junior & Tamini
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="XZ5SJFPWGAYTN">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="XZ5SJFPWGAYTN">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/JyTV2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Junior y Tatami V3 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL SOCIAL DVD VOL 3 Junior & Tamini
                <?php else: ?>                              
                  BACHATA SENSUAL SOCIAL DVD VOL 3 Junior & Tamini
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="T6M27CYK3VELJ">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="T6M27CYK3VELJ">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/JyTV3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Junior y Tatami V4 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL SOCIAL DVD VOL 4 Junior & Tamini
                <?php else: ?>                              
                  BACHATA SENSUAL SOCIAL DVD VOL 4 Junior & Tamini
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="A7DFCVGMWWSCN">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="A7DFCVGMWWSCN">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/JyTV4.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Junior y Tatami V5 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL SOCIAL DVD VOL 5 Junior & Tamini
                <?php else: ?>                              
                  BACHATA SENSUAL SOCIAL DVD VOL 5 Junior & Tamini
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="THVVA7QYTTV62">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="THVVA7QYTTV62">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/JyTV5.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Junior y Tatami V6 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL SOCIAL DVD VOL 6 Junior & Tamini
                <?php else: ?>                              
                  BACHATA SENSUAL SOCIAL DVD VOL 6 Junior & Tamini
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="XURUSD3DALHZW">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="XURUSD3DALHZW">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/JyTV6.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Junior y Tatami V7 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL SOCIAL DVD VOL 7 Junior & Tamini
                <?php else: ?>                              
                  BACHATA SENSUAL SOCIAL DVD VOL 7 Junior & Tamini
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="FUL3QVUSWG4QJ">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="FUL3QVUSWG4QJ">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/JyTV7.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Junior y Tatami V8 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL SOCIAL DVD VOL 8 Junior & Tamini
                <?php else: ?>                              
                  BACHATA SENSUAL SOCIAL DVD VOL 8 Junior & Tamini
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="L4FSCFXNYYCWU">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="L4FSCFXNYYCWU">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/JyTV8.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Junior y Tatami V9 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL SOCIAL DVD VOL 9 Junior & Tamini
                <?php else: ?>                              
                  BACHATA SENSUAL SOCIAL DVD VOL 9 Junior & Tamini
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="EDAPKJDCHVZYA">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="EDAPKJDCHVZYA">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/JyTV9.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Junior y Tatami V10 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  BACHATA SENSUAL SOCIAL DVD VOL 10 Junior & Tamini
                <?php else: ?>                              
                  BACHATA SENSUAL SOCIAL DVD VOL 10 Junior & Tamini
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="3NY8HCL5U2BGC">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="3NY8HCL5U2BGC">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/JyTV10.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Basi y Deisy Salsa V1 -->
      <div class="content-section-a">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  SALSA ELEGANTE VOL. 1 Basi & Deisy
                <?php else: ?>                              
                  ELEGANT SALSA VOL. 1 Basi & Deisy
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipp
                  ing.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="WGMYP3QV6Q3XG">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="WGMYP3QV6Q3XG">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
              <img class="img-responsive" src="img/ByDSV1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Basi y Deisy Salsa V2 -->
      <div class="content-section-b">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
              <hr class="section-heading-spacer">
              <div class="clearfix"></div>
              <h2 class="section-heading">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  SALSA ELEGANTE VOL. 2 Basi & Deisy
                <?php else: ?>                              
                  ELEGANT SALSA VOL. 2 Basi & Deisy
                <?php endif; ?>
              </h2>
              <p class="lead">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  
                <?php else: ?>                              
                  
                <?php endif; ?>
              </p>
              <h2 class="text-center">
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Gastos de envío GRATIS.
                <?php else: ?>                              
                  Free shipping.
                <?php endif; ?>
              </h2>
              <h2 class="text-center">15€</h2>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="K67BLQR6LY7XN">
                  <input type="image" src="img/gold-rect-paypal-60px.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <p class="text-center">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="K67BLQR6LY7XN">
                  <input type="image" src="img/cc-badges-ppmcvdam.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                  <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                </p>
              </form>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
              <img class="img-responsive" src="img/ByDSV2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- FIN AQUI -->
      
  
      <a  name="contact"></a>
      <div class="banner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2>
                <?php if (I18n::get_locale() == 'es_ES'): ?>
                  Contacta con BSK Dance DVDs.
                <?php else: ?>                              
                  Contact BSK Dance DVDs.
                <?php endif; ?>
              </h2> 
              <h3>Email: basiydeisy@hotmail.com</h3>
              <h3>WhatsApp <i class="fa fa-whatsapp"></i>:  679 93 65 05</h3>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Footer -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <ul class="list-inline">
                <li><a href="#about">
                  <?php if (I18n::get_locale() == 'es_ES'): ?>
                    Inicio
                  <?php else: ?>                              
                    Start
                  <?php endif; ?>
                </a></li>
                <li class="footer-menu-divider">&sdot;</li>
                <li><a href="#services">
                  <?php if (I18n::get_locale() == 'es_ES'): ?>
                    Paquetes
                  <?php else: ?>                              
                    Packs
                  <?php endif; ?>
                </a></li>
                <li class="footer-menu-divider">&sdot;</li>
                <li><a href="#contact">
                  <?php if (I18n::get_locale() == 'es_ES'): ?>
                    Contacto
                  <?php else: ?>                              
                    Contact
                  <?php endif; ?>
                </a></li>
              </ul>
              <p class="copyright text-muted small">Copyright &copy; BSK Dance DVDs 2016. All Rights Reserved</p>
            </div>
          </div>
        </div>
      </footer>
    <div> <!-- wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" charset="utf-8" src="js/jquery.tubular.1.0.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/index.js?v=1.1"></script>
</body>

</html>
