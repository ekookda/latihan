<!DOCTYPE>
<html>
<head>
    <title>Tugas 5 Modul 8</title>
</head>
<body>

<form method="get">
    <table>
        <tr>
            <td>Pilih Bangun Datar</td>
            <td>:</td>
            <td>
                <select name="bangundatar">
                    <?php
                    $bangunDatar = array(
                        'persegi' => 'Bujur Sangkar', 'persegipanjang' => 'Persegi Panjang',
                        'lingkaran' => 'Lingkaran', 'segitiga' => 'Segitiga'
                    );
                    foreach ($bangunDatar as $k => $v) {
                        echo "<option value='" . $k . "'>$v</option>";
                    }
                    ?>
                </select>
            </td>
            <td><input type="submit" name="btn-submit" value="SUBMIT"></td>
        </tr>
    </table>
</form>
<hr>
<?php
if (isset($_GET['btn-submit'])):
    $select = $_GET['bangundatar'];

    echo "<h1>".$_GET['bangundatar']."</h1>";
    echo "<form method='post'>";
    echo "<table>";
    switch ($select) {
        case 'persegi':
            echo "<tr>";
            echo "<td>Masukan Nilai Sisi</td>";
            echo "<td>:</td>";
            echo "<td><input type='text' name='sisi'></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='2'></td><td><input name='btn-hitung' value='HITUNG' type='submit'></td>";
            echo "</tr>";
            break;
        case 'persegipanjang':
            echo "<tr>";
            echo "<td>Masukkan Nilai Panjang</td>";
            echo "<td>:</td>";
            echo "<td><input type='text' name='panjang'></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Masukkan Nilai Lebar</td>";
            echo "<td>:</td>";
            echo "<td><input type='text' name='lebar'></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='2'></td><td><input name='btn-hitung' value='HITUNG' type='submit'></td>";
            echo "</tr>";
            break;
        case 'segitiga':
            echo "<tr>";
            echo "<td>Masukkan Nilai Alas</td>";
            echo "<td>:</td>";
            echo "<td><input type='text' name='alas'></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Masukkan Nilai Tinggi</td>";
            echo "<td>:</td>";
            echo "<td><input type='text' name='tinggi'></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='2'></td><td><input name='btn-hitung' value='HITUNG' type='submit'></td>";
            echo "</tr>";
            break;
        case 'lingkaran':
            echo "<tr>";
            echo "<td>Masukkan Nilai Jari-jari</td>";
            echo "<td>:</td>";
            echo "<td><input type='text' name='jari'></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='2'></td><td><input name='btn-hitung' value='HITUNG' type='submit'></td>";
            echo "</tr>";
            break;
        default:
    }
    echo "</table>";
    echo "</form>";
endif;

# menghitung luas dari bangun datar yang dipilih
if (isset($_POST['btn-hitung'])):
    $select = $_GET['bangundatar'];

    # value persegi
    $sisi = (isset($_POST['sisi'])?$_POST['sisi']:false);

    # value persegi panjang
    $panjang= (isset($_POST['panjang'])?$_POST['panjang']:false);
    $lebar  = (isset($_POST['lebar'])?$_POST['lebar']:false);

    # value lingkaran
    $jari   = (isset($_POST['jari'])?$_POST['jari']:false);

    # value segitiga
    $alas   = (isset($_POST['alas'])?$_POST['alas']:false);
    $tinggi = (isset($_POST['tinggi'])?$_POST['tinggi']:false);

    switch ($select) {
        case 'persegi':
            $luas = $sisi*$sisi;
            break;
        case 'persegipanjang':
            $luas = $panjang * $lebar;
            break;
        case 'segitiga':
            $luas = 1/2*$alas*$tinggi;
            break;
        case 'lingkaran':
            $luas = pi()*$jari*$jari;
            break;
        default:
    }
    echo "Bangun datar yang dimasukkan adalah $select dengan luasnya $luas";
endif;
?>
</body>
</html>