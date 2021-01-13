<?php
function myNumbers($numberOne, $numberTwo){
    if($numberOne >= $numberTwo){
        return "Le premier nombre est plus grand";
    }elseif($numberOne <= $numberTwo){
        return  "Le pemier nombre est plus petit";
    }else{
        return "Les deux nombres sont identiques";
    }
};
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 4 partie 4</title>
</head>
<body>
    <p><?= myNumbers(25, 20) ?></p>
</body>
</html>