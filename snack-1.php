<?php
    $partite = [
        [
            "casa" => [
                "nome" => "Olimpia Milano",
                "punteggio" => 76
            ],
            "ospite" => [
                "nome" => "New Basket Brindisi",
                "punteggio" => 82
            ]
        ],
        [
            "casa" => [
                "nome" => "Virtus Bologna",
                "punteggio" => 67
            ],
            "ospite" => [
                "nome" => "Varese",
                "punteggio" => 70
            ]
        ],
        [
            "casa" => [
                "nome" => "Trieste",
                "punteggio" => 85
            ],
            "ospite" => [
                "nome" => "Dinamo Sassari",
                "punteggio" => 86
            ]
        ],
        [
            "casa" => [
                "nome" => "Vanoli Cremona",
                "punteggio" => 63
            ],
            "ospite" => [
                "nome" => "Aquila Trento",
                "punteggio" => 70
            ]
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP snacks</title>
</head>
<body>
    <style>
        tr, td {border: 1px solid black;}
    </style>
    <h2>Snack 1</h2>
    <ul>
        <?php for ($i=0; $i < count($partite); $i++) { ?>
            <li>
                <h3>Partita <?php echo $i + 1 ?></h3>
                <table>
                    <tr>
                        <td>Casa</td>
                        <td>Ospite</td>
                    </tr>
                    <tr>
                        <td><?php echo $partite[$i]["casa"]["nome"] ?></td>
                        <td><?php echo $partite[$i]["ospite"]["nome"] ?></td>
                    </tr>
                    <tr>
                        <td><strong><?php echo $partite[$i]["casa"]["punteggio"] ?></strong></td>
                        <td><strong><?php echo $partite[$i]["ospite"]["punteggio"] ?></strong></td>
                    </tr>
                </table>
            </li>
        <?php } ?>
    </ul>
</body>
</html>