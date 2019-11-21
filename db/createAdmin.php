<?php
$dbuser = 'root';
$dbpass = '000000';

if ($_POST['userRole'] == 'gamer') {
    $_POST['userRole'] = 2;
} else {
    $_POST['userRole'] = 1;
}

// Initialiser une connexion à notre DB (DataBase)
$dbConnection = new PDO('mysql:host=localhost;dbname=MemoryDex', $dbuser, $dbpass);
/*echo password_hash($_POST['password'], PASSWORD_DEFAULT);*/
// $db = "INSERT INTO User(name, password) VALUES (':name', ':password')";
$db = "INSERT INTO Users(name, password, id_Roles) VALUES (:name, :password, :userRole);";

$createUser = $dbConnection->prepare($db);

$createUser->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
$createUser->bindParam(":password", $_POST['password']);
$createUser->bindParam(":userRole", $_POST['userRole']);


$createUser->execute();


header('Location: ../admin/adminUser.php');