<?php
$serveur = "localhost";
$base = "gestion_etudiant";
$utilisateur = "root";
$motDePasse = "";
?>
<?php
try {
$connexion = new PDO( "mysql:host=$serveur;dbname=$base",
$utilisateur,
$motDePasse );
echo "Connexion réussie"; } 
catch (PDOException $e) {
echo "Erreur de connexion : " . $e->getMessage();
}
?>
