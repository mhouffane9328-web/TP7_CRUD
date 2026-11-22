<?php include "../database/db.php"; ?>
<!DOCTYPE html>
<html><head><meta charset="utf-8"><title>Modules</title>
<link rel="stylesheet" href="../style.css"></head>
<body>
<div class="container">
<h2>📖 Liste Modules</h2>
<a href="create.php" class="btn btn-orange">+ Ajouter Module</a>
<a href="../" class="btn">Accueil</a>
<table>
<tr><th>ID</th><th>Nom Module</th><th>Formation</th><th>Actions</th></tr>
<?php
$res=$conn->query("SELECT * FROM modules");
while($r=$res->fetch_assoc()){
 $id=$r['id_module']??$r['id'];
 $nom=$r['nom_module']??$r['nom'];
 $idf=$r['id_formation']??'';
 echo "<tr><td>$id</td><td>$nom</td><td>$idf</td><td><a href='edit.php?id=$id'>Edit</a> | <a href='delete.php?id=$id'>Supp</a></td></tr>";
}
?>
</table>
</div>
<?php include "../database/db.php"; ?>
<!DOCTYPE html>
<html><head><meta charset="utf-8"><title>Modules</title>
<link rel="stylesheet" href="../style.css"></head>
<body>
<div class="container">
<h2>📖 Liste Modules</h2>
<a href="create.php" class="btn btn-orange">+ Ajouter Module</a>
<a href="../" class="btn">Accueil</a>
<table>
<tr><th>ID</th><th>Nom Module</th><th>Formation</th><th>Actions</th></tr>
<?php
$res=$conn->query("SELECT * FROM modules");
while($r=$res->fetch_assoc()){
 $id=$r['id_module']??$r['id'];
 $nom=$r['nom_module']??$r['nom'];
 $idf=$r['id_formation']??'';
 echo "<tr><td>$id</td><td>$nom</td><td>$idf</td><td><a href='edit.php?id=$id'>Edit</a> | <a href='delete.php?id=$id'>Supp</a></td></tr>";
}
?>
</table>
</div>
</body></html>
