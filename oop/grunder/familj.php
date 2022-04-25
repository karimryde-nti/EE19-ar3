<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Skapa en klass Familj
    // Med två egenskaper förnamn och efternamn
    class Familj {
        // Egenskaper
        public $förnamn = "";
        public $efternamn = "";

        // Konstruktor
        public function __construct($f, $e)
        {
            $this->förnamn = $f;
            $this->efternamn = $e;
        }
    }

    // Skapa 2 instanser av klassen Familj för 2 i din egen familj
    //$medlem1 = new Familj();
    //$medlem2 = new Familj();
    $medlem1 = new Familj("Kalle", "Andersson");
    //$medlem2 = new Familj();
    $medlem2 = new Familj("Julia", "Andersson");

    // Fyll i egenskaperna för de 2 instanserna
    //$medlem1->förnamn = "Karim";
    //$medlem1->efternamn = "Ryde";
    //$medlem2->förnamn = "Julie";
    //$medlem2->efternamn = "Sponar";

    ?>
</body>
</html>