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
        <h1>Spara textmassa</h1>
        <p>Spara ned alla text i en fil "namn.txt"</p>
        <form action="backend2.php" method="POST">
            <label for="texten">Ange text</label>
            <textarea id="texten" class="form-control" name="texten" required></textarea>

            <label for="namnet">Ange namn</label>
            <input id="namnet" class="form-control" type="text" name="namnet" required>

            <button type="submit" class="btn btn-primary">Spara</button>
        </form>
    </div>
</body>

</html>