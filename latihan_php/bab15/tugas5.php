<?php
$data = array(
    array('K01001', 'A', 20),
    array('K01002', 'B', 18),
    array('K03001', 'C', 12),
    array('K03002', 'D', 12),
    array('K03003', 'E', 10),
    array('K04001', 'F', 8),
    array('K04002', 'G', 11),
    array('K04003', 'H', 9),
    array('K04004', 'I', 7),
    array('K04005', 'J', 14)
);
?>

<table border='1'>
    <thead>
    <tr>
        <th>NIK</th>
        <th>Nama Karyawan</th>
        <th>Masa Kerja (tahun)</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i = 0; $i < count($data); $i++) { // row 
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) { // column
            echo "<td>" . $data[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    ?>
    </tbody>
</table>