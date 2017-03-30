<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <fieldset>
        <legend>Form Array</legend>
        <label for="n">Masukkan Banyaknya Bilangan </label>
        <input type="text" name="n">
        <input type="submit" name="btn-submit" value="Submit">
    </fieldset>
</form>

<?php
if (isset($_POST['btn-submit'])) {
    $n = $_POST['n'];

    echo "<hr>";
    echo "<form method='post'>";
    for ($i = 0; $i < $n; $i++) {
        echo "<label for='bil$i'>Bil ke- " . ($i + 1) . " </label>";
        echo "<input type='text' name='bil$i'>";
        echo "<br>";
    }
    echo "<input type='hidden' name='n' value='$n' />";
    echo "<input type='submit' name='btn-proses' />";
    echo "</form>";
}

if (isset($_POST['btn-proses'])) {
    echo "<hr>";
    $n = $_POST['n'];

    // ambil value dari form
    for ($i = 0; $i < $n; $i++) {
        $bil[$i] = $_POST['bil' . $i];
    }

    $max = $bil[0];

    for ($i = 0; $i < $n; $i++) {
        if ($bil[$i] > $max) {
            $max = $bil[$i];
        } else {
            $min = $max;
        }
    }

    $jangkauan = $max - $min;

    echo "Nilai terkecil " . $min;
    echo "<br>";
    echo "Nilai terbesar " . $max;
    echo "<br>";
    echo "Jangkauan Nilainya adalah " . $jangkauan;
}