<?php

$dbUser="root";
$dbPass="000000";

$dbConnection = new PDO('mysql:host=localhost;dbname=MemoryDex', $dbUser, $dbPass);

$dbQuery = "SELECT score, name from Game, Users where Game.id_Users=Users.id and Users.id like'2' order by score limit 10;";
$dbQuery2= "SELECT score, name from Game, Users where Game.id_Users=Users.id order by score limit 10;";

$dbHighScoreSolo = $dbConnection->prepare($dbQuery);
$dbHighScoreMulti= $dbConnection->prepare($dbQuery2);

$dbHighScoreSolo->execute();
$dbHighScoreMulti->execute();
$dataSolo = $dbHighScoreSolo->fetchAll(PDO::FETCH_ASSOC);
$dataMulti = $dbHighScoreMulti->fetchAll(PDO::FETCH_ASSOC);
?>
