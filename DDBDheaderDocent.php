<!doctype html>
<html lang="en">
  <head>
    <title>PDO PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="DocentDashBoard.php"><img src="Logo.png" width="50" height="50" alt="..."></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="DocentDashBoard.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contact</a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="DDBDadd.php">Add New</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="DocentDashBoard.php" type="submit" name="btn_submit" class="btn btn-info">Student Overzicht</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#"><?php
      echo '<a href="DocentDashBoardLogout.php">Logout</a>'; ?></a>
      </li>
    </ul>
  </div>
</nav>
