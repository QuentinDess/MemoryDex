<?php
session_start();

$dbUser = 'root';
$dbPass = '000000';
// Check connection
if (isset($_POST) && !empty ($_POST)) {
    if (isset($_POST["name"]) && !empty ($_POST["name"]) && isset($_POST["password"]) && !empty($_POST["password"])) {
        // Connection with db
        $dbConnection = new PDO('mysql:host=localhost;dbname=MemoryDex', $dbUser, $dbPass);
        // Check username and password 
        $dbQuery = "SELECT * FROM Users WHERE Users.name = :name AND Users.password = :password";
        // Préparation de la requête 
        $dbCheck = $dbConnection->prepare($dbQuery);
        $dbCheck->bindParam(":name", $_POST['name'],  PDO::PARAM_STR);
        $dbCheck->bindParam(":password", $_POST['password']);
        // Exécuter la requête 
        $dbCheck->execute();
        // Récupérer le résultat de la requête
        $data = $dbCheck->fetch();
        // Vérifie la présence de la variable $data et débute la session
            if (isset($data) && !empty($data)) {
                $_SESSION['id'] = $data['id'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['id_Roles'] = $data['id_Roles'];
                    if ($_SESSION['id_Roles'] == 1) {
                        header('../admin/adminUser.php');
                    } else {
                        header('Location:../game.php');
                    }
            } else {
                header('Location: ../index.php'); 
            }   
        
    // header('Location:../game.php');
    } else {
        header('Location: ../index.php');
    }
} else {
    header('Location: ../index.php');
}
