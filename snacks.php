<?php
    // $partite = [
    //     [
    //         "casa" => [
    //             "nome" => "Olimpia Milano",
    //             "punteggio" => 76
    //         ],
    //         "ospite" => [
    //             "nome" => "New Basket Brindisi",
    //             "punteggio" => 82
    //         ]
    //     ],
    //     [
    //         "casa" => [
    //             "nome" => "Virtus Bologna",
    //             "punteggio" => 67
    //         ],
    //         "ospite" => [
    //             "nome" => "Varese",
    //             "punteggio" => 70
    //         ]
    //     ],
    //     [
    //         "casa" => [
    //             "nome" => "Trieste",
    //             "punteggio" => 85
    //         ],
    //         "ospite" => [
    //             "nome" => "Dinamo Sassari",
    //             "punteggio" => 86
    //         ]
    //     ],
    //     [
    //         "casa" => [
    //             "nome" => "Vanoli Cremona",
    //             "punteggio" => 63
    //         ],
    //         "ospite" => [
    //             "nome" => "Aquila Trento",
    //             "punteggio" => 70
    //         ]
    //     ],
    // ];
    $counter = null;
    $nameOutput = [
        "alert" => null,
        "value" => null
    ];
    if (isset($_GET["name"])) {
        $name = $_GET["name"];
        if (strlen($name) > 3) {
            $nameOutput["value"] = $name;
            $counter++;
        } else {
            $nameOutput["alert"] = "Inserisci un nome valido";
            $counter = 0;
        }
    }
    $mailOutput = [
        "alert" => null,
        "value" => null
    ];
    if (isset($_GET["mail"])) {
        $mail = $_GET["mail"];
        if (strpos($mail, ".") && strpos($mail, "@")) {
            $mailOutput["value"] = $mail;
            $counter++;
        } else {
            $mailOutput["alert"] = "Inserisci una mail valida";
            $counter = 0;
        }
    }
    $ageOutput = [
        "alert" => null,
        "value" => null
    ];
    if (isset($_GET["age"])) {
        $age = $_GET["age"];
        if (is_numeric($age)) {
            $ageOutput["value"] = $age;
            $counter++;
        } else {
            $ageOutput["alert"] = "Inserisci un'età valida";
            $counter = 0;
        }
    }
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
    <!-- <h2>Snack 1</h2>
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
    </ul> -->
    <h2>Snack 2</h2>
    <h3>Inserisci i tuoi dati</h3>
    <form action="snacks.php" method="get">
        <label for="name">Nome</label>
        <input id="name" type="text" name="name">
        <?php
        if ($nameOutput["value"]) {
            echo $nameOutput["value"];
        } else echo $nameOutput["alert"];
        ?>
        <br>
        <label for="mail">Email</label>
        <input id="mail" type="text" name="mail">
        <?php
        if ($mailOutput["value"]) {
            echo $mailOutput["value"];
        } else echo $mailOutput["alert"];
        ?>
        <br>
        <label for="age">Età</label>
        <input id="age" type="text" name="age">
        <?php
        if ($ageOutput["value"]) {
            echo $ageOutput["value"];
        } else echo $ageOutput["alert"];
        ?>
        <br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($counter == 3) echo "Accesso consentito";
    elseif ($counter === 0) echo "Accesso negato";
    ?>
</body>
</html>