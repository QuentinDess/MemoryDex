<?php 
include '../templates/header_File.php';


// READ du USER dans un tableau avec association de la commande pour UPDATE ou DELETE 
$dbUser = 'root';
$dbPass = '000000';
// Connection with db
$dbConnection = new PDO('mysql:host=localhost;dbname=MemoryDex', $dbUser, $dbPass);
// Check username and password 
$dbQuery = "SELECT id, name, password FROM Users WHERE id = :id";
// Préparation de la requête 
$dbCheck = $dbConnection->prepare($dbQuery);
$dbCheck->bindParam(':id', $_SESSION['id']);
// Exécuter la requête 
$dbCheck->execute();
// Récupérer le résultat de la requête
$data = $dbCheck->fetch(PDO::FETCH_ASSOC);
// Table de présentation des informations de l'utilisateur 
?> 
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Password</th>
                <th colspan=2>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo $data['name'] ?> </td> 
                <td> <?php echo $data['password']  ?> </td> 
                <td>
                    <form action="../db/updateUser.php" Method="POST">
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="submit" value="Update">
                    </form>
                </td>
                <td>
                    <form action="../db/deleteUser.php" Method="POST">
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>   
            </tr>
        </tbody>
    </table>