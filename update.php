<?php
require("connexion.php");
if (isset($_POST['btn'])) {
    $sql = "UPDATE etudiant SET nom=?, prenom=?, email=?, tel=?, filliere=?, centre=? WHERE id=?";
    $requete = $connexion->prepare($sql);
    $requete->execute([
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['tel'],
        $_POST['filliere'],
        $_POST['centre'],
        $_POST['id']
        
    ]);
    echo "Sauvegarde réussie !";
    header("Location: index.php");
    exit();
}
?>