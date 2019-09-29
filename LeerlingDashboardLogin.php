<?php


 session_start();
 $host = "localhost";
 $username = "root";
 $password = "root";
 $database = "Het-Basisonderwijs";
 $message = "";

 try
 {
  $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST["login"]))
  {
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
      $message = '<label>ALL fields are required</label>';
    }
    else {
      $query = "SELECT * FROM LeerlingLogin WHERE Gebruikersnaam = :username AND Wachtwoord = :password";
      $statement = $connect->prepare($query);
      $statement-> execute(
        array(
          'username' => $_POST["username"],
          'password' => $_POST["password"]

        )
      );
      $count = $statement->rowCount();
      if($count > 0)
      {
        $_SESSION["username"] = $_POST["username"];
        header("location:LeerlingDashboard.php");
      }
      else {
        $message = '<label> Wrong Data </label>';
      }
    }
  }
 }
 catch(PDOException $error)
 {
  $message = $error->getMessage();
 }
 ?>
