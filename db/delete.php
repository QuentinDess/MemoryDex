<?php
include '../templates/header_File.php';
try {
// Connection à la DB
include 'dbconnexion.php';
// Requête de suppression des id de jeux 
$dbQuery1= "DELETE  FROM Game where id_Users =:id ";
$dbCheck1 = $dbConnection->prepare($dbQuery1);
$dbCheck1->bindParam(':id', $_POST['id']);
$dbCheck1->execute();
// Requête de suppréssion de l'user 
$dbQuery = "DELETE FROM Users WHERE id = :id";
// Préparation de la requête suppression
$dbCheck = $dbConnection->prepare($dbQuery);
// Exécuter la requête suppression avec la récupération des élements
$dbCheck->bindParam(':id', $_POST['id']);
$dbCheck->execute();
} catch (PDOException $e ) {
    echo "Erreur !: $e->getMessage()";
    die;
}

header('Location: ../admin/adminUser.php');