<?php 
// permet d'empêcher un utilisateur non connecté d'accéder à certaines pages
                if (!isset($_SESSION) or empty($_SESSION)){
                    header('Location: ../index.php');
                } 
             

?> 
