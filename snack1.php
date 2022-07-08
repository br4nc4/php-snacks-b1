<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
$squadreBasket = [
    [
        "squadraCasa" => "Los Angeles Lakers",
        "puntiSquadraCasa" => "78",
    ],
    [
        "squadraOspite" => "Golden State Warriors",
        "puntiSquadraOspite" => "80",
    ],
    [
        "squadraCasa" => "Miami Heat",
        "puntiSquadraCasa" => "45",
    ],
    [
        "squadraOspite" => "Boston Celtics",
        "puntiSquadraOspite" => "23",
    ],
    [
        "squadraCasa" => "New York Knicks",
        "puntiSquadraCasa" => "69",
    ],
    [
        "squadraOspite" => "Chicago Bulls",
        "puntiSquadraOspite" => "92",
    ],
    [
        "squadraCasa" => "Cleveland",
        "puntiSquadraCasa" => "51",
    ],
    [
        "squadraOspite" => "Milwaukee Bucks",
        "puntiSquadraOspite" => "54",
    ],
    [
        "squadraCasa" => "Brooklyn Nets",
        "puntiSquadraCasa" => "77",
    ],
    [
        "squadraOspite" => "Washington Wizards",
        "puntiSquadraOspite" => "76",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center text-success">SQUADRE BASKET</h1>
        <div class="d-flex">
            <!-- SQUADRE -->
            <ul class="list-unstyled">
                <?php 
                for ($i = 0; $i < count($squadreBasket); $i++) { 
                    $squadraCorrente = $squadreBasket[$i];
                ?>
                <li><?php echo $squadraCorrente["squadraCasa"]?></li>
                <?php } ?>
            </ul>

            <ul class="list-unstyled">
                <li>

                </li>
            </ul>
        </div>
    </div>
</body>
</html>
