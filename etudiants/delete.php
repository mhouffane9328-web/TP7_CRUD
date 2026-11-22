<?php
require_once "../database/connexion.php";
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM etudiants WHERE id_etudiant = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: index.php");
exit;
?>
<?php require_once "../database/connexion.php"; $pdo->prepare("DELETE FROM etudiants WHERE id_etudiant=?")->execute([$_GET['id']]); header("Location:index.php");
