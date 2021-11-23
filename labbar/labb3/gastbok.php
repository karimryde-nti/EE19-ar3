<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästboken</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Gästboken</h1>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="gastbok.php">Skriva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lasa.php">Läsa</a>
            </li>
        </ul>
        <form class="kol2" action="spara.php" method="POST">
            <label>Ange rubrik</label>
            <input type="text" name="rubrik" required>
            <label>Ange meddelande</label>
            <textarea name="meddelande" required></textarea>
            <label>Ange ditt namn</label>
            <input type="text" name="namn" required>
            <button class="primary">Spara</button>
        </form>
    </div>
</body>
</html>