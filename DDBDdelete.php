<?php
 require_once ('dbcon.php');
 if(isset($_GET['id'])){
   $id = $_GET['id'];
   try{
    $stmt = $con->prepare("DELETE FROM Docent Where DocentCode=?");
    $stmt->execute(array($id));
    header('Location:DDBDocent.php');
   } catch (PDOException $ex){

echo $ex->getMessage();
   }
 }
 ?>
