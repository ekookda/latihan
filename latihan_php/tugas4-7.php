<!DOCTYPE>
<html>
<head>
    <title>Tugas 4 Modul 7</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Form Kategori Berdasar Usia</legend>
        <table>
            <tr>
                <td>Masukkan usia anda</td>
                <td>:</td>
                <td><input type="text" name="usia"></td>
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
    $usia = $_POST['usia'];

    $status = $objek->usia($usia);
    echo "Usia anda termasuk kategori ".$status;
endif;

?>
</body>
</html>
