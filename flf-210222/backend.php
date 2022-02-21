<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spara highscore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Resultatet</h1>
        <?php
        // Ta emot data från formuläret och spara i variabler
        $namnet = filter_input(INPUT_POST, "namn");
        $mobilen = filter_input(INPUT_POST, "mobil");
        $hscoren = filter_input(INPUT_POST, "hscore");

        // Testar
        //var_dump($namnet, $mobilen, $hscoren);

        // Kontroll att highscoren är korrekt
        if ($hscoren <= 0 || $hscoren > 1000) {
            // Skriv ut ett error
            echo "<p class=\"alert alert-danger\">Fel! Fuska inte! Highscore måste vara större än 0 och mindre än 1000.</p>";
        } else {
            
            // Skriv ut ett fint svar
            echo "<p>$namnet din highscore är $hscoren.</p>";
            echo "<p>$namnet din mobil är $mobilen.</p>";
    
            // Spara ned allt i en textfil
            file_put_contents("highscore.txt", "$namnet:$hscoren\n", FILE_APPEND);

            // Bekräfta att highscoren sparats
            echo "<p class=\"alert alert-success\">Din highscore har sparats</p>";
        }
        
        ?>
    </div>
</body>
</html>