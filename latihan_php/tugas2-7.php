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

    $gaji = $objek->honor($jamkerja);
    echo $gaji;
endif;

?>
</body>
</html>
