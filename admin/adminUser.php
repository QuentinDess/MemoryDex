<?php 

session_start(); 

// Création USERS
try {
// READ des USERS dans un tableau avec association de la commande pour UPDATE ou DELETE 
$dbUser = 'root';
$dbPass = '000000';
// Connection with db
$dbConnection = new PDO('mysql:host=localhost;dbname=MemoryDex', $dbUser, $dbPass);
// Check username and password 
$dbQuery = "SELECT id, name, password, id_Roles FROM Users ORDER BY id ASC";
// Préparation de la requête 
$dbCheck = $dbConnection->prepare($dbQuery);


// Exécuter la requête 
$dbCheck->execute();
// Récupérer le résultat de la requête
$data = $dbCheck->fetchAll(PDO::FETCH_ASSOC);
// Inscrire le résultat dans un tableau 
} catch (PDOException $e ) {
    echo "Erreur !: $e->getMessage()";
    die;
}
?> 

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>password</th>
                <th>Rôle</th>
                <th colspan=2>Actions</th>
            </tr>
        </thead>
        <tbody>
        <!-- Pour chaque lignes du tableau $data : -->
                <?php foreach ($data as $key => $value) { ?>
            <tr>
                     <td> <?php echo($value['id']) ?> </td> 
                     <td> <?php echo($value['name']) ?> </td> 
                     <td> <?php echo(password_hash($value['password'], PASSWORD_DEFAULT)) ?> </td> 
                     <td> <?php if ($value['id_Roles'] == 1 ) {
                                    echo ('admin');
                                    }else {
                                    echo ('gamer');    
                                    };  ?>  
                    </td> 
                     <td><form action="../db/update.php" Method="POST">
                             <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                             <input type="submit" value="Update">
                         </form>
                     </td>
                     <td colspan=2>
                        <form action="../db/delete.php" Method="POST">
                            <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                            <input type="submit" value="Delete">
                        </form>
                     </td>
            </tr>
                <?php
                }
                ?>
        </tbody>
    </table>

    <a href="../gamer/game.php">Tu veux jouer?</a>