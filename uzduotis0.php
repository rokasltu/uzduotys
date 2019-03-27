<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daugybos lentele</title>
</head>
<h1></h1>
<body>
    <table border=1px>
        <?php for($i=1; $i<=10; $i++){
        echo '<tr>';
        for($j=1; $j<=10; $j++){
            $d=$i*$j;
        echo "<td>$d</td>";
    }
        echo '</tr>';
}?>
    </table>
    </body>
</html>
