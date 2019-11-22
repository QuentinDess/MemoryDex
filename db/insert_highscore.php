<?php

include '../templates/header_File.php';
//create d'une ligne dans la table GAME 


if (isset($_GET) && !empty ($_GET)) {
    if (isset($_GET["score"]) && !empty ($_GET["score"]) ) {
        // appel fonction de connexion
        include 'dbconnexion.php';
        // Insertion du score dans la table Game
        $dbQuery = "INSERT INTO  Game(score, id_Users) values(:score, :id_session_users)";
         
        $dbInsertScore = $dbConnection->prepare($dbQuery);
        $dbInsertScore->bindParam(":score", $_GET["score"]);
        $dbInsertScore->bindParam(":id_session_users", $_SESSION['id']);
       var_dump($dbInsertScore);
        // Exécuter la requête 
        $dbInsertScore->execute();
        header( 'Location: ../gamer/highscore.php');
     
 }};
