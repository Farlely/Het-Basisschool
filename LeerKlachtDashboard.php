<!DOCTYPE html>
<html lang="en">
<head>
  <title>Het BasisOnderwijs</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<a class="navbar-brand" href="index.php">BasisOnderwijs</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">StartPagina</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="LeerklachtWelkom.php">Leerklacht</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Leerling
      </a>
      <div class="dropdown-menu">
        <li class="dropdown-header">LeerlingToevoegen</li>
        <a class="dropdown-item" href="#">Niuewe Leerling Toevoegen</a>
        <a class="dropdown-item" href="Klas1Overzicht.php">Oversicht Leerling klas 1 </a>
        <a class="dropdown-item" href="Klas2Overzicht">Oversicht Leerling klas 2</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><?php
      echo '<a href="LeerKlachtDashboardLgout.php">Logout</a>';

       ?></a>
    </li>
  </ul>
</div>
</nav>

  </body>

    <div class="row">

    <div class="col">
      <?php
      session_start();

      if(isset($_SESSION["username"]))
      {
        echo '<h3> Welcome Lerlaar,'.'&nbsp;'.$_SESSION["username"].'</h3>';
      }

      ?></div>

  </div>

  </body>
</html>
