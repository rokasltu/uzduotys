<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uzduotis14</title>
</head>
    <body>

        <?php
        $puslapioSukurimoMetai = 2022;
        $data1 = new DateTime();
        $dabartiniaiMetai = $data1 -> format('Y');
        function spausdinti ($dabartiniaiMetai, $puslapioSukurimoMetai){
            if ($dabartiniaiMetai == $puslapioSukurimoMetai){
            echo '&copy', $dabartiniaiMetai;
            }
            if ($dabartiniaiMetai > $puslapioSukurimoMetai){
            echo '&copy', $puslapioSukurimoMetai, '-', $dabartiniaiMetai;
            }
            if ($dabartiniaiMetai < $puslapioSukurimoMetai){
            echo '&copy', $dabartiniaiMetai;

            }
        }
            echo spausdinti ($dabartiniaiMetai, $puslapioSukurimoMetai);
        ?>
    </body>
</html>
