<?php 
$nom = "";
$prénom = "";
$civility = "";
$avatar = "";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 8 partie 7</title>
</head>

<body>
    <?php
if(isset($_POST['nom'] )&& isset($_POST['prénom']) && isset($_POST['civility'])){
  $nom = $_POST['nom'];
  $prénom = $_POST['prénom'];
  $civility = $_POST['civility'];
  $avatar = $_POST['avatar'];
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
        <!-- champ d'envoi de fichier -->
        <label for="avatar"> choisir une image:</label>
        <input type="file" id="avatar" name="avatar" accept=".doc,.pdf">
    </form>

    <?php }
            if (!empty($civility) && !empty($nom) && !empty($prénom) && !empty($avatar)) {
            ?> <p>Bonjour <?= $civility ?> <?= $nom ?> <?= $prénom?> <?= $avatar?> </p>
    <?php
            } ?>
</body>

</html>