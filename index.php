<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MemoryDex</title>
</head>
<body>

<header>
    <nav>
        <ul>
            <li>Test</li>
            <li>Test</li>
            <li>
                <?php 
                if ($_SESSION['id_Roles'] == 1 ) {
                        ?> 
                        <a href="admin/adminUser.php"> <?php echo $_SESSION['name']; ?> </a>
                        <?php
                    } else {
                        ?> 
                        <a href="gamer/crudGamer.php"> <?php echo $_SESSION['name'];?> </a>
                        <?php
                    }
                ?>
            </li>
        </ul>
    </nav>
</header>

<form action="db/data.php" method="POST"> 
    <label for="name"></label>
    <input type="text" placeholder="Votre pseudo" name="name" require>

    <label for="password"></label>
    <input type="password" placeholder="Votre mot de passe..." name="password" require>

    <input type="submit" value="Se connecter">
</form>
    
</body>
</html>

