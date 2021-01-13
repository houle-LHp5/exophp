<?php
var_dump($_GET);

if (isset($_GET['lastname'])) {
    $lastname = $_GET['lastname'];
}else {
    $lastname = 'il manque le paramétre de lastname';
}

if (isset($_GET['firstname'])) {
    $firstname = $_GET['firstname'];
}else {
    $firstname = 'il manque le paramétre de firstname';
}

if (isset($_GET['age'])) {
    $age = $_GET['age'];
}else {
    $age = 'il manque le paramétre age';
}


?>

<!doctype html>
<html lang="en">
  <head>
    <title>exo 2 partie 6</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container text-center">
        <a type="button" href="index.php?lastname=Tutor&firstname=Janine&fruit=Banane"class="btn btn-primary mt-5">paramétre lastname et fistname</a>
        <a type="button" href="index.php?lastname=Tutor&firstname=Janine&fruit=Banane&age=18"class="btn btn-primary mt-5">Envoie des parametres âges</a>
        <a type="button" href="index.php" class="btn btn-danger mt-5 ">Retour index</a>
    </div>
    <p><?php echo $lastname ?></p>
    <p><?php echo $firstname ?></p>
    <p><?php echo $age ?></p>
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