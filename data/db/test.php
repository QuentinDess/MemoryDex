<?php

session_start();
//create d'une ligne dans la table GAME 
var_dump($_SESSION);
var_dump($_GET);
$dbUser = 'root';
$dbPass = '000000';
// Check connection
if (isset($_GET) && !empty ($_GET)) {
    if (isset($_GET["score"]) && !empty ($_GET["score"]) ) {
        // Connection with db
        
        $dbConnection1 = new PDO('mysql:host=localhost;dbname=MemoryDex', $dbUser, $dbPass);
        // Check username and password 
        $dbQuery = "INSERT INTO  Game(score, id_Users) values(:score, :id_session_users)";
        // Préparation de la requête 
        $dbInsertScore = $dbConnection1->prepare($dbQuery);
        $dbInsertScore->bindParam(":score", $_GET["score"]);
        $dbInsertScore->bindParam(":id_session_users", $_SESSION['id']);
       var_dump($dbInsertScore);
        // Exécuter la requête 
        $dbInsertScore->execute();
        header( 'Location: ../gamer/highscore.php');
     
 }};