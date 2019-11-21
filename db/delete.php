<?php
include '../templates/header_File.php';
// Mise à jour du USER 

// Récupère l'ID 
try {
$dbUser = 'root';
$dbPass = '000000';
// Connection with db
$dbConnection = new PDO('mysql:host=localhost;dbname=MemoryDex', $dbUser, $dbPass);
// Check username and password 
$dbQuery = "SELECT id, name, password FROM Users WHERE id = :id";

// Préparation de la requête 
$dbCheck = $dbConnection->prepare($dbQuery);
// Exécuter la requête 

$dbCheck->bindParam(':id', $_POST['id']);


$dbCheck->execute();
// Récupérer le résultat de la requête
$data = $dbCheck->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e ) {
    echo "Erreur !: $e->getMessage()";
    die;
}

var_dump($data);


