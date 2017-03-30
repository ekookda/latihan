<!DOCTYPE>
<html>
<head>
    <title>Tugas 3 Modul 10</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Form Menghitung Saldo Nasabah</legend>
        <table>
            <tr>
                <td>Masukkan Saldo Awal</td>
                <td>:</td>
                <td>
                    <input type="text" name="jmlsaldo">
                </td>
            </tr>
            <tr>
                <td>Jangka Waktu</td>
                <td>:</td>
                <td>
                    <input type="text" name="n">
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td><input type="submit" name="btn-submit" value="Proses"></td>
            </tr>
        </table>
    </fieldset>
</form>

<?php
if (isset($_POST['btn-submit'])):
    $jmlSaldo = $_POST['jmlsaldo'];
    $jangkaWaktu = $_POST['n'];
    $administrasi = 9000; // biaya administrasi perbulan selama $jangkaWaktu
    $n = 1;

    # menghitung jml saldo dikurangi biaya admin
    while ($n <= $jangkaWaktu) {
        $jmlSaldo -= $administrasi;
        $n++;
    }

    if ($jmlSaldo >= 1100000) {
        $saldoAkhir =  $jmlSaldo + ($jmlSaldo*4/100);
    } else {
        $saldoAkhir =  $jmlSaldo + ($jmlSaldo*3/100);
    }
    echo "Total saldo anda selama $jangkaWaktu bulan sebesar Rp " . number_format($saldoAkhir, 0, '', '.');
endif;
?>
</body>
</html>