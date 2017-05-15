<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="keywords" content="Learn to dance bachata, Learn to dance salsa, Aprende a bailar bachata, aprende a bailar salsa, Bachata Basi y Deisy, Bachata Ronald y Alba, Bachata Marco y Sara, Bachata Chavez y Silvia, Bachata Junior y Tamani">
   <meta name="description" content="Bachata, Salsa Learn on Line with Ronald and Alba, Chavez and Silvia, Marco and Sara, Basi and Deisy. Aprende a bailar Bachata y Salsa Online con Ronald y Alba, Chavez y Silvia, Marco y Sara, Basi y Deisy, Junior y Tamani.">
   <meta name="author" content="adelarosa">
   <meta name="owner" content="Basi Gonzalez Matallanos">
   <meta name="robots" content="index, follow">

   <title><?php if (isset($page_title)): ?><?php echo $page_title; ?> | <?php endif; ?>BSKOnline</title>

   <!-- Bootstrap Core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom CSS -->
   <link href="css/modern-business.css" rel="stylesheet">

   <!-- Personal CSS -->
   <link href="css/bsk.css?v=1.31" rel="stylesheet">
    
   <!-- Custom Fonts -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <script type="text/javascript">
    window.cookieconsent_options = {"message":"Utilizamos cookies propias para elaborar información estadística y mostrarte publicidad personalizada a través del análisis de tu navegación. Si continúas navegando aceptas su uso.","dismiss":"Aceptar","learnMore":"","link":"http://www.bachatabaile.com/cookiepolity.com","theme":"light-bottom"};
    </script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->
    
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>
<body>
   <?php include_once("analyticstracking.php") ?>
   <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">BachataSalsaOnline</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     <?php if (I18n::get_locale() == 'es_ES'): ?><img src="images/black.png" class="flag16 flag-es" alt="Español" /> Español<?php endif; ?>
                     <?php if (I18n::get_locale() == 'en_GB'): ?><img src="images/black.png" class="flag16 flag-us" alt="English" /> English<?php endif; ?>
                     <b class="caret"></b>
                  </a>                          
                  <ul class="dropdown-menu" role="menu">
                     <?php if (I18n::get_locale() == 'es_ES'): ?>
                       <li class="active"><a href="change_language.php?lang=es_ES"><img src="images/black.png" class="flag flag-es" alt="Español" /> Español</a></li>
                       <li class=""><a href="change_language.php?lang=en_GB"><img src="images/black.png" class="flag flag-us" alt="English" /> English</a></li>                       
                     <?php else: ?>
                       <li class=""><a href="change_language.php?lang=es_ES"><img src="images/black.png" class="flag flag-es" alt="Español" /> Español</a></li>
                       <li class="active"><a href="change_language.php?lang=en_GB"><img src="images/black.png" class="flag flag-us" alt="English" /> English</a></li>                       
                     <?php endif; ?> 
                  </ul>
               </li> 
               <li  <?php if (isset($page_num) && $page_num == 1): ?>class="active"<?php endif; ?>>
                  <a href="/"><?php echo _('Home'); ?></a>
               </li>
               <li <?php if (isset($page_num) && $page_num == 2): ?>class="active"<?php endif; ?> ><a href="courses.php"><?php echo _('Courses'); ?></a></li>
               <?php if (Auth::getInstance()->isLoggedIn()): ?>
                  <li <?php if (isset($page_num) && $page_num == 3): ?>class="active"<?php endif; ?> ><a href="suscripcion.php"><?php echo _('Subscription'); ?></a></li>
                  <li <?php if (isset($page_num) && $page_num == 4): ?>class="active"<?php endif; ?> ><a href="contact.php"><?php echo _('Contact'); ?></a></li>
                  <li class="dropdown <?php if (isset($page_num) && $page_num == 20): ?>active<?php endif; ?> ">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo htmlspecialchars(Auth::getInstance()->getCurrentUser()->name); ?> <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <?php if (Auth::getInstance()->isAdmin()): ?>
                           <li><a href="/admin/users"><i class="fa fa-pencil" aria-hidden="true"></i> Admin</a></li>
                           <li><a href="/sb-admin/"><i class="fa fa-pencil-square" aria-hidden="true"></i> SB-Admin</a></li>
                        <?php endif; ?>
                        <li><a href="/profile.php"><i class="fa fa-user" aria-hidden="true"></i> <?php echo _('Profile'); ?></a></li>
                        <li><a href="/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo _('Log out'); ?></a></li>
                     </ul>
                  </li>
               <?php else: ?>
                  <!--<li><a href="/signup.php">Regístrate</a></li>-->
                  <li <?php if (isset($page_num) && $page_num == 3): ?>class="active"<?php endif; ?> ><a href="suscripcion.php"><?php echo _('Subscription'); ?></a></li>
                  <li <?php if (isset($page_num) && $page_num == 4): ?>class="active"<?php endif; ?> ><a href="contact.php"><?php echo _('Contact'); ?></a></li>
                  <li <?php if (isset($page_num) && $page_num == 10): ?>class="active"<?php endif; ?> ><a href="/login.php"><?php echo _('Sign in'); ?></a></li>                    
               <?php endif; ?>
               
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
   </nav>