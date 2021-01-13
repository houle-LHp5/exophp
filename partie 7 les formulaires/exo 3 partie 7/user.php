<?php
if(isset($_POST['nom'] )&& isset($_POST['prénom'])){
  if(preg_match("/^[a-zA-Z]+$/", $_POST['nom'])){
    $nom = htmlspecialchars($_POST["nom"]);
  }else{
    $messageError = 'veuillez renseigner correctement le champ';
  }
  if(preg_match("/^[a-zA-Z]+$/", $_POST['prénom'])){
    $prénom = htmlspecialchars($_POST["prénom"]);
    // la maniere de sécurisé le site internet par rapport aux informations saisi par les utilisateurs
  }else{
    $nom = 'non défini';
    $prénom = 'non défini';
}
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 3 partie 7</title>
</head>

<body>
    <p>Votre Nom est : <?php echo $_GET['nom'] ?></p>
    <p>Votre Prénom est : <?php echo $_GET['prénom'] ?></p>

</body>

</html>