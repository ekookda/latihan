<?php
$cookie = (isset($_COOKIE['mycookie'])?$_COOKIE['mycookie']:false);
$tglCookie = (isset($_COOKIE['tglCookie'])?$_COOKIE['tglCookie']:false);

if (!$cookie) {
    header('Location: tugas1.php');
}

echo "Terima kasih $cookie atas kunjungannya kembali ke halaman ini. Anda terakhir mengunjungi halaman ini pada tanggal $tglCookie";

echo "<br>";
echo "<a href='logout.php'>Logout</a>";