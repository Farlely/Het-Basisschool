<?php
include "DatabaseConect.php";

   $LeerlingNummer = $_POST['LeerlingNummer'];
   $Naam = $_POST['Naam'];
   $Achternaam = $_POST['Achternaam'];
   $Groepcode = $_POST['GroepCode'];



   $sql =("INSERT INTO Leerling(LeerlingNummer,Naam,Achternaam,GroepCode) VALUES  (?,
     ?,?,?)");
   $stmt = $conn->prepare($sql);
   $stmt->bindParam(1, $LeerlingNummer);
   $stmt->bindParam(2, $Naam);
   $stmt->bindParam(3, $Achternaam);
   $stmt->bindParam(4, $Groepcode);

    $stmt->execute();

   header('Location: LeerlingLoginToevoegen.php');
   echo "Leerling is toegevoegd";



?>
