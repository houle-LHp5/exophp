<?php

// GALLERY

$folder_path = 'assets/img/';
$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);
$folder = opendir($folder_path);
 
if($num_files > 0){
while(false !== ($file = readdir($folder))){
    $file_path = $folder_path.$file;
    $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
    if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp'){
    ?><a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="200" /></a>
    
    <?php }}
} else {
 echo ""; }
closedir($folder);

// CLOSE GALLERY

$dossierCible = "assets/img/";
$uploadOk = 1;
if(isset($_FILES["fileToUpload"])){
  $fichierCible = $dossierCible . basename($_FILES["fileToUpload"]["name"]);
  $extansionImgage = strtolower(pathinfo($fichierCible,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "Votre fichier est une image." . $check["mime"] . ".";
    $uploadOk = 1;
    $check["mime"] . ($extansionImgage != "jpg" && $extansionImgage != "png" && $extansionImgage != "jpeg" && $extansionImgage != "gif" );
  } else {
    echo "Votre fichier n'est pas une image.";
    $uploadOk = 0;
  }
}

// Vérifier si le fichier existe déjà
if (file_exists($fichierCible)) {
  echo "Le fichier existe déjà.";
  $uploadOk = 0;
}

// Vérifier taille du fichier
if ($_FILES["fileToUpload"]["size"] > 1000000) {
  echo "La taille du fichier est au-dessus de la limite.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Votre fichier n'a pas été téléchargé.";
// Si tout est ok, télécharger l'image
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $fichierCible)) {
    echo "La photo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " a bien été téléchargé.";
  } else {
    echo "Il y a eu une erreur lors du téléchargement de l'image.";
  }
}
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,600;1,300&display=swap">
    <link rel="stylesheet" href="../exophp/tp-upload-master/assets/uploadPreview.css">
    <title>TP</title>
</head>
<body>

<div class="container-fluid">
  <div class="col-4 pb-5 d-flex justify-content-center">
<p class="choiceImg">Veuillez choisir une image :</p>
<form class="p-5" action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="hidden" name="maxSize" value="5000000">
    <button class="" type="submit" name="submit"><img class="logoUpload" src="assets/img"><span class="uploadBtn">UPLOAD</span></button>
    </form>

    <?php
    if(isset($_FILES["fileToUpload"]["name"])){
        ?>
        <p>Votre image <?= $_FILES["fileToUpload"]["name"] ?> a bien été téléchargée.</p>
        <img src="assets/img/<?= $_FILES["fileToUpload"]["name"] ?>" alt="">
    <?php
    }?>

  </div>
</div>


<script src="../exophp/tp-upload-master/assets/uploadPreview.js"></script>
</body>
</html>