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

  }}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 5 partie 7</title>
</head>
<body>
<form action="index.php" method="POST">
<select name="civility" id="civility">
    <option value="null" disabled selected>Veuillez choisir votre civilité</option>
    <option value="civility 1" >Mr</option>
    <option value="civility 2">Mme</option>
</select>
   <p><label>Nom : <input type="text" name="Nom" id="nom"/></label></p>
   <p><label>Prénom : <input type="text" name="Prénom" id="prénom"/></label></p>
   <p><input type="submit"/></p> 
 </form>
    
</body>
</html>