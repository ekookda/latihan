<?php
if (!isset($_COOKIE['mycookie'])) {
    header('Location: tugas2.php');
} else {
    $user = $_COOKIE['mycookie'];
    $tgl  = $_COOKIE['tglCookie'];

    setcookie('mycookie', '', time()-300);
    setcookie('tglCookie', '', time()-300);

    header('Location: tugas2.php');
}