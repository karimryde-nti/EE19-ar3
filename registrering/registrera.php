<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloggen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>

        </nav>
        <main>
            <form action="registrera-db.php" method="post">
                <div class="row mb-3">
                    <label for="inputNamn" class="col-sm-2 col-form-label">Namn</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNamn" name="namn">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" name="email">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputLösenord" class="col-sm-2 col-form-label">Lösenord</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputLösenord" name="lösenord">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrera</button>
            </form>
        </main>
    </div>
</body>
</html>