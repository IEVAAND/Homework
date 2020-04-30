<?php
    $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];

$averageTemp = (array_sum($temp)/count($temp));
echo(round($averageTemp))."<br>";

sort($temp);
echo implode(', ',array_slice($temp,0,5)).'<br>';

rsort($temp);
echo implode(', ',array_slice($temp,0,5)).'<br>';

?>
