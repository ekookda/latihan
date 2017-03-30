<?php
$data = array(
    1001 => 'Sabun Lifebouy',
    1002 => 'Permen Blaster',
    1003 => 'Pasta Gigi Pepsodent',
    1004 => 'Madu Arbain',
    1005 => 'Kecap ABC',
    1006 => 'Saus Tomat ABC',
    1007 => 'Gula Gulaku',
    1008 => 'Rinso',
    1009 => 'Super Pel',
    1010 => 'Permen Tango'
);

$harga = array(
    1001 => 1500,
    1002 => 5600,
    1003 => 4560,
    1004 => 30000,
    1005 => 7250,
    1006 => 6700,
    1007 => 8900,
    1008 => 7100,
    1009 => 6450,
    1010 => 5600
);

?>
    <h3>Daftar Produk Barang</h3>
    <table border="1">
        <thead>
        <tr>
            <td>Kode Barang</td>
            <td>Nama Barang</td>
            <td>Harga Satuan</td>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $produk => $v) {
            echo "<tr>";
            echo "<td>$produk</td>";
            echo "<td>" . $v . "</td>";
            foreach ($harga as $kode => $hrg) {
                if ($kode == $produk) echo "<td>$hrg</td>";
            }
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <br>
    <hr>

    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <legend>Form Pembelian Barang</legend>
            <label for="brg">Masukkan banyaknya barang yang dibeli</label>
            <input type="text" name="jnsbrg">
            <input type="submit" name="btn-submit" value="Submit">
        </fieldset>
    </form>
    <hr>
<?php
if (isset($_POST['btn-submit'])) {
    $n = $_POST['jnsbrg'];

    echo "<hr>";
    echo "<form method='post'>";
    echo "<fieldset>";
    echo "<legend>Form Input Barang</legend>";
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<td>&nbsp;</td>";
    echo "<th>Kode Barang</th>";
    echo "<th>Jumlah Pembelian</th>";
    echo "</tr>";
    echo "</thead>";
    for ($x = 0; $x < $n; $x++) {
        echo "<tr>";
        echo "<td>Barang Ke-" . ($x + 1) . "</td>";
        echo "<td><input type='text' name='brg$x'></td>";
        echo " <td><input type='text' name='jml$x'></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<input type='hidden' name='jumlah' value='" . $n . "'>";
    echo "<input type='submit' name='hitung' value='HITUNG'>";
    echo "</fieldset>";
    echo "</form>";
    echo "<hr>";
}

# Proses
if (isset($_POST['hitung'])) {
    $n = $_POST['jumlah'];

    # ambil nilai dari form
    for ($i = 0; $i < $n; $i++) {
        $brg[$i] = $_POST['brg' . $i];
        $jml[$i] = $_POST['jml' . $i];
    }

    echo "<h3>Daftar Barang yang dibeli</h3>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>NO</th>";
    echo "<th>KODE BARANG</th>";
    echo "<th>NAMA BARANG</th>";
    echo "<th>JUM BRG</th>";
    echo "<th>HARGA</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $totalHarga = 0;
    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>$brg[$i]</td>";
        // menampilkan nama barang
        foreach ($data as $kode => $nama) {
            if ($brg[$i] == $kode) {
                echo "<td>$nama</td>";
            }
        }
        echo "<td>$jml[$i]</td>";

        # looping mencari harga sesuai kode
        foreach ($harga as $kode => $hrg) {
            if ($brg[$i] == $kode) {
                $jmlHarga = $hrg * $jml[$i];
                echo "<td>" . $jmlHarga . "</td>";
                $totalHarga += $jmlHarga;
            }
        }
        echo "</tr>";
    }
    echo "<tr><td colspan='5'>TOTAL HARGA : Rp. " . $totalHarga . ",-</td></tr>";
    echo "</tbody>";
    echo "</table>";
}