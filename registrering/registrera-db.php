<?php
include "konfigdb.php";
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <?php
        // Ta emot data från formuläret
        $namn = filter_input(INPUT_POST, "namn");
        $email = filter_input(INPUT_POST, "email");
        $lösenord = filter_input(INPUT_POST, "lösenord");

        // Testa att det funkar
        //var_dump($namn, $email, $lösenord);

        // Kolla att det är INTE null
        if ($namn && $email && $lösenord) {

            // Lagra i databasen
            // 1. SQL-kommandot
            $sql = "INSERT INTO register (namn, epost, hash) VALUES ('$namn', '$email', '$lösenord')";

            // 2. Kör SQL-kommandot
            $resultat = $conn->query($sql);

            // 3. Funkade SQL-kommandot?
            if (!$resultat) {
                die("Någonting är fel med SQL-satsen!");
            } else {
                echo "<p>Användaren $namn är registrerad</p>";
            }
        }
        ?>
    </div>
</body>
</html>