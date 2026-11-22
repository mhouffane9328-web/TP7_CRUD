<?php
require_once "../database/connexion.php";
$id = $_GET['id'];

$q = $conn->prepare("SELECT * FROM formations WHERE id_formation=?");
$q->bind_param("i", $id);
$q->execute();
$d = $q->get_result()->fetch_assoc();

if($_POST){
    $stmt = $conn->prepare("UPDATE formations SET nom_formation=?, duree=?, description=? WHERE id_formation=?");
    $stmt->bind_param("sssi", $_POST['nom'], $_POST['duree'], $_POST['desc'], $id);
    $stmt->execute();
    header("Location:index.php");
    exit;
}
?>
<form method="post">
<h2>Modifier</h2>
Nom: <input name="nom" value="<?=$d['nom_formation']?>"><br><br>
Durée: <input name="duree" value="<?=$d['duree']?>"><br><br>
Description: <textarea name="desc"><?=$d['description']?></textarea><br><br>
<button>Modifier</button>
</form>
<?php require_once "../database/connexion.php"; $id=$_GET['id']; $q=$pdo->prepare("SELECT * FROM formations WHERE id_formation=?"); $q->execute([$id]); $d=$q->fetch();
if($_POST){ $pdo->prepare("UPDATE formations SET nom_formation=?, duree=?, description=? WHERE id_formation=?")->execute([$_POST['nom'],$_POST['duree'],$_POST['desc'],$id]); header("Location:index.php"); exit; }
?>
<form method="post"><h2>Modifier</h2>Nom: <input name="nom" value="<?=$d['nom_formation']?>"><br><br>Durée: <input name="duree" value="<?=$d['duree']?>"><br><br>Description: <textarea name="desc"><?=$d['description']?></textarea><br><br><button>Modifier</button></form>
