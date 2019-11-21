<?php 
include '../templates/header_File.php';


// Création USERS

// READ des USERS dans un tableau avec association de la commande pour UPDATE ou DELETE 
$dbUser = 'root';
$dbPass = '000000';
// Connection with db
$dbConnection = new PDO('mysql:host=localhost;dbname=MemoryDex', $dbUser, $dbPass);
// Check username and password 
$dbQuery = "SELECT id, name, password, id_Roles FROM Users ORDER BY id ASC";
// Préparation de la requête 
$dbCheck = $dbConnection->prepare($dbQuery);
// Exécuter la requête 
$dbCheck->execute();
// Récupérer le résultat de la requête
$data = $dbCheck->fetchAll(PDO::FETCH_ASSOC);
// Inscrire le résultat dans un tableau 
?> 
<div class="container">
    <table id="table">
        <thead id="row" class="header-row">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>password</th>
                <th>Rôle</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <!-- Pour chaque lignes du tableau $data : -->
                <?php foreach ($data as $key => $value) { ?>
            <tr>
                     <td> <?php echo($value['id']) ?> </td> 
                     <td> <?php echo($value['name']) ?> </td> 
                     <td> <?php echo($value['password'])  ?> </td> 
                     <td> <?php echo($value['id_Roles'])  ?>  </td> 
            </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
    <button class="start_game button3" ><a href="../gamer/game.php">Play</a>
</div>