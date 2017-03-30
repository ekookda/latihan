<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
        <legend>Form Array Search</legend>
        <label for="bil">Masukkan bilangan yang akan dicari </label>
        <input type="text" name="bil"/>
        <input type="submit" name="btn-submit" value="Search">
    </fieldset>
</form>

<?php
$nilai = array(273, 281, 384, 119, 392, 184, 105, 129, 204, 219, 274, 275, 263);
if (isset($_GET['btn-submit'])) {
    $angka = $_GET['bil'];

    $message = '';
    for ($i = 0; $i < count($nilai); $i++) {
        if ($nilai[$i] == $angka) {
            $message = "Bilangan yang anda cari ada dalam data pada urutan ke - " . ($i + 1);
            break;
        } else {
            $message = "Bilangan yang anda cari tidak ada.";
        }
    }
    echo $message;
}