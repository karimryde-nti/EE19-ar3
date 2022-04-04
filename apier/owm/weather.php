<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens väder enligt OWM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Vädret idag i Stockholm</h1>
        <?php
        // Api nyckel
        $appid = "22ee1d58f7adae08ee71fa7c0bd24481";

        // Angen staden vi söker vädret till
        $stad = "stockholm";

        // Address till tjänsten
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$stad&appid=$appid&units=metric&lang=sv";
        //echo "<p>$url</p>";

        // Anropa api:et
        $json = file_get_contents($url);
        //echo $json;

        // Avkoda json-svaret
        $data = json_decode($json);

        // Plocka ut data vi är intresserad av
        // "coord", "weather", "main", "wind"
        $coord = $data->coord;
        $weather = $data->weather;
        $main = $data->main;
        $wind = $data->wind;

        // Plocka isär "coord"
        $lon = $coord->lon; // $data->coord->lon;
        $lat = $coord->lat;

        // Plocka isär "main"
        $temp = $main->temp;

        // Plocka isär "wind"
        $speed = $wind->speed;

        // Plocka isär "weather", "ikonen"
        $description = $weather[0]->description;
        $icon = $weather[0]->icon;

        // Url för ikonen
        $bildUrl = "http://openweathermap.org/img/wn/$icon@2x.png";

        // Skriv ut allt
        echo "<p>Temperaturen just nu är $temp &deg;C</p>";
        echo "<p>Vindhastigheten är $speed m/s</p>";
        echo "<p>Vädret är \"$description\"</p>";
        echo "<img src=\"$bildUrl\">";
        ?>
    </div>
</body>
</html>