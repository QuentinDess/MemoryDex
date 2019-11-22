<?php
// fonction qui gère la déconnexion de l'utilisateur appelé par le boutton de déconnexion
session_start();
session_destroy();

header('Location: ../index.php');
?>
