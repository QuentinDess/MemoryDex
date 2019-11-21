<?php
include '../templates/header_File.php';
include '../security/security_gamer.php';
include '../db/read_highscore.php';
?>
<h1>Meilleurs Scores Perso</h1>
<table>
<thead>
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
<h1>Meilleurs Scores Multi</h1>
<table>
<thead>
    <tr>
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

</main>

