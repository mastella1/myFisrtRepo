<?php
require("connexion.php");
$sql="SELECT * FROM etudiant";
$requete=$connexion->query($sql);
$requete-> fetch();

?>
