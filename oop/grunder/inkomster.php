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
    // Vi skall registrera hur mycket mina anställda ska få i lön denna månad
    // Skapa en klass PersonInkomst
    // Engenskaperna: förnamn, efternamn, timlön, antalTimmar
    class PersonInkomst {
        
        // Egenskaper
        public $förnamn = "";
        public $efternamn = "";
        public $timlön = 0;
        public $antalTimmar = 0;

        // Metoder
        public function SkrivUtLön() {
            $lön = $this->timlön * $this->antalTimmar;
            echo "<p>$this->förnamn $this->efternamn månadslön är $lön:-</p>";
        }
    }

    // Registrera två anställda
    $anställd1 = new PersonInkomst();
    $anställd1->förnamn = "Isam";
    $anställd1->efternamn = "Al-Bitar";
    $anställd1->timlön = 200;
    $anställd1->antalTimmar = 30;

    $anställd2 = new PersonInkomst();
    $anställd2->förnamn = "Luciano";
    $anställd2->förnamn = "Cucarano";
    $anställd2->timlön = 200;
    $anställd2->antalTimmar = 15;

    // Skriv ut lönerna
    $anställd1->SkrivUtLön();
    $anställd2->SkrivUtLön();
    ?>
</body>
</html>