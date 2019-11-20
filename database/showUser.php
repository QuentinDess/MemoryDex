<?php
 
    /*try {
*/   
    $dbuser = 'root';
    $dbpassword = '000000';

    $dbConnection = new PDO('mysql:host=localhost;dbname=MemoryDex', $dbuser, $dbpassword);

    $sql = "SELECT * FROM Gamer";
    
    $allUsers = $dbConnection->prepare($sql);

    $allUsers->execute();

    $allUsers = $allUsers->fetch();

     /*       
        catch (PDOException $e) {
        echo "Erreur !: $e->getMessage()<br/>";
        die();
    }*/

var_dump($allUsers);

