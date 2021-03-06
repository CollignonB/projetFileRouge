<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Projet Fil Rouge</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <nav class="nav">
    <a class="nav-link active" href="index.php">Accueil</a>
    <a class="nav-link" href="accountCrea.php">Création de compte</a>
    <a class="nav-link" href="transfert.php">Virement</a>
    <a class="nav-link" href="stats.php">Statistiques</a>
    <a class="nav-link" href="articles.php">Articles</a>
    <?php 
    session_start();
      if(!empty($_SESSION) && isset($_SESSION["user"])): ?>
        <a class="nav-link" href="myInformation.php">Mes Informations</a>
        <a class="nav-link" href="connection.php" >Déconnexion</a>
      <?php else: ?>
        <a class="nav-link" href="connection.php">Connexion</a>
      <?php endif ?>
  </nav>