<?php 
// On transforme les 2 dates en timestamp
$date1 = "16-05-2016";
$date2 = "06-01-2021";

$date3 = strtotime($date1);
$date4 = strtotime($date2);
 
// On récupère la différence de timestamp entre les 2 précédents
$nbJoursTimestamp = $date4 - $date3;
 
// ** Pour convertir le timestamp (exprimé en secondes) en jours **
// On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
$nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24
?>

<!doctype html>
<html lang="fr">
  <head>
    <title>exercice 5 partie 9</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../exo 5/style.css">
  </head>
  <body>
  <div class="cardExoFive" style="width: 18rem">
  <div class="card-body">
    <h1 class="card-title">Nombre de jours entre le 16 mai 2016 au 6 janvier 2021</h1>
    <h2 class="card-subtitle mb-2 text-muted"></h2>
    <?php
    echo "Nombre de jours : ".$nbJours;
    ?>
    <p class="card-text">
    <a href="#" class="card-link"></a>
    <a href="#" class="card-link"></a>
  </div>
</div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>