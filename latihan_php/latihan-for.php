<?php
define('HR','<hr>');

# Menjumlahkan bilangan bulat antara 2 s/d 50
$jumlah = 0;
for ($i = 2; $i <= 50; $i++) {
    $jumlah += $i;
}
echo "Jumlah bilangan antara 2 s/d 50 adalah $jumlah";

echo HR;

# Mencari banyaknya bilangan bulat antara 3 s/d 127 yang merupakan kelipatan 6
$jumlah = 0;
for ($j = 3; $j <= 127; $j++) {
    if ($j % 6 == 0) {
        $jumlah++;
    }
}
echo "banyaknya bilangan bulat antara 3 s/d 127 yang merupakan kelipatan 6 adalah $jumlah";

echo HR;

# Membuat baris dan kolom dengan for
$jmlBaris = 3;
$jmlKolom = 2;
echo "<table border='1'>";
for ($i=1; $i<=$jmlBaris; $i++) {
    echo "<tr>";
    for ($j=1; $j<=$jmlKolom; $j++) {
        echo "<td>";
        echo "Baris $i Kolom $j";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo HR;

# Menampilkan angka tahun dengan for
echo "<select>";
for ($tahun = 1930; $tahun<=2008; $tahun++) {
    echo "<option>$tahun</option>";
}
echo "</select>";