<?php 
function concatString($firstName, $lastName){
       return $firstName . $lastName;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 3 partie 4</title>
</head>
<body>
    <div class="text-center jumbotron">
        <p><?= concatString('toto', 'tata')?>
        <p>
    </div>
</body>
</html>