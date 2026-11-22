<?php
require_once "../database/connexion.php";
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM modules WHERE id_module = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: index.php");
exit;
?>
<?php require_once "../database/connexion.php"; $pdo->prepare("DELETE FROM modules WHERE id_module=?")->execute([$_GET['id']]); header("Location:index.php");
