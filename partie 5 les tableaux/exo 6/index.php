<?php 
$departments = [
    2 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme'
];
$departments [76] = "Seine-maritime";
var_dump($departments);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 6 parie 5</title>
</head>

<body>
    <p><?= $departments[76]?></p>
</body>

</html>

<!-- Exercice 6
Avec le tableau de l'exercice 5, afficher la valeur de l'index 76. -->