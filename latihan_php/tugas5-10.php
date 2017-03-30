<!DOCTYPE>
<html>
<head>
    <title>Tugas 4 Modul 9</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Form Loop Bintang</legend>
        <table>
            <tr>
                <td>Masukkan Jumlah Perulangan</td>
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
    $jml = $_POST['jml'];
    $n = 1;

    echo "<table>";
    while ($n <= $jml) {
        echo "<tr>";
        $j = 1;
        while ($j <= $n) {
            echo "<td>*</td>";
            $j++;
        }
        $n++;
        echo "</tr>";
    }
    echo "</table>";
endif;
?>
</body>
</html>