<?php
include "konfigdb.php";
session_start();

// Om det inte finns en session betyder det att man inte är inloggad
if (!isset($_SESSION['inloggad'])) {
    $_SESSION['inloggad'] = false;
}
?>
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
    <?php
    if ($_SESSION['inloggad'] == true) {
        echo "<p class=\"alert alert-success\">Du är inloggad</p>";
    } else {
        echo "<p class=\"alert alert-warning\">Du är utloggad</p>";
    }
    ?>
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>
        <ul class="nav nav-tabs">
                <?php
                if ($_SESSION['inloggad'] == false) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./login.php">Logga in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registrera</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Logga ut</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <main>
            <form action="login.php" method="post">
                <h3>Logga in användare</h3>
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
                <button type="submit" class="btn btn-primary">Logga in</button>
            </form>
            <?php
            // Ta emot data från formuläret
            $email = filter_input(INPUT_POST, "email");
            $lösenord = filter_input(INPUT_POST, "lösenord");

            // Testa att det funkar
            //var_dump($email, $lösenord);

            // Kolla att det är INTE null
            if ($email && $lösenord) {

                // Kolla att användarnamnet eller email inte redan använts
                $sql = "SELECT * FROM register WHERE epost='$email'";

                // 2. Kör SQL-kommandot
                $resultat = $conn->query($sql);

                // 3. Gick det bra att köra SQL-satsen?
                if (!$resultat) {
                    die("<p class=\"alert alert-warning\">Någonting är fel med SQL-satsen!</p>");
                } else {
                    
                    // Plocka ut svaret och lägg det i arrayen $rad[]
                    $rad = $resultat->fetch_assoc();
                    //var_dump($rad);

                    // Kolla om lösenordet och hashen matchar
                    if (password_verify($lösenord, $rad['hash'])) {
                        echo "<p class=\"alert alert-success\">Du är inloggad</p>";

                        // Kom ihåg att vi lyckats logga in
                        $_SESSION['inloggad'] = true;

                        header("Location: admin.php");
                    } else {
                        echo "<p class=\"alert alert-warning\">Epost eller lösenordet stämmer inte</p>";
                    }
                }

            }
            ?>
        </main>
    </div>
</body>

</html>