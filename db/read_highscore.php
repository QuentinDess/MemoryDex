<?php
session_start();
$dbUser="root";
$dbPass="000000";

$dbConnection = new PDO('mysql:host=localhost;dbname=MemoryDex', $dbUser, $dbPass);

$dbQuery = "SELECT score, name from Game, Users where Game.id_Users=Users.id and Users.id like :id_session_users order by score limit 10;";
$dbQuery2= "SELECT score, name from Game, Users where Game.id_Users=Users.id order by score limit 10;";


$dbHighScoreSolo = $dbConnection->prepare($dbQuery);
$dbHighScoreMulti= $dbConnection->prepare($dbQuery2);
$dbHighScoreSolo->bindParam(":id_session_users", $_SESSION['id']);
var_dump($_SESSION);
$dbHighScoreSolo->execute();
var_dump($dbHighScoreSolo);
var_dump($dbHighScoreMulti);
$dbHighScoreMulti->execute();
$dataSolo = $dbHighScoreSolo->fetchAll(PDO::FETCH_ASSOC);
var_dump($dataSolo);
$dataMulti = $dbHighScoreMulti->fetchAll(PDO::FETCH_ASSOC);

?>

