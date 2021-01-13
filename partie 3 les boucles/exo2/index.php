<?php 
$numberOne = 0;
$numberTwo = 50;
$result;
while ($numberOne <= 20 ) {
    $result = $numberOne * $numberTwo;
    echo $result;
    $numberOne ++;
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2 partie 3</title>
</head>
<body>

<p><?= $result ?></p>
</body>
</html>