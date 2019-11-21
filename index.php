<?php
include 'templates/header.php';
?>

<div class="container">
    <div class="box">
        
        <h1>Bienvenue dans le memoryDex...</h1>
        <p>Vivez une expérience comme jamais en partant à la chasse de votre personnage préféré</p>
        <form action="db/data.php" method="POST"> 
            <label for="name"></label>
            <input type="text" placeholder="Votre pseudo" name="name" require>

            <label for="password"></label>
            <input type="password" placeholder="Votre mot de passe..." name="password" require>
            <input class="button" type="submit" value="Jouer">

        </form>
              
         
    
    </div>
</div>

<!-- <div class="start_game">
    <img src="image/rules_pikachu.png">
</div> -->


    
</main>  
<!-- <script src="js/rules.js"></script> -->

       

  
</body>
</html>


