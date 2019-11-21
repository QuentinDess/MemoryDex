<?php 
                if (!isset($_SESSION) or empty($_SESSION)){
                    header('Location: ../index.php');
                } 
                else{       
                    if ($_SESSION['id_Roles'] == 2 ) {
                        header('Location: ../index.php');
                    };
                };

?> 