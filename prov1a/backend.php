<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skatteberäkning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Lön efter skatt</h1>
        <?php
        // Ta emot från f0ormuläret
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $bruttolön = filter_input(INPUT_POST, 'bruttolön', FILTER_SANITIZE_STRING);
        $skatt = filter_input(INPUT_POST, 'skatt', FILTER_SANITIZE_STRING);

        // Kolla att data finns
        if ($namn && $bruttolön && $skatt) {
            //var_dump($namn, $bruttolön, $skatt);

            // Om inte 10000 < bruttolön < 45000
            if ($bruttolön < 10000 || $bruttolön > 45000) {
                echo "<p>Bruttolönen måste ligga mellan 10000 och 45000</p>";
            } else {

                // Om inte 10 < skatt < 45
                if ($skatt < 10 || $skatt > 45) {
                    echo "<p>Skatt måste ligga mellan 10 och 45</p>";
                } else {
                    // Räkna ut lön efter skatt
                    $nettolön = $bruttolön * (100 - $skatt) / 100;

                    echo "<p>$namn, din lön efter skatt är $nettolön<br>
                    Beräkning baserat på bruttolön $bruttolön och skatt $skatt</p>";
                }
            }
        } else {
            echo "<p>Du skickade ingenting!</p>";
        }
        ?>
    </div>
</body>