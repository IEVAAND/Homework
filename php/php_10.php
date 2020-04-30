<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP10</title>
</head>

<body>
<?php
function plotas($height, $width){
    $square = $height*$width;
    return $square;
}
    echo'Stačiakampio plotas '.plotas(10,15);
?>
</body>
</html>
