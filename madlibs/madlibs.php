<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Madlibs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Madlibs</h1>
        <?php
        // Ta emot data som skickas
        $adjective = filter_input(INPUT_POST, 'adjective', FILTER_SANITIZE_STRING);
        $verbIng = filter_input(INPUT_POST, 'verbIng', FILTER_SANITIZE_STRING);
        $food = filter_input(INPUT_POST, 'food', FILTER_SANITIZE_STRING);
        $noun = filter_input(INPUT_POST, 'noun', FILTER_SANITIZE_STRING);
        $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
        $bodyPart = filter_input(INPUT_POST, 'bodyPart', FILTER_SANITIZE_STRING);

        // Innehåller variablerna text då skriver vi ut madlibs
        if ($adjective && $verbIng && $food && $noun && $number && $bodyPart) {
            // Ett lager av olika verb
            $verben = ["eat", "love", "walk", "run", "swim", "talk", "clean", "kill", "shoot", "sing", "read", "write"];

            // Skriv ut madlibs-texten
            echo "<p><strong>Mario:</strong> What a/an $adjective day, eh Luigi? The perfect day for $verbIng some Koopas. The $food Kingdom is crawling with them!</p>
            <p><strong>Luigi:</strong> You're right about that, dear $noun. I hope you're ready to " . $verben[rand(0, 11)] . ".</p>
            <p><strong>Mario:</strong> Ready? I've waited $number years to " . $verben[rand(0, 11)] . " that scoundrel Bowser!</p>
            <p><strong>Luigi:</strong> Pipe down. He has $bodyPart everywhere.</p>
            <p><strong>Mario:</strong> First, I'll " . $verben[rand(0, 11)] . " and grab a/an $food. That'll give me $noun.</p>";
        }
        ?>
    </div>
</body>
</html>