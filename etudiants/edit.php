<?php
require_once "../database/connexion.php";

$id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];

if(isset($_POST['modifier'])){
    $stmt = $conn->prepare("UPDATE etudiants SET nom=?, prenom=?, email=? WHERE id_etudiant=?");
    $stmt->bind_param("sssi", $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['id']);
    $stmt->execute();
    header("Location: index.php");
    exit;
}

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
<?php require_once "../database/connexion.php"; $id=$_GET['id']; $forms=$pdo->query("SELECT * FROM formations")->fetchAll(); $q=$pdo->prepare("SELECT * FROM etudiants WHERE id_etudiant=?"); $q->execute([$id]); $d=$q->fetch();
if($_POST){ $pdo->prepare("UPDATE etudiants SET nom=?, email=?, id_formation=? WHERE id_etudiant=?")->execute([$_POST['nom'],$_POST['email'],$_POST['form']?:NULL,$id]); header("Location:index.php"); exit; }
?>
<form method="post"><h2>Modifier Étudiant</h2>Nom: <input name="nom" value="<?=$d['nom']?>"><br><br>Email: <input name="email" value="<?=$d['email']?>"><br><br>Formation: <select name="form"><option value="">-- Choisir --</option><?php foreach($forms as $f): ?><option value="<?=$f['id_formation']?>" <?=$f['id_formation']==$d['id_formation']?'selected':''?>><?=$f['nom_formation']?></option><?php endforeach; ?></select><br><br><button>Modifier</button></form>
