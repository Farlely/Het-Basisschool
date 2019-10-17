
<?php
require_once ('dbcon.php');

 $message = "";
 
 if(isset($_POST["login"]))
 {
   if(empty($_POST["username"]) || empty($_POST["password"]))
   {
     $message = '<label>ALL fields are required</label>';
   }
   else {

     $stmt = $con->prepare("SELECT * FROM LeerkrachtLogin WHERE GebruikerNaam = :username AND Wachtword = :password");
     $stmt->execute(
       array(
         'username' => $_POST["username"],
         'password' => $_POST["password"]

       )
     );
     $count = $stmt->rowCount();
     if($count > 0)
     {
       $_SESSION["username"] = $_POST["username"];
       header("location:DocentDashBoard.php");
     }
     else {
       $message = '<label> Wrong Data </label>';
     }
   }
 }
  ?>
