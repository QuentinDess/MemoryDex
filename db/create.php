<?php

$userRole = 2;

// Initialiser une connexion à notre DB (DataBase)
include 'dbconnexion.php';

 /*echo password_hash($_POST['password'], PASSWORD_DEFAULT);*/


// $db = "INSERT INTO User(name, password) VALUES (':name', ':password')";
$db = "INSERT INTO Users(name, password, id_Roles) VALUES (:name, :password, :discriminant);";


$createUser = $dbConnection->prepare($db);


$createUser->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
$createUser->bindParam(":password", $_POST['password']);
$createUser->bindParam(":discriminant", $userRole);


$createUser->execute();

// var_dump($createUser);die;

header('Location: ../index.php');

