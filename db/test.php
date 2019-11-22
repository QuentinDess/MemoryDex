<?php

session_start();
//create d'une ligne dans la table GAME 

// Check connection
if (isset($_GET) && !empty ($_GET)) {
    if (isset($_GET["score"]) && !empty ($_GET["score"]) ) {
        // Connection with db
        
        include 'dbconnexion.php';
        // Check username and password 
        $dbQuery = "INSERT INTO  Game(score, id_Users) values(:score, :id_session_users)";
        // Préparation de la requête 
        $dbInsertScore = $dbConnection->prepare($dbQuery);
        $dbInsertScore->bindParam(":score", $_GET["score"]);
        $dbInsertScore->bindParam(":id_session_users", $_SESSION['id']);
       var_dump($dbInsertScore);
        // Exécuter la requête 
        $dbInsertScore->execute();
        header( 'Location: ../gamer/highscore.php');
     
 }};