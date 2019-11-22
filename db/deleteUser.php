<?php
include '../templates/header_File.php';
try {
// Connexion à la DB
include 'dbconnexion.php';
// Envoyer la requête pour supprimer les id game 
$dbQuery1= "DELETE  FROM Game where id_Users =:id ";
$dbCheck1 = $dbConnection->prepare($dbQuery1);
$dbCheck1->bindParam(':id', $_POST['id']);
$dbCheck1->execute();
// Envoyer la requête pour supprimer l'ID User
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
