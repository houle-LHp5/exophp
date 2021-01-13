<?php 
$myVariableOne = 100;
$myVariableTwo= 70;
$result;
while ($myVariableOne >= 10) {
    $result = $myVariableOne * $myVariableTwo;
    echo "$myVariableOne X $myVariableTwo = $result";
    $myVariableOne--;
break;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3 partie 3</title>
</head>
<body>

<p><?= $result ?></p>
</body>
</html>