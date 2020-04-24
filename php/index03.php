<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP03</title>
</head>

<body>
    <?php
        $x = 10;
        $y = 7;
        $z = ($x+$y);
        echo "$x + $y = $z <br>";

        $z = ($x-$y);
        echo "$x - $y = $z<br>";

        $z = ($x*$y);
        echo "$x * $y = $z<br>";

        $z = round($x/$y,2);
        echo "$x / $y = $z<br>";

        $z = ($x%$y);
        echo "$x % $y = $z<br>";
    ?>
</body>
</html>
