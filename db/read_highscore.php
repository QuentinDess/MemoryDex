<?php
include 'dbconnexion.php';

$dbQuery = "SELECT score, name from Game, Users where Game.id_Users=Users.id and Users.id like :id_session_users order by score limit 10;";
$dbQuery2= "SELECT score, name from Game, Users where Game.id_Users=Users.id order by score limit 10;";


$dbHighScoreSolo = $dbConnection->prepare($dbQuery);
$dbHighScoreMulti= $dbConnection->prepare($dbQuery2);
$dbHighScoreSolo->bindParam(":id_session_users", $_SESSION['id']);

$dbHighScoreSolo->execute();

$dbHighScoreMulti->execute();
$dataSolo = $dbHighScoreSolo->fetchAll(PDO::FETCH_ASSOC);

$dataMulti = $dbHighScoreMulti->fetchAll(PDO::FETCH_ASSOC);

?>

