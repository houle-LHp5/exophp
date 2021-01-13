<!doctype html>
<html lang="fr">
  <head>
    <title>exercice 6 partie 9</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../exo 6/style.css">
  </head>
  <body>
  <div class="cardExoSix" style="width: 18rem">
  <div class="card-body">
    <h1 class="card-title">Nombre de jours dans le mois de février 2016</h1>
    <h2 class="card-subtitle mb-2 text-muted"></h2>
    <?php 
    $numberDaysFebuary = cal_days_in_month(CAL_GREGORIAN, 2, 2016); 
    echo "Il y a {$numberDaysFebuary} jours dans le mois de Février 2016";
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
  <!-- ficher le nombre de jour dans le mois de février de l'année 2016. -->