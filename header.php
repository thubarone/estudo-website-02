<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- chamada do bootstrap -->
  <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
  <link rel="stylesheet" href="css/geral.css">
  <link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
  <link rel="stylesheet" href="css/plugins.css">
  <link rel="stylesheet" href="css/<?php echo $style; ?>.css">
</head>
<body>

  <?php include('includes/organisms/menu-responsivo.php'); ?>

  <div class="layout">
    <header>
      <div class="container">

        <div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
          <img src="images/logo-tag-topo.svg" alt="Logo Topo Tag">
        </div>

        <div class="links">
          <?php include('includes/organisms/menu.php'); ?>

          <a class="toggle" href="javascript:;">
            <span></span>
            <span></span>
            <span></span>

          </a>

          <ul class="social">
            <li>
              <a href="#"><i class="fab fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-github"></i></a>
            </li>
          </ul>
        </div>

        <h1><?php echo $chamada;></h1>
        <p>// Creative Things //</p>

      </div>

    </header>

    <main>
