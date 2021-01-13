<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>

<body>
    <?php $name = 'houle'?>
    <p>Bonjour <?= $name ?> comment vas tu ? </p>
    <?php 
        echo ' Bonjour ' . $name . ' comment vas tu? </br> ';
    ?>

    <?php 
        echo "Bonjour $name comment vas tu? ";
    ?>

</body>

</html>