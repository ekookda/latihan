<?php
require_once 'core/init.php';

if (Input::get('submit')) {
    # validasi form
    // 1. memanggil objek validasi
    $validation = new Validation();

    // 2. method check
    $validation->check(array(
        'username' => array(
            'required' => true,
            'min' => 3,
            'max' => 50
        ),
        'password' => array(
            'required' => true,
            'min' => 8
        )
    ));

    // 3. validasi passed


    $user->register_user(array(
        'username' => Input::get('username'),
        'password' => password_hash(Input::get('password'), PASSWORD_DEFAULT)
    ));
}

require_once 'templates/header.php';
?>

<h2>Daftar disini</h2>

<form action="register.php" method="post">
    <table>
        <tr>
            <td><label for="">Username</label></td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="">Password</label></td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Daftar Sekarang"></td>
        </tr>
    </table>
</form>

<?php include_once 'templates/footer.php'; ?>
