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
$dbQuery = "DELETE FROM Users WHERE id = :id";

// Préparation de la requête suppression
$dbCheck = $dbConnection->prepare($dbQuery);
// Exécuter la requête suppresion
$dbCheck->bindParam(':id', $_POST['id']);


$dbCheck->execute();
} catch (PDOException $e ) {
    echo "Erreur !: $e->getMessage()";
    die;
}

header('Location: ../admin/adminUser.php');