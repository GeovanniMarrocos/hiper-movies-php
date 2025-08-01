<?php 
require_once("globals.php");
require_once("db.php");
$flassMessage = [];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hiper - Movies</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="<?php $BASE_URL ?>img/favicon.svg" type="image/x-icon">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.7/css/bootstrap.css" integrity="sha512-Dg29JTs/r029HFd/aOkPcgmeELzRHukL99WqC7FPC+oyF4DClbMLlQANt5tXI1sgjpBGbcQIRqR4YNjI2LbNeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS do projeto -->
  <link rel="stylesheet" href="<?php $BASE_URL ?>./css/style.css">

</head>

<body>
  <header>
    <nav id="main-navbar" class="navbar navbar-expand-lg">
      <div class="logo-container d-flex">
        <a href="<?php $BASE_URL ?>/hiper-movies/" class="navbar-brand d-flex">
          <img class="img-logo" src="<?php $BASE_URL ?>./img/logo-dark.svg" alt="" srcset="">
        </a>

      </div>
      <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle Navigation">
        <i class="fas fa-bars"></i>
      </button>
      <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
        <input type="text" name="q" id="search" class=" form-control mr-sm-2" type="search" placeholder="BUSCAR FILMES" aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar nav">
          <li class="nav-item">
            <a href="<?php $BASE_URL ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php if(!empty($flassMessage["msg"])):?>

  <?php endif;?>
  <div class="msg-container">
    <p class="msg">Testando Mensagem</p>
  </div>