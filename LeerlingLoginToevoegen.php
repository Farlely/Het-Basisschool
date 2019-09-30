<?php
include "DatabaseConect.php";
?>
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="Logo.png" width="50" height="50" alt="..."></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">StartPagina<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Leerling
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="LeerlingToevoegen.php">Niuew Leerling toevoegen</a>
          <a class="dropdown-item" href="Klas1Overzicht.php">Overzicht Leerling klas 1 </a>
          <a class="dropdown-item" href="Klas2Overzicht.php">Oversicht Leerling klas 2 </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><?php
        echo '<a href="LeerKlachtDashboardLgout.php">Logout</a>';

         ?></a>
      </li>
    </ul>
  </div>
</nav>
<body>
<center>
    <div class="row">

    <div class="col">
      <?php
      session_start();

      if(isset($_SESSION["username"]))
      {
        echo '<h3>'.'Docent'.'&nbsp;'.$_SESSION["username"].'<h3> Maak login gegvens voor Leerling'.'</h3>';
      }

      ?></div>

  </div>
</center><br><br><br>
  <div class="container" style="width:500px;">
    <form action="LeerlingToevoegenControler.php" method="POST">
   <form method="post">
     <label>LoginCode</label>
    <input type="number" name="LoginCode" class="form-control" required/>
    <small id="passwordHelpBlock" class="form-text text-muted">
    Voer LoginCode in!
  </small>
    <br/>

    <select name="LeerlingNummer">
         <?php
       $sql = "SELECT * FROM Leerling Where LeerlingNummer";
       $result = $conn->query($sql);
       if($result->rowCount() > 0) {
         while($row = $result->fetch()){
           echo'<option value="'.$row['LeerlingNummer'].'">'.$row['LeerlingNummer'].'<option>';
         }
       } else{

         }
       ?>
         </select>
        <br><br>
     <label>Gebruikersnaam</label>
    <input type="text" name="Gebruikersnaam" class="form-control"  required/>
    <small id="passwordHelpBlock" class="form-text text-muted">
    Voer Leerling Voornaam en achternaam als Gebruikersnaam!
  </small>
    <br/>
    <br>
    <label>Wachtwoord</label>
    <input type="Wachtwoord" name="Wachtwoord" class="form-control"  required/>
    <small id="passwordHelpBlock" class="form-text text-muted">
    Vul Wachtwoord voor student!
    </small>
      <br>
    <input type="submit" class="btn btn-info" value="opslaan" />

   </form>
  </div>

  </body>
</html>
