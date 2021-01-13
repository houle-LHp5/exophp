<?php
var_dump($_GET);

if (isset($_GET['startDate'])) {
    $startDate = $_GET['startDate'];
}else {
    $startDate = 'Veuillez renseigner un paramétre de startDate';
}

if (isset($_GET['endDate'])) {
    $endDate = $_GET['endDate'];
}else {
    $endDate = 'Veuillez renseigner un paramétre de endDate';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>exo 3 partie 6</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container text-center">
        <a type="button" href="index.php?startDate=01/09/2019&endDate=17/03/2020"class="btn btn-primary mt-5">paramétre de Start Date et end Date</a>
           <a type="button" href="index.php" class="btn btn-danger mt-5 ">Retour index</a>
    </div>
    <p><?php echo $startDate ?></p>
    <p><?php echo $endDate ?></p>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
     integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>