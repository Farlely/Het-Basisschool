<?php
require_once('dbcon.php');
?>
<?php require 'headerDocent.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
<h2>Student van APM1F</h2>
</div>
<div class="card-body">

<table class="table table-bordered">
<tr>
  <th>LeerLingNummer</th>
  <th>Naam</th>
  <th>Achternaam</th>
   <th>Groep</th>
   <th>Action</th>
</tr>
<?php
  $stmt = $con->prepare("SELECT * FROM Leerling Where GroepCode='APM1F'");
  $stmt->execute();
  $results = $stmt->fetchALL();
  foreach ($results as $row) {

 ?>
<tr>
  <td><?=$row['LeerlingNummer'];?></td>
  <td><?=$row['Naam'];?></td>
  <td><?=$row['Achternaam'];?></td>
  <td><?=$row['GroepCode'];?></td>
  <td>
    <a href="edit.php?id=<?=$row['LeerlingNummer'];?>" class="btn btn-info">Edit</a>
    <a href="delete.php?id=<?=$row['LeerlingNummer'];?>"class='btn btn-danger'>Delete</a>
  </td>
</tr>
<?php
}
 ?>
</table>
</div>
</div>
</div>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
<h2>Student van APM2F</h2>
</div>
<div class="card-body">

<table class="table table-bordered">
<tr>
  <th>LeerLingNummer</th>
  <th>Naam</th>
  <th>Achternaam</th>
   <th>Groep</th>
   <th>Action</th>
</tr>
<?php
  $stmt = $con->prepare("SELECT * FROM Leerling Where GroepCode='APM2F'");
  $stmt->execute();
  $results = $stmt->fetchALL();
  foreach ($results as $row) {

 ?>
<tr>
  <td><?=$row['LeerlingNummer'];?></td>
  <td><?=$row['Naam'];?></td>
  <td><?=$row['Achternaam'];?></td>
  <td><?=$row['GroepCode'];?></td>
  <td>
    <a href="edit.php?id=<?=$row['LeerlingNummer'];?>" class="btn btn-info">Edit</a>
    <a href="delete.php?id=<?=$row['LeerlingNummer'];?>"class='btn btn-danger'>Delete</a>
  </td>
</tr>
<?php
}
 ?>
</table>
</div>
</div>
</div>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
<h2>Student van  APM3F</h2>
</div>
<div class="card-body">
<table class="table table-bordered">
<tr>
  <th>LeerLingNummer</th>
  <th>Naam</th>
  <th>Achternaam</th>
   <th>Groep</th>
   <th>Action</th>
</tr>
<?php
  $stmt = $con->prepare("SELECT * FROM Leerling Where GroepCode='APM3F'");
  $stmt->execute();
  $results = $stmt->fetchALL();
  foreach ($results as $row) {

 ?>
<tr>
  <td><?=$row['LeerlingNummer'];?></td>
  <td><?=$row['Naam'];?></td>
  <td><?=$row['Achternaam'];?></td>
  <td><?=$row['GroepCode'];?></td>
  <td>
    <a href="edit.php?id=<?=$row['LeerlingNummer'];?>" class="btn btn-info">Edit</a>
    <a href="delete.php?id=<?=$row['LeerlingNummer'];?>"class='btn btn-danger'>Delete</a>
  </td>
</tr>
<?php
}
 ?>
</table>
</div>
</div>
</div>
<?php require 'footer.php'; ?>
