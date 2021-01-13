<?php
 function concatNumberAndString($myString, $myNumber){
    return "je m'appel" . $myString . "j'ai" . $myNumber;
 }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 5 partie 4</title>
</head>
<body>
    <p><?= concatNumberAndString("houlé",19)?></p>
</body>
</html>