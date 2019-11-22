<?php

$userRole = 2;

// Initialiser une connexion à notre DB (DataBase)
include 'dbconnexion.php';
// Requête SQL
$db = "INSERT INTO Users(name, password, id_Roles) VALUES (:name, :password, :discriminant);";
// Préparation de la requête
$createUser = $dbConnection->prepare($db);
$createUser->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
$createUser->bindParam(":password", $_POST['password']);
$createUser->bindParam(":discriminant", $userRole);
// Exécution de la requête
$createUser->execute();
header('Location: ../index.php');

