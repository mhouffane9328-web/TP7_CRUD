<?php
require_once "../database/connexion.php";

// 1. Jib l ID, 7it mli kat-sifet formulaire kay-weli POST
$id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];

// 2. Ila clickiti 3la Modifier, bedel f base
if(isset($_POST['modifier'])){
    $stmt = $conn->prepare("UPDATE modules SET nom_module=?, duree=?, description=? WHERE id_module=?");
    $stmt->bind_param("sssi", $_POST['nom_module'], $_POST['duree'], $_POST['description'], $_POST['id']);
    $stmt->execute();
    header("Location: index.php");
    exit;
}

// 3. Jib les infos l 9dam bach y-banou f formulaire
$stmt = $conn->prepare("SELECT * FROM modules WHERE id_module = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$m = $result->fetch_assoc();

if(!$m){
    die("Module introuvable ! ID = " . $id);
}
?>
<h2>Modifier Module</h2>
<form method="POST">
  <input type="hidden" name="id" value="<?= $m['id_module'] ?>">
  Nom Module: <input type="text" name="nom_module" value="<?= $m['nom_module'] ?>"><br><br>
  Durée: <input type="text" name="duree" value="<?= $m['duree'] ?>"><br><br>
  Description: <input type="text" name="description" value="<?= $m['description'] ?>"><br><br>
  <button name="modifier">Modifier</button>
</form>