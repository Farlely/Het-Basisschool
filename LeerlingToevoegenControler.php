<?php
include "DatabaseConect.php";

   $LoginCode = $_POST['LoginCode'];
   $LeerlingNummer = $_POST['LeerlingNummer'];
   $Gebruikersnaam = $_POST['Gebruikersnaam'];
   $Wachtwoord = $_POST['Wachtwoord'];



   $sql =("INSERT INTO LeerlingLogin(LoginCode,LeerlingNummer,Gebruikersnaam,Wachtwoord) VALUES  (?,
     ?,?,?)");
   $stmt = $conn->prepare($sql);
   $stmt->bindParam(1, $LoginCode);
   $stmt->bindParam(2, $LeerlingNummer);
   $stmt->bindParam(3, $Gebruikersnaam);
   $stmt->bindParam(4, $Wachtwoord);

    $stmt->execute();

   header('Location: LeerKlachtDashboard.php');
   echo "Leerling is toegevoegd";



?>
