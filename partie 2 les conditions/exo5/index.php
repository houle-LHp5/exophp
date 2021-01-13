<?php 
$gender = "homme";
$result;

if($gender != "homme"){
$result = "c'est une developpeuse !!!";
}else{
    $result = "c'est une developpeur !!!";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5 partie 2</title>
</head>
<body>
<p><?= $result ?></p>
    
</body>
</html>