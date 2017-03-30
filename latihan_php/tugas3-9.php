<?php
# Menampilkan daftar perkalian
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = ".$i*$j;
        echo "<br>";
        if ($j == 10) echo "<br>";
    }
}