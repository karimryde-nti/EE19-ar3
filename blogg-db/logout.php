<?php
include "konfigdb.php";
session_start();

// Om det inte finns en session betyder det att man inte är inloggad
if (!isset($_SESSION['inloggad'])) {
    $_SESSION['inloggad'] = false;

}
// Ajabaja! Skickas direkt till login.php
if ($_SESSION['inloggad'] == false) {
    header("Location: login.php");
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
                        <a class="nav-link" aria-current="page" href="./login.php">Logga in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registrera.php">Registrera</a>
                    </li>
                <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./logout.php">Logga ut</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <main>
            <?php
                $_SESSION['inloggad'] = false;
                //echo "<p class=\"alert alert-warning\">Du är utloggad!</p>";

                // Nu är användaren utloggad, skickas till inloggningssidan
                header("Location: login.php");
            ?>
        </main>
    </div>
</body>

</html>