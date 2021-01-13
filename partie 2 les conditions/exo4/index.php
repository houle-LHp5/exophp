<?php 
$magnitude = rand(1, 9);
$result;

switch ($magnitude) {
    case 1:
        $result = "Micro-séïsme impossible à ressentir";
        break;
        
    case 2:
        $result = "Micro-séïsme impossible à ressentir mais enregistrable par les sisométre";
        break;
    
    case 3:
        $result = "Ne cause pas de dégats mais commmence à pouvoir être légérrement ressenti";
        break;

    case 4:
        $result = "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;

    case 5:
        $result = "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;

    case 6:
        $result = " Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.  ";
        break;

    case 7:
        $result = "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;

    case 8:
        $result = "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;

    case 9:
        $result = "Séisme capable de tout détruire sur une très vaste zone.";
        break;
    
    default:
        $result = "la random n'a pas marché";
        break;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4 partie 2</title>
</head>
<body>
    <p>Magnitude <?= $magnitude ?> : <?= $result ?></p>
</body>
</html>