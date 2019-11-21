<?php

include '../templates/header_File.php';
include '../security/security_admin.php';
?>
// Mise à jour du USER 

<form action="../db/update.php" method="POST"> 
    <label for="name"></label>
    <input type="text" placeholder="Nouveau pseudo" name="name" require>

    <label for="password"></label>
    <input type="password" placeholder="Nouveau mot de passe..." name="password" require>

    <input type="submit" value="Enregistrer">
</form>