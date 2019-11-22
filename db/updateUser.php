<?php
include '../templates/header_File.php';
include '../security/security_gamer.php';
// Mise à jour du USER par l'USER
try {
// Connection with db
include 'dbconnexion.php';
// Check username and password 
$dbQuery = "SELECT id, name, password FROM Users WHERE id = :id";

// Préparation de la requête 
$dbCheck = $dbConnection->prepare($dbQuery);
// Exécuter la requête 

$dbCheck->bindParam(':id', $_POST['id']);


$dbCheck->execute();
// Récupérer le résultat de la requête
$data = $dbCheck->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e ) {
    echo "Erreur !: $e->getMessage()";
    die;
}

?>
<div class="update_container">
<h2>Vous pouvez modifier vos login</h2>
<form  class="update_form" action="updateUser.php" method="POST"> 
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

    <label for="name">Nom</label>
    <input type="text" name="name" value="<?php echo $data['name'] ?>" require>

    <label for="password">Mot de passe</label>
    <input type="password" name="password" value="<?php echo $data['password'] ?>" require>

    <input class="update_input" type="submit" value="Enregistrer">
</form>
</div>
<?php

if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['password']) && !empty($_POST['password'])) {
    try {
        // Connexion à la DB
        include 'dbconnexion.php';
        // Requête SQL de changement de nom  
        $dbQuery = "UPDATE Users SET name = :name, password = :password WHERE id = :id";

        // Préparation de la requête 
        $dbCheck = $dbConnection->prepare($dbQuery);
        // Exécuter la requête 
        $dbCheck->bindParam(':id', $_POST['id']);
        $dbCheck->bindParam(':name', $_POST['name']);
        $dbCheck->bindParam(':password', $_POST['password']);
        $dbCheck->execute();
        // Récupérer le résultat de la requête
        $data = $dbCheck->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e ) {
        echo "Erreur !: $e->getMessage(erreur connexion db)";
        die;
    }
    
    header('location: ../gamer/crudGamer.php');
}