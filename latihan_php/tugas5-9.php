<?php
$minimum = 1;
$maksimum = 25;

for ($x = 1; $x <= $maksimum; $x++) {
    echo "<br>";
    for ($y = $minimum; $y <= $maksimum; $y++) {
        for ($z = $maksimum; $z >= $y; $z--) {
            if ($x + $y + $z == 25) {
                echo "x = $x, y = $y, z = $z";
                echo "<br>";
            }
        }
    }
}