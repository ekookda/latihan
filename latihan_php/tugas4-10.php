<?php
$i = 1;

while ($i <= 10) {
    $j = 1;
    while ($j <= 10) {
        echo "$i x $j = " . $i * $j;
        echo "<br>";
        if ($j == 10) echo "<br>";
        $j++;
    }
    $i++;
}