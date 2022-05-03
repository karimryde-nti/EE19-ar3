<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dog api</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Hundraser</h1>
        <p>Hämtat från <a href="https://dog.ceo/dog-api">dog.ceo/dog-api</a>.</p>
        <form action="#" method="post">
            <select name="ras">
                <?php
                // Hämta lista på alla raser se: https://dog.ceo/api/breeds/list/all
                $json = file_get_contents("https://dog.ceo/api/breeds/list/all");
                $jsonData = json_decode($json);
                $breeds = $jsonData->message;
                //var_dump($breeds);

                // Skriv ut varje ras som en <option value="...">...</option>
                foreach ($breeds as $key => $breed) {
                    echo "<option value=\"$key\">$key</option>";
                }
                ?>
            </select>
            <button>Hämta bild</button>
        </form>
        <main>
            <?php
            $ras = filter_input(INPUT_POST, "ras");

            // Hämta 6 slumpvalda hundar för vald ras se: https://dog.ceo/api/breed/hound/images/random/3
            $json = file_get_contents("https://dog.ceo/api/breed/$ras/images/random/6");
            $jsonData = json_decode($json);
            $imagesUrl = $jsonData->message;

            // Skriv ut alla bilder
            foreach ($imagesUrl as $imageUrl) {
                echo "<img src=\"$imageUrl\" alt=\"$ras\">";
            }
            ?>
        </main>
    </div>
</body>
</html>