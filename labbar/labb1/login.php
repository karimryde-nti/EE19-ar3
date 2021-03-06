<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Inloggning</h1>
        <?php
        // Ta emot data som skickas
        $anamn = filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
        $losen = filter_input(INPUT_POST, 'losen', FILTER_SANITIZE_STRING);

        // Snabbtest
        //echo "$anamn $losen";

        // Kolla om användarnamn och lösenord stämmer
        if ($anamn == "karim" && $losen == "12345") {
            echo "<p class=\"alert alert-success\">Bra, du är inloggad!</p>";
        } else {
            echo "<p class=\"alert alert-warning\">Fel användarnamn eller lösenord, vg försök igen!</p>";
        }

        ?>
    </div>
</body>
</html>