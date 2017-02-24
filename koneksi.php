<?php
$conn = new mysqli('localhost','root','','propinsi');

if(!$conn):
    echo "Koneksi tidak berhasil";
endif;
?>