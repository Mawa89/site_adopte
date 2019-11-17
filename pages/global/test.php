<?php 
require_once "pdo.php";
include("../commons/header.php");?>

<?php 
$bdd = connexionPDO();
$stmt = $bdd->prepare("SELECT * FROM animal");
$stmt->execute();
$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

echo "<pre>";
print_r($resultats);
?>

<?php include("../commons/footer.php"); ?>