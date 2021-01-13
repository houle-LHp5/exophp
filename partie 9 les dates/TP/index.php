<?php 
// Tableau des mois 
$monthsArray = [
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre'
];

// années de départ
$startIntYears = 2015;
// année de fin
$endIntYears = 2025;


if(isset($_GET["buttonCalendar"])){
$months = $_GET["selectedMonth"];
$years = $_GET["selectedYear"];

// il faut déterminer le premier jour du mois ex: le 1er janvier 2021 tombe un vendredi
// il faut calculer le nombre de jour dans le mois
// il faut calculer le nombre de case du calendrier ex: pour janvier 2021 il y a 35 case
// il faut dessiner un tableau avec le thead qui aura Lundi, Mardi, Mercredi, Jeudi, Vendredi

//afficher les mois et les années a l'ouverture de la page 
$numbresDays = cal_days_in_month(CAL_GREGORIAN, $months, $years);
$firstDay = strftime("%u", mktime(0, 0, 0, $months, 1, $years));

// sinon afficher le mois et l'année en cour
}else{
    $numbresDays = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
    $firstDay = strftime('%u', time());
}


?>
<!doctype html>
<html lang="fr">

<head>
    <title>TP partie 9 php</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../TP/style.css">
</head>

<body>
    <div class="cardCalendar" style="width: 35em;">
        <form action="index.php" method="GET">
            <div class="card-body">
                <h1>Calendrier 2015 - 2021</h1>

                <div id="selectedMonthsAndYears">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                        name="selectedMonth">
                        <option selected>Selectionner un mois</option>
                        <?php
                        // boucle pour parcourir un tableau 
                        foreach($monthsArray as $key => $value){?>
                        <option value="<?= $key ?>"><?= $value ?></option>
                        <?php } ?>
                    </select>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="selectedYear">
                        <option selected>Selectionner une année</option>
                        <?php 
                        for($startIntYears; $startIntYears <= $endIntYears; $startIntYears++){?>
                        <option><?= $startIntYears ?></option>
                        <?php } ?>
                    </select>
                </div>
                <input type="submit" value="Afficher" class="Displaybutton" name="buttonCalendar">
            </div>
        </form>
    </div>
    <table class="table table-bordered" id="calendarTable">
        <thead>
            <tr class="tableWeekDays">
                <th scope="col">Lundi</th>
                <th scope="col">Mardi</th>
                <th scope="col">Mercredi</th>
                <th scope="col">Jeudi</th>
                <th scope="col">Vendredi</th>
                <th scope="col">Samedi</th>
                <th scope="col">Dimanche</th>

            </tr>
        </thead>
        <tbody>

            <?php 
                $currentDay = 1;
                for ($case =1; $case <= ($numbresDays + $firstDay) -1; $case++){
                    if($case % 7 == 1){
                        ?>
            <tr>
                <?php
                    }
                    if($case >= $firstDay){
                        ?>
                <td>
                    <?= $currentDay ?>
                </td>
                <?php
                        $currentDay++;
                    }else{
                        ?>
                <td class="border border-white bg-secondary"></td>
                <?php
                    }
                    if($case % 7 == 0){
                        ?>
            </tr>
            <?php
                    }
                }
                ?>
        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>