<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nätinställningar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Nätinställningar</h1>
        <?php
        // Ta emot data som skickas
        $ip = filter_input(INPUT_POST, 'ip', FILTER_SANITIZE_STRING);
        $subnetmask = filter_input(INPUT_POST, 'subnetmask', FILTER_SANITIZE_STRING);
        $gw = filter_input(INPUT_POST, 'gw', FILTER_SANITIZE_STRING);

        // Finns data?
        if ($ip && $subnetmask && $gw) {
            // Filnamnet
            $filnamn = "net.txt";

            // Texten att spara
            $texten = "ip: $ip\n";
            $texten .= "subnetmask: $subnetmask\n";
            $texten .= "gw: $gw";

            // Spara i textfil
            file_put_contents($filnamn, $texten);

            // Bekräftelse
            echo "<p class=\"alert alert-success\">Data har sparats!</p>";
        } else {
            echo "<p class=\"alert alert-warning\">Inget sparat!</p>";
        }
        ?>
    </div>
</body>
</html>