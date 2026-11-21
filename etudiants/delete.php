<?php
require_once "../database/connexion.php";
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM etudiants WHERE id_etudiant = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: index.php");
exit;
?>