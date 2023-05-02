<?php
$servername="localhost";
$username="root";
$password=" ";
$dbname="simplon";

try{
    $conn = new PDO("mysql:host$servername; dbname=$dbname", $username , $password);
    $conn->setAttribute(PDO: : ATTR_ERRMODE, PDO: : ERRMODE_EXCEPTION);
    //echo "la connexion a été bien établie";
}

catch (PDOException $e){
    echo "la connexion a échouée:" . $e->getMessage();
}
if (isset($_POST['enregistrer']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['dare_naissance'];
    

    $sql = (INSERT INTO `users`(`nom`, `prenom`, `date_naissance`) VALUES (:nom, :prenom, :date_naissance))
    $stwt = $conn->prepare($sql);

    $stwt->bindParam()
}






?>