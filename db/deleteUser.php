<?php
include '../templates/header_File.php';
// Mise à jour du USER 

// Récupère l'ID 
try {
// Connection with db
include 'dbconnexion.php';
// Envoyer la requête pour supprimer les id game 
$dbQuery1= "DELETE  FROM Game where id_Users =:id ";
$dbCheck1 = $dbConnection->prepare($dbQuery1);
$dbCheck1->bindParam(':id', $_POST['id']);
$dbCheck1->execute();
// ENvoyer la requête pour supprimer l'utilisateur
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