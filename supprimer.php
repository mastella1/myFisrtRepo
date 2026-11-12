<?php 
require("connexion.php");
$id=$_GET['id'];
$sql="DELETE FROM etudiant WHERE id= $id";
$requete= $connexion->query($sql);
header("location:index.php");
exit();
?>

