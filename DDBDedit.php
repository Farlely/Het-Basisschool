<?php
require_once ('dbcon.php');
if(isset($_POST['btn_submit'])){
  $docentcode = $_POST['docentcode'];
   $naam = $_POST['naam'];
   $achternaam = $_POST['achternaam'];
   $groep = $_POST['groep'];
   if(!empty($naam)){
     try{
      $stmt = $con->prepare("UPDATE Docent set Naam= :naam,
                       Achternaam = :achternaam, GroepCode = :groep WHERE DocentCode = :id");
      $stmt->execute(array(':naam' =>$naam ,':achternaam' =>$achternaam ,':groep' =>$groep, 'id'=>$docentcode));
     if($stmt){
       header('Location:DDBDocent.php');
     }

     }catch(PDOException $ex){
        echo $ex->getMessage();
     }
   }else{
     echo "INPUT NAME";
   }


}
$docentcode = 0;
$naam = '';
$achternaam= '';
$groep = '';
if (isset($_GET['id'])){
     $id = $_GET['id'];
     $stmt = $con->prepare('SELECT * FROM Docent WHERE DocentCode = :id');
     $stmt->execute(array(':id'=>$id));
     $row = $stmt->fetch();
     $docentcode = $row['DocentCode'];
     $naam = $row['Naam'];
     $achternaam = $row['Achternaam'];
     $groep = $row['GroepCode'];
}
 ?>
 <?php require 'header.php'; ?>
 <div class="container">
   <div class="card mt-5">
     <div class="card-header">
<h2>Edit Student</h2>
</div>
<div class="card-body">
<form action="" method="post">

  <div class="form-group">
  <label for="L">Naam</label>
  <td><input type="text" name="naam" value="<?=$naam;?>" class="form-control"></td>
</div>
<div class="form-group">
  <label for="age">Achternaam</label>
  <td><input type="nummer" name="achternaam" value="<?=$achternaam;?>" class="form-control"></td>
</div>
<div class="form-group">
  <label for="email">Groep</label>
  <td><input type="text" name="groep" value="<?=$groep;?>" class="form-control"></td>
</div>
<div class="form-group">
  <td><input type="hidden" name="docentcode" value="<?=$docentcode;?>"></td>
</div>
<div class="form-group">

  <td><input type="submit" name="btn_submit" class="btn btn-info"></td>
</div>

</form>
</div>
</div>
</div>
<?php require 'footer.php'; ?>
