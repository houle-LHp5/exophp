<?php 
function threeParameters($firstName, $lastName, $age){
    return "Bonjour" . $firstName . " " . $lastName . " " . ",tu as" . $age . " " . "ans.";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 7 partie 4</title>
</head>
<body>
    <p><?= threeParameters("Touré", "houlé" , 33 )?></p>
</body>
</html>