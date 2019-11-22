<?php
// Variable obligatoire de rôle
$userRole = 2;
// Initialiser une connexion à notre DB (DataBase)
include 'dbconnexion.php';
// Requête SQL
$db = "INSERT INTO Users(name, password, id_Roles) VALUES (:name, :password, :discriminant);";
// Prépare la connexion
$createUser = $dbConnection->prepare($db);
// Paramètres cachés
$createUser->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
$createUser->bindParam(":password", $_POST['password']);
$createUser->bindParam(":discriminant", $userRole);
// exécute la requête 
$createUser->execute();

// Redirection vers l'index une fois la requête 
header('Location: ../index.php');

