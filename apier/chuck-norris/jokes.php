<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chuck Norris skämt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Dagens Chuck Norris skämt</h1>
        <?php
        // Address till tjänsten
        $url = "https://api.chucknorris.io/jokes/random";

        // Anrop till api:et
        $json = file_get_contents($url);

        // Avkoda json-svaret
        $data = json_decode($json);

        // Plocka ut skämtet, dvs "value"
        $skämt = $data->value;

        // Plocka ut bilden, dvs "icon_url"
        $bildUrl = $data->icon_url;

        // Skriv skämtet och bilden
        echo "<p>$skämt</p>";
        echo "<img src=\"$bildUrl\">";
        ?>
    </div>
</body>
</html>