<?php 
$firstname = 'brigitte';
$lastanme = 'BARDOT';
$age = 62;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exophp2</title>
</head>
<body>
    <p> Bonjour <?= $lastanme ?> <?= $firstname ?>, vous êtes agée de <?= $age ?></p>

    <ul>
        <li><?= $firstname ?></li>
        <li><?= $lastanme ?></li>
        <li><?= $age ?></li>
    </ul>


</body>
</html>