<?php 
$age = 25;
$gender = "femme";
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3 partie 2</title>
</head>
<body>
    <?php
    if($age >= 18 && $gender == "homme"){
        echo "vous êtes un homme et vous êtes majeur";
    }elseif($age < 18 && $gender == "homme"){
        echo " vous êtes un homme et vous êtes mineur";
    }elseif($age >= 18 && $gender == "femme"){
        echo "vous êtes une femme et vous êtes majeur";
    }else{
        echo "vous êtes une femme et vous êtes mineur";
    }      
    ?>
</body>
</html>