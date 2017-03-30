<!DOCTYPE>
<html>
<head>
    <title>Tugas 2 Modul 7</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Form Menghitung Gaji</legend>
        <table>
            <tr>
                <td>Masukkan jumlah jam kerja perminggu</td>
                <td>:</td>
                <td><input type="text" name="jamkerja"></td>
            </tr>
            <tr>
                <td>Golongan</td>
                <td>:</td>
                <td>
                    <select name="golongan">
                    <?php
                    $golongan = ['A','B','C','D'];
                    foreach ($golongan as $key) {
                        echo "<option name='".$key."'>".$key."</option>";
                    }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="btn-submit" value="HITUNG"></td>
            </tr>
        </table>
    </fieldset>
</form>

<?php
include 'Library.php';

$objek = new Library();

if (isset($_POST['btn-submit'])):
    $jamkerja = $_POST['jamkerja'];
    $golongan = $_POST['golongan'];

    $cekGaji  = $objek->gaji_golongan($jamkerja, $golongan);

    echo "Total Upah anda adalah Rp " . number_format($cekGaji, 0, '', '.');
endif;

?>
</body>
</html>
