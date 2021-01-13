<?php 
setcookie('user_name', 'houle@33');
setcookie('passeword', '1234abcd');

?>

<!doctype html>
<html lang="fr">
  <head>
    <title>exo 4 partie 8</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="../exo 4/style.css">
  </head>
  <body>

<div class="formulaire">
  <form action="index2.php">
  <div class="form-outline mb-4">
    <label class="form-label" for="form1Example1">Identifiant</label>
    <input type="text" id="form1Example1" class="form-control" name="Mot de passe" />
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form1Example2">Mot de passe</label>
    <input type="password" id="form1Example2" class="form-control" name="Mot de passe"/>
  </div>
    
  <button type="submit" class="btn btn-primary btn-block">Connection</button>
</form>
</div>


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