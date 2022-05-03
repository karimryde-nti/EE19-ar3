<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spara i klippboken</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Pastebin</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="index.php">Spara</a></li>
                <li class="nav-item"><a class="nav-link" href="lista.php">Lista</a></li>
            </ul>
        </nav>
        <main>
            <form action="#" method="post">
                <label>Pinkod</label>
                <input type="text" name="pinkod" required>
                <label>Namn</label>
                <input type="text" name="namn" required>
                <label>Texten</label>
                <textarea name="texten" required></textarea>
                <button class="btn btn-primary">Spara</button>
            </form>
            <?php
            // Ta emot data som skickas från formuläret
            $pinkod = filter_input(INPUT_POST, 'pinkod', FILTER_SANITIZE_STRING);
            $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
            $texten = filter_input(INPUT_POST, 'texten', FILTER_SANITIZE_STRING);

            // Om data finns spara ned i textfil
            if ($pinkod && $namn && $texten) {

                // Om pinkoden är korrekt då sparas det ner
                if ($pinkod == "123") {

                    // Datum
                    $datum = strftime("%H:%M %A %d %B");

                    $content = "<p>". $datum . "<br>" . $texten . "<br>" . $namn . "</p>";
                    //$content = "<p>$texten<br>$namn</p>";
                    
                    // Spara ned namn och texten i en texfil
                    file_put_contents("pastebin.txt", $content, FILE_APPEND);
                }
            }
            ?>
        </main>
    </div>
</body>
</html>