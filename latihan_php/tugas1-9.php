<!DOCTYPE>
<html>
<head>
    <title>Tugas 1 Modul 9</title>
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
    for ($i=$jmlAnakAyam; $i>=$min; $i--) {
        if ($i > 1) {
            echo "<br>Anak ayam turun ".$i.", mati satu tinggal ".$jmlAnakAyam -= 1;
        } else {
            echo "<br>Anak ayam turun ".$i.", mati satu tinggal induknya";
        }
    }
endif;
?>
</body>
</html>