<?php
include '../templates/header_File.php';

try {
// Connexion à la DB
include 'dbconnexion.php';
// Requête de suppression des ID jeu
$dbQuery1= "DELETE  FROM Game where id_Users =:id ";
$dbCheck1 = $dbConnection->prepare($dbQuery1);
$dbCheck1->bindParam(':id', $_POST['id']);
$dbCheck1->execute();
// Requête de suppression de l'ID USER
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
