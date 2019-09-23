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
      <form action="LeerklachtDashboardLogin.php" method="POST">
     <h3> PHP Login </h3><br/>
     <form method="post">
        <label>username</label>
       <input type="text" name="username" class="form-control" />
       <br/>

       <label>password</label>
      <input type="password" name="password" class="form-control" />
      <small id="passwordHelpBlock" class="form-text text-muted">
      Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
    </small>
      <br/>

      <input type="submit" name="login" class="btn btn-info" value="Login" />

     </form>
    </div>
    <br/>
  </body>
</html>
