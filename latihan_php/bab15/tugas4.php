<?php
$data_siswa = array(
    'A001' => 'Agus',
    'A002' => 'Budi',
    'A003' => 'Amir',
    'A004' => 'Acong',
    'A005' => 'Siti'
);
?>

<form method="post">
    <fieldset>
        <legend>Form Input Nilai Siswa</legend>
        <table border='1'>
            <thead>
                <tr>
                    <th >NIS</th>
                    <th>Nama Siswa</th>
                    <th>Nilai Ujian 1</th>
                    <th>Nilai Ujian 2</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 0; foreach ($data_siswa as $kode => $nama) { ?>
                <tr>
                    <td><?=$kode; ?></td>
                    <td><?=$nama; ?></td>
                    <td><input type='text' name="<?='nilai'.$i; ?>"/></td>
                    <td><input type="text" name="<?='nilaiujian'.$i; ?>"></td>
                </tr>                           
            <?php $i++; } ?>
                <tr align="center">
                    <td colspan="3"><input type="hidden" name="n" value="<?=$i;?>"></td>
                    <td>
                        <input type='submit' name='btn-submit'>
                        <input type='reset' name='reset'>
                    </td>
                </tr>
            </tbody>
        </table>
    </fieldset>
</form>
<hr>

<?php
if (isset($_POST['btn-submit'])) {
    include 'library.php';
    $n = $_POST['n'];
    for ($i=0; $i < $n; $i++) { 
        $nilai[$i] = strip_tags($_POST['nilai'.$i]);
        $nUjian[$i]= strip_tags($_POST['nilaiujian'.$i]);
        $hasil[] = rata_nilai($nilai[$i], $nUjian[$i]);
    }

    array_multisort($hasil, SORT_DESC, $data_siswa);

    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>NIS</th>";
    echo "<th>Nama Siswa</th>";
    echo "<th>Nilai Rata</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $no = 0;
    foreach ($data_siswa as $nis => $nama) {
        echo "<tr>";
        echo "<td>".($no+1)."</td>";
        echo "<td>$nis</td>";
        echo "<td>$nama</td>";
        for ($x = $no; $x <= $no; $x++) {
            echo "<td>".$hasil[$x]."</td>";
        }
        echo "</tr>";
        $no++;
    }
    echo "</tbody>";
    echo "</table>";
}