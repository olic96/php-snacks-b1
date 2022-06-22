<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema => Olimpia Milano - Cantù | 55-60 -->

<?php

$matchs = [
    
    [
    'home'=> 'Olimpia Milano',
    'guest'=> 'Cantù',
    'home_score'=> 53,
    'guest_score'=>91,
    ],
    [
    'home'=> 'Dinamo Sassari',
    'guest'=> 'Virtus Bologna',
    'home_score'=> 45,
    'guest_score'=>80,
    ],
    [
    'home'=> 'Venezia',
    'guest'=> 'Brescia',
    'home_score'=> 55,
    'guest_score'=>60,
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            for ($i=0; $i < count($matchs); $i++) { 
                echo "{$matchs[$i]['home']} - {$matchs[$i]['guest']} | {$matchs[$i]['home_score']}-{$matchs[$i]['guest_score']}";
            }
        ?>
    </div>
</body>
</html>