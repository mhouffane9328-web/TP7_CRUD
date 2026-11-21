<?php
include "../database/db.php";
if(isset($_POST['nom'])){
 $nom = $_POST['nom'];
 $duree = $_POST['duree'];
 $desc = $_POST['desc'];
 $conn->query("INSERT INTO formations (nom_formation, duree, description) VALUES ('$nom', '$duree', '$desc')");
 header("Location: index.php");
 exit;
}
?>
<h2>Ajouter Formation</h2>
<form method="post">
Nom: <input name="nom" required><br><br>
Duree: <input name="duree"><br><br>
Description: <textarea name="desc"></textarea><br><br>
<button>Ajouter</button>
</form>
<a href="index.php">Retour</a>