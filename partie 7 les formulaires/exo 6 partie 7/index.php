<?php 
$nom = "";
$prénom = "";
$civility = "";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 6 partie 7</title>
</head>

<body>
    <?php
if(isset($_POST['nom'] )&& isset($_POST['prénom']) && isset($_POST['civility'])){
  $nom = $_POST['nom'];
  $prénom = $_POST['prénom'];
  $civility = $_POST['civility'];
  }else{ 
?>

    <form action="index.php" method="POST">
        <select name="civility" id="civility">
            <option value="monsieur">Mr</option>
            <option value="madame">Mme</option>
        </select>
        <p><label>Nom : <input type="text" name="nom" /></label></p>
        <p><label>Prénom : <input type="text" name="prénom" /></label></p>
        <p><input type="submit" /></p>
    </form>

    <?php }
            if (!empty($nom) && !empty($prénom) && !empty($civility)) {
            ?> <p>Bonjour <?= $nom ?> <?= $prénom ?> <?= $civility?></p>
    <?php
            } ?>
</body>

</html>