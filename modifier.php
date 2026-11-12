<?php
require("connexion.php");
if(!isset($_GET["id"])){
}
$id = $_GET['id'];
$sql = "SELECT * FROM etudiant WHERE id=$id";
$requete = $connexion->query($sql);
$etudiant = $requete->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="mb-3">
    <h1 class="text-center">liste des inscriptions</h1>
    <form action="update.php" method="POST">
<input type="hideen" class="form-control" name ="id"  value="<?=$etudiant["id"]?>" require>
  <label for="exampleFormControlInput1" class="form-label"> nom</label>
  <input type="text" name ="nom" value="<?= htmlspecialchars($etudiant["nom"])?>" require>
  <label for="exampleFormControlInput1" class="form-label"> prénom</label>
  <input type="text" class="form-control" name="prenom"  value="<?= htmlspecialchars($etudiant["prenom"])?>" require>
  <label for="exampleFormControlInput1" class="form-label">email</label>
  <input type="email" class="form-control" name="email"  value="<?= htmlspecialchars($etudiant["email"])?>" require>
  <label for="exampleFormControlInput1" class="form-label"> téléphone</label>
  <input type="text" class="form-control" name="tel"  value="<?= htmlspecialchars($etudiant["tel"])?>" require>
  <label for="exampleFormControlInput1" class="form-label"> filière</label>
  <input type="text" class="form-control" name="filliere"  value="<?= htmlspecialchars($etudiant["filliere"])?>" require>
  <label for="exampleFormControlInput1" class="form-label"> Centre</label>
  <input type="text" class="form-control" name="centre"  value="<?= htmlspecialchars($etudiant["centre"])?>" require>
  <br>
  <input type="submit" values="envoyer" name="btn">
</body>
</html>


