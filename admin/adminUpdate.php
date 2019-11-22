<?php

include '../templates/header_File.php';

include '../security/security_admin.php';

?>
<!-- Mise à jour du USER -->

<form action="../db/update.php" method="POST"> 
    <h2>Edit Login</h2>
    <label for="name"></label>
    <input type="text" class="form-control" placeholder="Nouveau pseudo" name="name" require>

    <label for="password"></label>
    <input type="password" class="form-control" placeholder="Nouveau mot de passe..." name="password" require>

    <input type="submit" class="alert-success" value="Enregistrer">
</form>
