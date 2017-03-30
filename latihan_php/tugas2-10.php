<!DOCTYPE>
<html>
<head>
    <title>Tugas 2 Modul 10</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Form Lagu Anak Ayam</legend>
        <table>
            <tr>
                <td>Masukkan jumlah anak ayam</td>
                <td>:</td>
                <td>
                    <input type="text" name="jml">
                    <input type="submit" name="btn-submit" value="Proses">
                </td>
            </tr>
        </table>
    </fieldset>
</form>

<?php
if (isset($_POST['btn-submit'])):
    $jmlAnakAyam = $_POST['jml'];
    $min = 1;

    echo "Anak ayam turun $jmlAnakAyam";
    while ($jmlAnakAyam >= $min) {
        if ($jmlAnakAyam == 1) {
            echo "<br>Anak ayam turun $jmlAnakAyam, mati satu tinggal induknya";
        } else {
            echo "<br>Anak ayam turun $jmlAnakAyam, mati satu tinggal ".($jmlAnakAyam-$min);
        }
        $jmlAnakAyam--;
    }
endif;
?>
</body>
</html>