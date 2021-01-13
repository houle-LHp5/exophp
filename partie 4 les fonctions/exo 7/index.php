<?php

function twoParameters($age, $gender){
    if ($age >= 18 && $gender == "homme"){
       return "Vous êtes un homme et vous êtes majeur";
    }elseif ($age <= 18  && $gender == "homme"){
        return "Vous êtes un homme et vous êtes mineur";

    }elseif ($age >= 18 && $gender == "femme"){
        return "Vous êtes une femme et vous êtes majeur";
     
    }else{
        return "Vous êtes un femme et vous êtes mineur";
    }
    };
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 7 partie 4</title>
</head>

<body>
    <p><?= twoParameters(19, "homme")?></p>
</body>

</html>