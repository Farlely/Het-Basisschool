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
<body>

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
            <a class="dropdown-item" href="#">Niuew Leerling toevoegen</a>
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
  </nav><br>
<div class="container">
  <h3>Leerling Klas 2 Overzicht</h3>
  <?php

      $sql = "SELECT * FROM Leerling WHERE GroepCode = 'Klas2'";
      $result = $conn->query($sql);

      echo "<table> <tr><th>Naam</th> <th>Achternaam</th> <th>Klas</th></tr>";
      if ($result->rowCount() > 0) {
          // output data of each row

          while($row = $result->fetch()) {
             $LeerlingNummer = $row['LeerlingNummer'];
             echo "<tr>" . "<td>" .$row['Naam'] . "</td><td>" . $row['Achternaam'] . "</td><td>" . $row['GroepCode'] . "</td>" ."</tr>";

          }
          echo "</table>";
      } else {

      }
  ?>

</div>

</body>
</html>
