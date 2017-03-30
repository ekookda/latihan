<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: tugas1-13.php?message=unlogin');
}

include 'title.php';

$link = ['link 1', 'link 2', 'link 3', 'logout'];

echo "<div class='text-center'>";
foreach ($link as $v) {
    echo "<a href='" . str_replace(' ', '', $v) . ".php'>" . ucfirst($v) . "</a>";
    if ($v != 'logout')
        echo " | ";
}
echo "<br>";
echo "<h1 class='text-center'>Ini adalah isi dari halaman Link 2</h1>";
echo "<br>";
echo "</div>";

include 'footer.php';
?>
