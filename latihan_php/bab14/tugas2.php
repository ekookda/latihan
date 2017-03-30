<?php
if (isset($_COOKIE['mycookie'])) {
    header('Location:test.php');
}

$get = (isset($_GET['message'])?$_GET['message']:false);

?>
<form method = "post">
    <fieldset>
        <legend>Form Login</legend>
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username">
                    <?php if($get == 'error') echo "<span>Username atau Password salah</span>"; ?>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn-submit" value="SUBMIT"></td>
            </tr>
        </table>
    </fieldset>
</form>

<?php
if (isset($_POST['btn-submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $data_user = array(
        'A' => 'password1',
        'B' => 'password2',
        'C' => 'password3',
        'D' => 'password4',
        'E' => 'password5'
    );

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $tgl  = date("F j, Y, g:i a");
    
    foreach ($data_user as $username => $password) {
        if ($user == $username && $pass == $password) {
            setcookie('mycookie', $user, time()+300);
            setcookie('tglCookie', $tgl, time()+300);
            header('Location: test.php');
            break;
        } else {
            header('Location: tugas2.php?message=error');
        }
    }
}