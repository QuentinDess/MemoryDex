<?php
include '../templates/header_File.php';
// Mise à jour du USER 

// Récupère l'ID 
try {
$dbUser = 'root';
$dbPass = '';
// Connection with db
$dbConnection = new PDO('mysql:host=localhost;dbname=MemoryDex', $dbUser, $dbPass);
// Check username and password 
$dbQuery = "DELETE FROM Users WHERE id = :id";

// Préparation de la requête suppression
$dbCheck = $dbConnection->prepare($dbQuery);
// Récupere les informations cachées 
$dbCheck->bindParam(':id', $_POST['id']);
// Exécuter la requête suppression
$dbCheck->execute();
} catch (PDOException $e ) {
    echo "Erreur !: $e->getMessage()";
    die;
}
session_destroy();
header('Location: ../index.php');