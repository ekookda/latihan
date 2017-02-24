<?php include_once 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Belajar AJAX</title>
</head>
<body>
    <select id="propinsi">
    <?php 
        $query  = "SELECT * FROM propinsi";
        $sql    = $conn->query($query);

        while ($row = $sql->fetch_assoc()):
            echo "<option value=\"$row[id_propinsi]\">".$row['nama_propinsi']."</option>";
        endwhile;
    ?>
    </select>

    <select id="kabupaten">
        <option>-- Pilih Propinsi --</option>
    </select>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#propinsi").change(function(){
                // ambil nilai propinsi_id dari select propinsi
                var propinsi_id = $("#propinsi").val();
                // AJAX
                $.ajax({
                    type:"GET",
                    url :"kabupaten.php", // panggil halaman yang berisi data kabupaten
                    data:"propinsi_id="+propinsi_id,
                    success:function(html) {
                        $("#kabupaten").html(html);
                    }
                });
            });
        });
    </script>
</body>
</html>