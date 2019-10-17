<?php require 'headerDocent.php'; ?>
<?php
require_once ('dbcon.php');
if(isset($_POST['btn_submit'])){
   $naam = $_POST['naam'];
   $achternaam = $_POST['achternaam'];
   $groep = $_POST['groep'];
   if(!empty($naam)){
     try{
      $stmt = $con->prepare("INSERT INTO Leerling(Naam, Achternaam, GroepCode) VALUES(:naam, :achternaam, :groep)");
      $stmt->execute(array(':naam' =>$naam ,':achternaam' =>$achternaam ,':groep' =>$groep));
      header('location:DocentDashBoard.php');
     }catch(PDOException $ex){
        echo $ex->getMessage();
     }
   }else{
     echo "INPUT NAME";
   }
}

 ?>
 <div class="container">
   <div class="card mt-5">
     <div class="card-header">
<h2>Add new Student</h2>
</div>
<form action="" method="post">

  <div class="form-group">
<label for="L">Naam</label>
  <td><input type="text" name="naam" class="form-control"></td>
</div>
<div class="form-group">
  <label for="achternaam">Achternaam</label>
  <td><input type="nummer" name="achternaam" class="form-control"></td>
</div>
<div class="form-group">
    <label for="email">Groep</label>
  <td><input type="text" name="groep" class="form-control"></td>
</div>

<div class="form-group">

  <td><input type="submit" name="btn_submit" class="btn btn-info"></td>
</div>
</form>
</div>
</div>
</div>
<?php require 'footer.php'; ?>
