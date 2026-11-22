<?php include "../database/db.php"; ?>
<!DOCTYPE html>
<html><head><meta charset="utf-8"><title>Etudiants</title>
<link rel="stylesheet" href="../style.css"></head>
<body>
<div class="container">
<h2>👨‍🎓 Liste Etudiants</h2>
<a href="create.php" class="btn btn-green">+ Ajouter Etudiant</a>
<a href="../" class="btn">Accueil</a>
<table>
<tr><th>ID</th><th>Nom</th><th>Email</th><th>Actions</th></tr>
<?php
$res=$conn->query("SELECT * FROM etudiants");
while($r=$res->fetch_assoc()){
 $id=$r['id_etudiant']??$r['id'];
 $nom=$r['nom']??$r['nom_etudiant'];
 $em=$r['email']??'';
 echo "<tr><td>$id</td><td>$nom</td><td>$em</td><td><a href='edit.php?id=$id'>Edit</a> | <a href='delete.php?id=$id'>Supp</a></td></tr>";
}
?>
</table>
</div>
</body></html>
