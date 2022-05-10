<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokemon data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Pokéapi</h1>
        <form action="#" method="post">
            <select class="form-select" name="pokemon">
                <option selected>Välj en pokemon</option>
                <?php
                $url = "https://pokeapi.co/api/v2/pokemon";

                // Steg 1: hämta data
                $json = file_get_contents($url);

                // Steg 2. Avkoda JSON
                $dataJson = json_decode($json);

                // Steg 3: Plocka ut alla pokemon 20st
                $results = $dataJson->results;

                // Tugga igenom en array
                foreach ($results as $item) {
                    $name = $item->name;
                    echo "<option value=\"$name\">$name</option>";
                }
                ?>  
            </select>
            <button type="submit" class="btn btn-primary">Hitta</button>
        </form>
        <main>
            <h4>Resultat</h4>
            <?php
            // Ta emot data som skickas från formuläret
            $pokemon = filter_input(INPUT_POST, "pokemon");

            // Kontrollera att vi har data
            if ($pokemon) {
                $url = "https://pokeapi.co/api/v2/pokemon/$pokemon";

                // Steg 1: hämta data
                $json = file_get_contents($url);

                // Steg 2. Avkoda JSON
                $dataJson = json_decode($json);

                // Steg 3: Plocka ut en bild
                $front_shiny = $dataJson->sprites->front_shiny;

                echo "  <div class=\"alert alert-info\" role=\"alert\">
                            $pokemon <img src=\"$front_shiny \" alt=\"$pokemon\">
                        </div>";
            }
            ?>
        </main>
    </div>
</body>

</html>