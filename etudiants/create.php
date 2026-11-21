<<<<<<< HEAD
<?php
require_once "../database/connexion.php";
if(isset($_POST['ajouter'])){
    $stmt = $conn->prepare("INSERT INTO etudiants (nom, prenom, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $_POST['nom'], $_POST['prenom'], $_POST['email']);
    $stmt->execute();
    header("Location: index.php");
    exit;
}
?>
<h2>Ajouter Etudiant</h2>
<form method="POST">
  Nom: <input type="text" name="nom" required><br><br>
  Prenom: <input type="text" name="prenom" required><br><br>
  Email: <input type="email" name="email" required><br><br>
  <button name="ajouter">Ajouter</button>
=======
<?php
include "../database/db.php";
if($_POST){
 $conn->query("INSERT INTO etudiants (nom,email,id_formation) VALUES ('".$_POST['nom']."','".$_POST['email']."',".$_POST['id_formation'].")");
 header("Location:index.php"); exit;
}
$forms=$conn->query("SELECT * FROM formations");
?>
<form method="post">
Nom: <input name="nom" required><br><br>
Email: <input name="email" required><br><br>
Formation: <select name="id_formation"><?php while($f=$forms->fetch_assoc()){ echo "<option value='".$f['id_formation']."'>".$f['nom_formation']."</option>"; }?></select><br><br>
<button>Ajouter</button>
>>>>>>> 7ced98b589590697d2914e67581b877138c5d773
</form>