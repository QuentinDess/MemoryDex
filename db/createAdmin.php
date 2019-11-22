<?php

if ($_POST['userRole'] == 'gamer') {
    $_POST['userRole'] = 2;
} else {
    $_POST['userRole'] = 1;
}

// Initialiser une connexion à notre DB (DataBase)
include 'dbconnexion.php';
// Requête SQL
$db = "INSERT INTO Users(name, password, id_Roles) VALUES (:name, :password, :userRole);";
// Préparation de la requête 
$createUser = $dbConnection->prepare($db);
// Récupere les informations cachées
$createUser->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
$createUser->bindParam(":password", $_POST['password']);
$createUser->bindParam(":userRole", $_POST['userRole']);
// Exécute la requête 
$createUser->execute();


header('Location: ../admin/adminUser.php');