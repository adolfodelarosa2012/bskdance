<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php if (isset($page_title)): ?><?php echo $page_title; ?> | <?php endif; ?>BSKOnline</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/modern-business.css" rel="stylesheet">

    <!-- Personal CSS -->
    <link href="../../css/bsk.css" rel="stylesheet">
    

    <!-- Custom Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
               <li  <?php if (isset($page_num) && $page_num == 1): ?>class="active"<?php endif; ?>>
                  <a href="/">Inicio</a>
               </li>
               <li <?php if (isset($page_num) && $page_num == 2): ?>class="active"<?php endif; ?> ><a href="/courses.php">Cursos</a></li>
               <?php if (Auth::getInstance()->isLoggedIn()): ?>
                  <li <?php if (isset($page_num) && $page_num == 3): ?>class="active"<?php endif; ?> ><a href="/suscripcion.php">Suscripción</a></li>
                  <li <?php if (isset($page_num) && $page_num == 4): ?>class="active"<?php endif; ?> ><a href="/contact.php">Contacto</a></li>
                  <li class="dropdown <?php if (isset($page_num) && $page_num == 20): ?>active<?php endif; ?> ">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo htmlspecialchars(Auth::getInstance()->getCurrentUser()->name); ?> <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <?php if (Auth::getInstance()->isAdmin()): ?>
                           <li><a href="/admin/users">Admin</a></li>
                        <?php endif; ?>
                        <li><a href="/profile.php">Perfil</a></li>
                        <li><a href="/logout.php">Salir</a></li>
                     </ul>
                  </li>
               <?php else: ?>
                  <!--<li><a href="/signup.php">Regístrate</a></li>-->
                  <li <?php if (isset($page_num) && $page_num == 10): ?>class="active"<?php endif; ?> ><a href="/login.php">Iniciar sesión</a></li>
                  <li <?php if (isset($page_num) && $page_num == 3): ?>class="active"<?php endif; ?> ><a href="suscripcion.php">Suscripción</a></li>
                  <li <?php if (isset($page_num) && $page_num == 4): ?>class="active"<?php endif; ?> ><a href="contact.php">Contacto</a></li>                     
               <?php endif; ?>
               
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
   </nav>