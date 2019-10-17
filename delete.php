<?php
 require_once ('dbcon.php');
 if(isset($_GET['id'])){
   $id = $_GET['id'];
   try{
    $stmt = $con->prepare("DELETE FROM Leerling Where LeerlingNummer=?");
    $stmt->execute(array($id));
    header('Location:DocentDashBoard.php');
   } catch (PDOException $ex){

echo $ex->getMessage();
   }
 }
 ?>
