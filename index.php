<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
<title>Centre de Formation - TP7</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>🎓 Centre de Formation - TP7 CRUD</h1>
    <p class="subtitle">Projet Gestion Etudiants / Formations / Modules</p>
    
    <div class="cards">
        <div class="card">
            <h3>📚 Formations</h3>
            <p>Gerer les formations</p>
            <a href="formations/" class="btn btn-blue">Voir Formations</a>
        </div>
        <div class="card">
            <h3>👨‍🎓 Etudiants</h3>
            <p>Gerer les etudiants</p>
            <a href="etudiants/" class="btn btn-green">Voir Etudiants</a>
        </div>
        <div class="card">
            <h3>📖 Modules</h3>
            <p>Gerer les modules</p>
            <a href="modules/" class="btn btn-orange">Voir Modules</a>
        </div>
    </div>
</div>
</body>
</html>
=======
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
>>>>>>> 7ced98b589590697d2914e67581b877138c5d773
