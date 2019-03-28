<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uzduotis10</title>
</head>
    <body>
       <?php

        function staciakampioPlotas ($a, $b) {

            $square = $a * $b;
            return $square;
        }
        $plotas = staciakampioPlotas (15,20);
        echo $plotas;
        ?>
    </body>
</html>
