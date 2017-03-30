<!DOCTYPE>
<html>
<head>
    <title>Tugas 4 Modul 6</title>
</head>
<body>
<h1>Universitas X</h1>
<form method="post">
    <fieldset>
        <legend>Form Pendaftaran Online</legend>
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="namalkp"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tmptlahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <select name="tgl">
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    -
                    <select name="bln">
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    -
                    <select name="thn">
                        <?php
                        for ($i = 1970; $i <= 1990; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat Rumah</td>
                <td>:</td>
                <td><textarea name="alamat" cols="22" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="gender" value="Pria">&nbsp;Pria
                    <input type="radio" name="gender" value="Perempuan">&nbsp;Perempuan
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="asalsekolah"></td>
            </tr>
            <tr>
                <td>Nilai UAN</td>
                <td>:</td>
                <td><input type="text" name="nilaiuan"></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td>
                    <input type="submit" name="btn-submit" value="Submit">
                    <input type="reset">
                </td>
            </tr>
        </table>
    </fieldset>
</form>
<hr>
<?php
if (isset($_POST['btn-submit'])):
    $data = array(
        'Nama Lengkap' => $_POST['namalkp'],
        'Tempat Lahir' => $_POST['tmptlahir'],
        'Tanggal Lahir'=> $_POST['tgl']." - ".$_POST['bln']." - ".$_POST['thn'],
        'Alamat Rumah' => $_POST['alamat'],
        'Jenis Kelamin' => $_POST['gender'],
        'Asal Sekolah' => $_POST['asalsekolah'],
        'Nilai UAN' => $_POST['nilaiuan']
    );
    echo "Terima Kasih <strong>".ucwords($data['Nama Lengkap'])."</strong> sudah mengisi form pendaftaran.";
    echo "<br><br>";
    echo "<table>";
    foreach ($data as $key => $value) {
        echo "<tr>";
        echo "<td>$key</td>";
        echo "<td>:</td>";
        echo "<td>$value</td>";
        echo "</tr>";
    }
    echo "</table>";
endif;
?>
</body>
</html>