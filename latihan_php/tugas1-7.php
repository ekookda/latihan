<!DOCTYPE>
<html>
<head>
    <title>Tugas 1 Modul 7</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Form Mengecek Tahun Kabisat</legend>
        <table>
            <tr>
                <td>Masukkan angka tahun</td>
                <td>:</td>
                <td><input type="text" name="tahun"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btn-submit" value="Proses"></td>
            </tr>
        </table>
    </fieldset>
</form>

<?php
include 'Library.php';

$kabisat = new Library();

if (isset($_POST['btn-submit'])):
    $tahun = $_POST['tahun'];

    $cek = $kabisat->kabisat($tahun);
    echo $cek;
endif;

?>
</body>
</html>
