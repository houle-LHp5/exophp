<?php
/**
 * fonction permettant d'afficher le total d'un nombre additionner 
 * @param integer $numberOne c'est le premier nombre par défaut 20
 * @param integer $numberTwo c'est le deuxiéme nombre par défaut 30
 * @param integer $numberThree c'est le troisiéme nombre par défaut 40
 * 
 * @return integer return le nombre additionnelle total
 */
function myNumber($numberOne = 20, $numberTwo = 30, $numberThree = 40){
    return $numberOne + $numberTwo + $numberThree;
};
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 8 partie 4</title>
</head>

<body>
<p><?= myNumber(6, 6, 6)?></p>
</body>

</html>