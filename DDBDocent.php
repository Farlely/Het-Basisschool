<?php
require('dbcon.php');
?>
<?php require 'DDBDheaderDocent.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
<h2>Docent van APM1F</h2>
</div>
<div class="card-body">

<table class="table table-bordered">
<tr>
  <th>Docentcode</th>
  <th>Naam</th>
  <th>Achternaam</th>
   <th>Groep</th>
   <th>Action</th>
</tr>
<?php
  $stmt = $con->prepare("SELECT * FROM Docent Where GroepCode='APM1F'");
  $stmt->execute();
  $results = $stmt->fetchALL();
  foreach ($results as $row) {

 ?>
<tr>
  <td><?=$row['DocentCode'];?></td>
  <td><?=$row['Naam'];?></td>
  <td><?=$row['Achternaam'];?></td>
  <td><?=$row['GroepCode'];?></td>
  <td>
    <a href="DDBDedit.php?id=<?=$row['DocentCode'];?>" class="btn btn-info">Edit</a>
    <a href="DDBDdelete.php?id=<?=$row['DocentCode'];?>"class='btn btn-danger'>Delete</a>
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
<h2>Docent van APM2F</h2>
</div>
<div class="card-body">

<table class="table table-bordered">
<tr>
  <th>Docentcode</th>
  <th>Naam</th>
  <th>Achternaam</th>
   <th>Groep</th>
   <th>Action</th>
</tr>
<?php
  $stmt = $con->prepare("SELECT * FROM Docent Where GroepCode='APM2F'");
  $stmt->execute();
  $results = $stmt->fetchALL();
  foreach ($results as $row) {

 ?>
<tr>
  <td><?=$row['DocentCode'];?></td>
  <td><?=$row['Naam'];?></td>
  <td><?=$row['Achternaam'];?></td>
  <td><?=$row['GroepCode'];?></td>
  <td>
    <a href="DDBDedit.php?id=<?=$row['DocentCode'];?>" class="btn btn-info">Edit</a>
    <a href="DDBDdelete.php?id=<?=$row['DocentCode'];?>"class='btn btn-danger'>Delete</a>
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
<h2>Docent van  APM3F</h2>
</div>
<div class="card-body">
<table class="table table-bordered">
<tr>
  <th>DocentCode</th>
  <th>Naam</th>
  <th>Achternaam</th>
   <th>Groep</th>
   <th>Action</th>
</tr>
<?php
  $stmt = $con->prepare("SELECT * FROM Docent Where GroepCode='APM3F'");
  $stmt->execute();
  $results = $stmt->fetchALL();
  foreach ($results as $row) {

 ?>
<tr>
  <td><?=$row['DocentCode'];?></td>
  <td><?=$row['Naam'];?></td>
  <td><?=$row['Achternaam'];?></td>
  <td><?=$row['GroepCode'];?></td>
  <td>
    <a href="DDBDedit.php?id=<?=$row['DocentCode'];?>" class="btn btn-info">Edit</a>
    <a href="delete.php?id=<?=$row['DocentCode'];?>"class='btn btn-danger'>Delete</a>
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
