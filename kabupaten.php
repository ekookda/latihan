<?php 
    include "koneksi.php";
    // ambil propinsi_id
    $propinsi_id = $_GET['propinsi_id'];
    $query  = "SELECT * FROM kabupaten WHERE id_propinsi='$propinsi_id'";
    $sql    = $conn->query($query);
?>

<select id="kabupaten">
    <?php
    while ($row= $sql->fetch_assoc()):
        echo "<option value=\"$row[id_kabupaten]\">".$row['nama_kabupaten']."</option>";
    endwhile;
    ?>
</select>