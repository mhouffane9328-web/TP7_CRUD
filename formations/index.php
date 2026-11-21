<<<<<<< HEAD
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include "../database/db.php";
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Formations</title>
<link rel="stylesheet" href="../style.css"></head>
<body>
<div class="container">
<h2>📚 Liste Formations</h2>
<a href="create.php" class="btn btn-blue">+ Ajouter Formation</a>
<a href="../" class="btn">Accueil</a>
<table>
<tr><th>ID</th><th>Nom</th><th>Duree</th><th>Actions</th></tr>
<?php
$result = $conn->query("SELECT * FROM formations");
while($r=$result->fetch_assoc()){
 $id=$r['id_formation']??$r['id'];
 $nom=$r['nom_formation']??$r['nom'];
 $dur=$r['duree']??'';
 echo "<tr><td>$id</td><td>$nom</td><td>$dur</td><td><a href='edit.php?id=$id'>Edit</a> | <a href='delete.php?id=$id'>Supp</a></td></tr>";
}
?>
</table>
</div>
=======
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include "../database/db.php";
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Formations</title>
<link rel="stylesheet" href="../style.css"></head>
<body>
<div class="container">
<h2>📚 Liste Formations</h2>
<a href="create.php" class="btn btn-blue">+ Ajouter Formation</a>
<a href="../" class="btn">Accueil</a>
<table>
<tr><th>ID</th><th>Nom</th><th>Duree</th><th>Actions</th></tr>
<?php
$result = $conn->query("SELECT * FROM formations");
while($r=$result->fetch_assoc()){
 $id=$r['id_formation']??$r['id'];
 $nom=$r['nom_formation']??$r['nom'];
 $dur=$r['duree']??'';
 echo "<tr><td>$id</td><td>$nom</td><td>$dur</td><td><a href='edit.php?id=$id'>Edit</a> | <a href='delete.php?id=$id'>Supp</a></td></tr>";
}
?>
</table>
</div>
>>>>>>> 7ced98b589590697d2914e67581b877138c5d773
</body></html>