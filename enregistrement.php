<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date_naissance=$_POST['date_naissance'];

include('connexion.php');
$reponse=$bdd->query("INSERT INTO `users`(`nom`, `prenom`, `date_naissance`) VALUES ('$nom','$prenom','$date_naissance')");
$reponse->closeCursor();

echo('Enregistrement effectué avec succès!');

?>