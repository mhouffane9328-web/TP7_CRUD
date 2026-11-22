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
</form>
