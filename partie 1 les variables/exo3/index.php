<?php 
    $km = 1;
    echo $km;

    $km = 3;
    echo $km;

    $km = 125;
    echo $km;


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 3</title>
</head>
<body>
    <p> le kilometre est: <?= $km ?></p>
    
    <?php $km = 1 ?>
    <p><?= $km ?></p>

    <?php $km = 3 ?>
    <p><?= $km ?></p>

    <?php $km = 125 ?>
    <p><?= $km ?></p>

    
</body>
</html>