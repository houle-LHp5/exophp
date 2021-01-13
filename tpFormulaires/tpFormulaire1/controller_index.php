<?php 

var_dump($_POST);

$errorMessage = [];

$regexNom = '/^[a-zA-Z]+$/';
$regexPrenom = '/^[a-zA-Z]+$/';
$regexBirthday = '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/';
$regexcityBirth = '/^[a-zA-Z]+$/';
$regexZipCode = '/[0-9]{5}/';
$regexCity = '^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$';
$regexAdressMail = "/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i";
$regexPhoneNumber = "#^0[1-9]([-. ]?[0-9]{2}){4}$#";
$regexPoleEmploiNumber = '(?i)^(?=.*[a-z])[a-z0-9]{8,20}$';
// $regexCodeAcademy = '(https?|ftp|ssh|mailto)://[a-z0-9/:%_+.,#?!@&=-]+';
$cityBirthArray = [
    1 => 'France',
    2 => 'Allemagne',
    3 => 'Espagne',
    4 => 'Mali',
    5 => 'Sénégal',
    6 => 'Japon',
    7 => 'Chine'
];

if (isset($_POST['valider'])) {

// nom
if (isset($_POST['nom'])) {
    if(!preg_match($regexNom, $_POST['nom'])){
        $errorMessage['nom'] = 'Veullez saisir un nom valide';
    }
    if(empty($_POST['nom'])){
        $errorMessage['nom'] = 'Veuillez saisir votre nom';
    }
}

// Prenom
if (isset($_POST['prenom'])) {
    if(!preg_match($regexPrenom, $_POST['prenom'])){
        $errorMessage['prenom'] = 'Veuillez saisir un prénom valide';
    }
    if(empty($_POST['prenom'])) {
        $errorMessage['prenom'] = 'Veuillez saisir votre prénom';
    }
}

// date de naissance
if (isset($_POST['birthday'])) {
      if (!preg_match($regexBirthday, $_POST['birthday'])) {
        $errorMessage['birthday'] = 'Veuillez saisir une date valide';
    }
    if(empty($_POST['birthday'])) {
        $errorMessage['birthday'] = 'Veuillez saisir votre date de naissance';
    }
}


// pays de naissance
if(!isset($_POST['cityBirth'])){
    $errorMessage['cityBirth'] = 'Veuillez selectionner votre pays de naissance';
}
if(isset($_POST['cityBirth'])){
    if(!array_key_exists($_POST['cityBirth'], $cityBirthArray)){
   }     $errorMessage['cityBirth'] = 'Veuillez selectionner un pays';
    }

if(isset($_POST['cityBirth'])){
     if (!preg_match($regexcityBirth, $_POST['cityBirth'])) {
    $errorMessage['cityBirth'] = 'Veuillez selectionner un pays valable';
    }
    if (empty($_POST['cityBirth'])) {
        $errorMessage['cityBirth'] = 'Veuillez selectionner votre pays de naissance';
   
    }
}

//adresse postale
if (isset($_POST['adress'])){
    if (empty($_POST['adress'])) {
        $errorMessage['adress'] = 'Veuillez saisir votre adresse postale';
}
}

// code postale
if(isset($_POST['zipCode'])){
    if (!preg_match($regexZipCode, $_POST['zipCode'])) {
    $errorMessage['zipCode'] = 'Veuillez saisir un code postale valable';
    }
    if (empty($_POST['zipCode'])) {
        $errorMessage['zipCode'] = 'Veuillez saisir votre code postale';
    }
}

// ville
if(isset($_POST['city'])){
     if (!preg_match($regexZipCode, $_POST['city'])) {
    $errorMessage['city'] = 'Veuillez saisir un nom de ville valable';
    }
    if (empty($_POST['city'])) {
        $errorMessage['city'] = 'Veuillez saisir votre ville';
  
    }
}

//Adresse E-mail
if(isset($_POST['adressMail'])){
    
    if (!filter_var($_POST['adressMail'], FILTER_VALIDATE_EMAIL)); {
        $errorMessage['adressMail'] = 'Veuillez saisir une adresse mail valide';
    }
    if (empty($_POST['adressMail'])) {
        $errorMessage['adressMail'] = 'Veuillez saisir votre addresse E-mail';
    }
}

// Numéro de pole emploi
if(isset($_POST['poleEmploiNumber'])){
    if (empty($_POST['poleEmploiNumber'])) {
        $errorMessage['poleEmploiNumber'] = "Veuillez saisir un numéro d'identifiant";
    }

    if (!preg_match($regexZipCode, $_POST['poleEmploiNumber'])) {
    $errorMessage['poleEmploiNumber'] = 'Veuillez saisir un identifiant valable';
    }
}

// Lien code Academy
if(isset($_POST['codeAcademy'])){
    if (!filter_var($_POST['codeAcademy'], FILTER_VALIDATE_URL)); {
        $errorMessage['codeAcademy'] = 'Veuillez saisir une adresse url valide';
    }

    if (empty($_POST['poleEmploiNumber'])) {
        $errorMessage['poleEmploiNumber'] = "Veuillez saisir un numéro d'identifiant";
    }
}

// question sur les Héros ou Héroîne
if(isset($_POST['heroinQuestion'])){
    if (empty($_POST['heroinQuestion'])) {
        $errorMessage['heroinQuestion'] = "Veuillez saisir une réponse";
    }
}

//question Hacks
if(isset($_POST['hacksQuestion'])){
    if (empty($_POST['hacksQuestion'])) {
        $errorMessage['hacksQuestion'] = "Veuillez saisir une réponse";
    }
}

// checkbox experience ne programmation et ou informatique OUI
if(!isset($_POST['radioQuestionExperience'])){
    $errorMessage['radioQuestionExperience'] = "Veuillez faire un choix";
}

var_dump($errorMessage);
}
?>