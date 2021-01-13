<?php 
var_dump($_FILES);
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
    <title>exo 7 partie 7</title>
</head>

<body>
    <?php
if(isset($_FILES['nom'] )&& isset($_FILES['prénom']) && isset($_FILES['civility'])){
  $nom = $_FILES['nom'];
  $prénom = $_FILES['prénom'];
  $civility = $_FILES['civility'];
  $avatar = $_FILES['avatar'];
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
    </form>
    <form action="index.php" method="file" enctype="multipart/form-data">
        <label for="avatar"> choisir une image:</label>
        <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg,.doc">
    </form>

    <?php }
            if (!empty($civility) && !empty($nom) && !empty($prénom) && !empty($avatar)) {
            ?> <p>Bonjour <?= $civility ?> <?= $nom ?> <?= $prénom?> <?= $avatar?> </p>
    <?php
            } ?>
      <?php     
    if(isset($_FILES["avatar"])){
        ?>
    
            <p><?= $_FILES["avatar"]["name"] ?></p>
            <p><?= $_FILES["avatar"]["type"] ?></p>
            <?php
     }   
     ?>    
</body>

</html>