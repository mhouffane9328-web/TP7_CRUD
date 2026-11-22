<?php include "../database/db.php";
if(isset($_POST['add'])){
 $nom = $_POST['nom_module'];
 $id_f = $_POST['id_formation'];
 $sql = "INSERT INTO modules (nom_module, id_formation) VALUES ('$nom', '$id_f')";
 if(!$conn->query($sql)){
    $sql = "INSERT INTO modules (nom, id_formation) VALUES ('$nom', '$id_f')";
    $conn->query($sql);
 }
 header("Location: index.php");
}
?>
<h2>Ajouter Module</h2>
<form method="post">
Nom Module: <input type="text" name="nom_module" required><br><br>
Formation: 
<select name="id_formation">
<?php
$res=$conn->query("SELECT * FROM formations");
while($r=$res->fetch_assoc()){
 $idf = $r['id_formation'] ?? $r['id'];
 $nomf = $r['nom_formation'] ?? $r['nom'];
 echo "<option value='$idf'>$nomf</option>";
}
?>
</select><br><br>
<button name="add">Ajouter</button>
</form>
<?php include "../database/db.php";
if(isset($_POST['add'])){
 $nom = $_POST['nom_module'];
 $id_f = $_POST['id_formation'];
 $sql = "INSERT INTO modules (nom_module, id_formation) VALUES ('$nom', '$id_f')";
 if(!$conn->query($sql)){
    $sql = "INSERT INTO modules (nom, id_formation) VALUES ('$nom', '$id_f')";
    $conn->query($sql);
 }
 header("Location: index.php");
}
?>
<h2>Ajouter Module</h2>
<form method="post">
Nom Module: <input type="text" name="nom_module" required><br><br>
Formation: 
<select name="id_formation">
<?php
$res=$conn->query("SELECT * FROM formations");
while($r=$res->fetch_assoc()){
 $idf = $r['id_formation'] ?? $r['id'];
 $nomf = $r['nom_formation'] ?? $r['nom'];
 echo "<option value='$idf'>$nomf</option>";
}
?>
</select><br><br>
<button name="add">Ajouter</button>
</form>
<a href="index.php">Retour</a>
