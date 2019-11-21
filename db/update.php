<?php
session_start();
// Mise à jour du USER 
var_dump($_POST);
var_dump($_SESSION);
?>

<form action="" method="POST"> 
    <label for="name"></label>
    <input type="text" placeholder="<?php $_POST['name']?> " name="name" require>

    <label for="password"></label>
    <input type="password" placeholder=" $_POST['password" name="password" require>

    <input type="submit" value="Se connecter">
</form>







