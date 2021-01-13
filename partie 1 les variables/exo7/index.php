<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo7</title>
</head>
<body>
    
</body>

<?php $lastname = 'houle' ?>
<?php $firstname = 'TOURE' ?>
<?php $age = 33 ?>

<p>Bonjour <?= $lastname ?> <?= $firstname ?>, tu as <?= $age ?> ans. </p>

<?php 
echo ' Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . ' ans.</br>' ;
?>

<?php 
echo " Bonjour  $lastname  $firstname, tu as  $age  ans." ;
?>





</html>