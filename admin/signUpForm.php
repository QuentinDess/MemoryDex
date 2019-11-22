<?php
include '../templates/header_File.php';
?>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<div class="container">
    <div class = "box">
        <div class ="test"> 
            <form method="POST" action="../db/create.php">
                <h1>Register to play</h1>
                <br>
                <i class='fas fa-door-open' style='font-size:155px;color:white'></i>
                <br>
                <br>
                <label for="name"></label>
                <input type="text" class="form-control" placeholder="Username" name="name" required>
                <br>
                <br>
                <label for="password"></label>
                <input type="password"  class="form-control" placeholder="Password" name="password" required>
                <br>
                <br>
                <input class="button2" type="submit" value="Bienvenue !">
            </form>
        </div>  
    </div>
</div>        
        
