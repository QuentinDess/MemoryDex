<?php
include '../templates/header_File.php';
include '../db/read_highscore.php';
?>

<div class ="container">
    <div class ="caption">
        <h1>Votre score</h1>
        <table id="table">
        <thead id="row" class="header-row">
            <tr>
                <th>Score</th>
                
            </tr>
        </thead>
        <tbody>
                <?php foreach ($dataSolo as $key => $value) { ?>
            <tr>
                    <td> <?php echo($value['score']) ?> </td> 
                    

            </tr>
                <?php
                }
                ?>
        </tbody>
        </table>
        <h1>Meilleurs scores</h1>
        <table id="table">
        <thead class ="header-row">
            <tr class=>
                <th>Pseudo</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($dataMulti as $key => $value) { ?>
            <tr>
                    <td> <?php echo($value['name']) ?> </td> 
                    <td> <?php echo($value['score']) ?> </td> 
                    

            </tr>
                <?php
                }
                ?>
        </tbody>
        </table>
        
    </div>    
    <button class="start_game button3" ><a href="../gamer/game.php">Play Again</a>
</div>

