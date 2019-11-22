<?php
include '../templates/header_File.php';
include '../security/security_gamer.php';
try {
// Connexion à la DB
include 'dbconnexion.php';
// Requête SQL
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
<!-- Formulaire pré-rempli des informations, enregistre systématiquement les informations -->
<div class="update_container">
<h2>Edit Login</h2>
<form  class="update_form" action="updateUser.php" method="POST"> 
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

    <label for="name">Username</label>
    <input type="text"  class="form-control" name="name" value="<?php echo $data['name'] ?>" require>

    <label for="password">Password</label>
    <input type="text"  class="form-control" name="password" value="<?php echo $data['password'] ?>" require>

    <input class="update_input alert-success" type="submit" value="Update">
</form>
</div>
<?php

if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['password']) && !empty($_POST['password'])) {
    try {
        // Connexion à la DB
        include 'dbconnexion.php';
        // Requête SQL
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
