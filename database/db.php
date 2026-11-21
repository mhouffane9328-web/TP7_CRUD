<?php
$conn = new mysqli("localhost", "root", "", "tp7_crud");
if ($conn->connect_error) {
    die("Erreur: " . $conn->connect_error);
}
?>