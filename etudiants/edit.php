<?php
require_once "../database/connexion.php";

// 1. Jib l ID, 7it mli kat-sifet formulaire kay-weli POST machi GET
$id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];

// 2. Ila clickiti 3la Modifier, bedel f base
if(isset($_POST['modifier'])){
    $stmt = $conn->prepare("UPDATE etudiants SET nom=?, prenom=?, email=? WHERE id_etudiant=?");
    $stmt->bind_param("sssi", $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['id']);
    $stmt->execute();
    header("Location: index.php");
    exit;
}

// 3. Jib les infos l 9dam bach y-banou f formulaire
$stmt = $conn->prepare("SELECT * FROM etudiants WHERE id_etudiant = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$e = $result->fetch_assoc();

if(!$e){
    die("Etudiant introuvable ! ID = " . $id);
}
?>
<h2>Modifier Etudiant</h2>
<form method="POST">
  <input type="hidden" name="id" value="<?= $e['id_etudiant'] ?>">
  Nom: <input type="text" name="nom" value="<?= $e['nom'] ?>"><br><br>
  Prenom: <input type="text" name="prenom" value="<?= $e['prenom'] ?>"><br><br>
  Email: <input type="email" name="email" value="<?= $e['email'] ?>"><br><br>
  <button name="modifier">Modifier</button>
</form>