<?php
// Visa alla fel
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Ladda in klassen
include "./Validator.php";
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Ett formulär</h1>

        <form action="#" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="username" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
            </div>
            <button type="submit" name="formulär" class="btn btn-primary">Skicka</button>
        </form>
        <main>
            <?php
            // Kolla att data skickats från formuläret
            if (isset($_POST['formulär'])) {
                
                // Använd klassen Validator
                $controll = new UserValidator($_POST);
                $controll->ValidateUsername();
                $controll->ValidateEmail();
            }
            ?>
        </main>
    </div>
</body>

</html>