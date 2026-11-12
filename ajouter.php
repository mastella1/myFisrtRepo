<?php
require("connexion.php");
$sql="INSERT INTO etudiant(`nom`, `prenom`, `email`, `tel`,`filliere`,`centre`) VALUES
(?,?,?,?,?,?)";
$requete=$connexion->prepare($sql);
$requete->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tel'],$_POST['filliere'],$_POST['centre']));

echo "save sucess";
header("location:index.php");
exit();

