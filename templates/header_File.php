
    <?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    
<header>
    <nav>
        <ul>

                <?php 
                if ($_SESSION == true) {
                    if ($_SESSION['id_Roles'] == 1 ) {
                        ?> 
                        <li><a href="../admin/adminUser.php"> <?php echo $_SESSION['name']; ?> </a></li>
                        <?php
                    } else if ($_SESSION['id_Roles'] == 2) {
                        ?> 
                        <li><a href="../gamer/crudGamer.php"> <?php echo $_SESSION['name'];?> </a></li>
                        <?php
                    }
                }
                ?>
      
            <li>
                <form class="form-inline my-2 my-lg-0" action="../admin/signUpForm.php">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Signup</button>
                </form>
            </li>
        </ul>    
    </nav>
</header> 
   
 




  