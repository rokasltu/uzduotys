<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uzduotis13</title>
</head>
    <body>

        <?php
        class Zmogus{
            public $vardas;
            public $pavarde;
            public function labas (){
            return 'Sveiki ' . $this -> vardas . ' ' .$this -> pavarde. '<br>';
            }
        }

        $zmogus1 = new Zmogus ();
        $zmogus2 = new Zmogus ();

        $zmogus1 -> vardas = "Rokas";
        $zmogus1 -> pavarde = "Jucys";
        $zmogus2 -> vardas = "Jucys";
        $zmogus2 -> pavarde = "Rokas";


            echo $zmogus1 -> labas();
            echo $zmogus2 -> labas();

        ?>
    </body>
</html>
