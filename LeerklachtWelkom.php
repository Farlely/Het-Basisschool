<?php require 'header.php'; ?>
<?php
  if(isset($message))
  {
    echo '<label class="text-danger">'.$message.'</label>';
  }
  ?>
  <div class="container" style="width:500px;">
    <form action="LeerklachtDashboardLogin.php" method="POST">
   <h3> Leerkracht Login</h3><br/>
   <form method="post">
      <label>username</label>
     <input type="text" name="username" class="form-control" />
     <small id="passwordHelpBlock" class="form-text text-muted">
     Gebruikersnaam is u Docentcode.
   </small>
     <br/>

     <label>password</label>
    <input type="password" name="password" class="form-control" />
    <small id="passwordHelpBlock" class="form-text text-muted">
    Wachtwoord vind u bij de administratie
  </small>
    <br/>
<center>
    <input type="submit" name="login" class="" value="Login" />
</center>
   </form>
  </div>
  ?>
<?php require 'footer.php'; ?>
