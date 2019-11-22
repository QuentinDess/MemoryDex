<?php 
//permet d'empêcher un utilisateur non connecté et donc le role n'est pas d'admin d'accéder au page ou ce code est include
                if (!isset($_SESSION) or empty($_SESSION)){
                    header('Location: ../index.php');
                } 
                else{       
                    if ($_SESSION['id_Roles'] == 2 ) {
                        header('Location: ../index.php');
                    };
                };

?> 
