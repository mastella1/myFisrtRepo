 <?php
 require("connexion.php");
 $sql= "SELECT nom, prenom, email, tel, filliere, centre FROM etudiant";
 $requete=$connexion->query($sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- <script src="bootstrap-5.3.8-dist/js/bootstrap.min.js"></script> -->
</head>
<body>
  <?php
 require("afficher.php");
 ?>
<div class="container">
  <div class="mb-3">
    <h1 class="text-center">Formulaire d'inscription</h1>
    <form action="ajouter.php" method="POST">
  <label for="exampleFormControlInput1" class="form-label">Entrez votre nom</label>
  <input type="text" class="form-control" name ="nom" placeholder="Nom">
  <label for="exampleFormControlInput1" class="form-label">Entrez votre prénom</label>
  <input type="text" class="form-control" name="prenom" placeholder=" Prénom">
  <label for="exampleFormControlInput1" class="form-label">Entrez votre email</label>
  <input type="email" class="form-control" name="email" placeholder=" Email">
  <label for="exampleFormControlInput1" class="form-label">Entrez votre téléphone</label>
  <input type="text" class="form-control" name="tel" placeholder=" Téléphone">
  <label for="exampleFormControlInput1" class="form-label">Entrez votre filière</label>
  <input type="text" class="form-control" name="filliere" placeholder=" Filière">
  <label for="exampleFormControlInput1" class="form-label">Entrez votre Centre</label>
  <input type="text" class="form-control" name="centre" placeholder=" Centre">
  <br>
  <input type="submit" values="envoyer">
  
</div>
<div><h2>la liste des etudiants</h2></div>
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">email</th>
      <th scope="col">tel</th>
      <th scope="col">filliere</th>
      <th scope="col">centre</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
<?php
foreach($requete as $reqt){
    echo "<tr>";
     echo "<td>{$reqt['id']}</td>";
    echo "<td>{$reqt['nom']}</td>";
    echo "<td>{$reqt['prenom']}</td>";
    echo "<td>{$reqt['email']}</td>";
    echo "<td>{$reqt['tel']}</td>";
    echo "<td>{$reqt['filliere']}</td>";
   echo "<td>{$reqt['centre']}</td>";
    echo "<td>
    
        <a href='modifier.php?id={$reqt['id']}' 
           class='btn btn-warning btn-sm'>Modifier</a>
        <a href='supprimer.php?id={$reqt['id']}' 
           class='btn btn-danger btn-sm'
           onclick='return confirm(\"Supprimer ?\")'>Supprimer</a>
           
            </td>";
    echo "</tr>";
  
}           
    ?>         
    
  </tbody>
</table>
</div>

</body>
</html>-