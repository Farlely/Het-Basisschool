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
      <li class="nav-item">
        <a class="nav-link" href="LeerklachtWelkom.php">Leerklacht</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>

  </body>


      <?php
    if(isset($message))
    {
      echo '<label class="text-danger">'.$message.'</label>';
    }
    ?>
    <div class="container" style="width:500px;">
      <form action="LeerlingDashboardLogin.php" method="POST">
     <h3> Welkom Leerling</h3><br/>
     <form method="post">
        <label>Gebruikersnaam:</label>
       <input type="text" name="username" placeholder="Voer je voor/achternaam" class="form-control" required/>
       <small id="passwordHelpBlock" class="form-text text-muted">
       Je Gebruikersnaam is je Voornaam en achternaam
     </small>
       <br/>

       <label>Wachtwoord (8 characters minimum):</label>
      <input type="password" name="password" class="form-control"  minlength="8" required/>
      <small id="passwordHelpBlock" class="form-text text-muted">
      Wachtwoord vindt je bij de administratie
    </small>
      <br/>
 <center>
      <input type="submit" name="login" class="btn btn-info" value="Login" />
</center>
     </form>
    </div>
    <br/>
  </body>
</html>
