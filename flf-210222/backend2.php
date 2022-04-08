<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultatet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Resultatet</h1>
        <?php
        // Ta emot data från formuläret och spara i variabler
        $texten = filter_input(INPUT_POST, "texten");
        $namnet = filter_input(INPUT_POST, "namnet");

        // Kontroll att texten är korrekt
        if (strlen($texten) <= 5) {
            // Skriv ut ett error
            echo "<p class=\"alert alert-danger\">Fel! Din text är för kort.</p>";
        } else {
    
            // Spara ned allt i en textfil
            file_put_contents("$namnet.txt", $texten);

            // Bekräfta att texten sparats
            echo "<p class=\"alert alert-success\">Din texten är sparad i $namnet.txt:</p>";
            echo "<pre class=\"alert alert-info\">$texten</pre>";
        }
        
        ?>
    </div>
</body>
</html>