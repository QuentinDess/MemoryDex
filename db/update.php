<?php
session_start();
// Mise à jour du USER 

// READ des USERS dans un tableau avec association de la commande pour UPDATE ou DELETE 
$dbUser = 'root';
$dbPass = '000000';
// Connection with db
$dbConnection = new PDO('mysql:host=localhost;dbname=MemoryDex', $dbUser, $dbPass);
// Check username and password 
$dbQuery = "SELECT name, password FROM Users WHERE id = :id";

// Préparation de la requête 
$dbCheck = $dbConnection->prepare($dbQuery);
// Exécuter la requête 

$dbCheck->bindParam(':id', $_POST['id']);


$dbCheck->execute();
// Récupérer le résultat de la requête
$data = $dbCheck->fetch(PDO::FETCH_ASSOC);


?>

<form action="" method="POST"> 
    <label for="name"></label>
    <input type="text" name="name" value="<?php echo $data['name'] ?>" require>

    <label for="password"></label>
    <input type="password" name="password" value="<?php echo $data['password'] ?>" require>

    <input type="submit" value="Enregistrer">
</form>