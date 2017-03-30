<!DOCTYPE>
<html>
<head>
    <title>Tugas 3 Modul 7</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Form Menghitung Berat Badan Ideal</legend>
        <table>
            <tr>
                <td>Masukkan Tinggi Badan</td>
                <td>:</td>
                <td><input type="text" name="tinggi">&nbsp;cm</td>
            </tr>
            <tr>
                <td>Masukkan Berat Badan</td>
                <td>:</td>
                <td><input type="text" name="berat">&nbsp;kg</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="gender" value="Pria">&nbsp;Pria
                    <input type="radio" name="gender" value="Wanita">&nbsp;Wanita
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
    $tinggi = (!empty($_POST['tinggi']) ? $_POST['tinggi'] : FALSE);
    $berat = (!empty($_POST['berat']) ? $_POST['berat'] : FALSE);
    $gender = (isset($_POST['gender']) ? $_POST['gender'] : FALSE);

    $ideal = $objek->beratbadan($tinggi, $berat, $gender);

    if ($tinggi == NULL || $berat == NULL || !isset($gender)) {
        echo "Form tidak boleh kosong";
    } else {
        if ($berat < $ideal || $berat > ($ideal + 2)) {
            $message = "Berat anda tidak ideal <br> Berat ideal anda seharusnya adalah " . $ideal . " - " . ($ideal + 2) . " kg";
        } else {
            $message = "Berat anda ideal";
        }
        echo $message;
    }

endif;

?>
</body>
</html>
