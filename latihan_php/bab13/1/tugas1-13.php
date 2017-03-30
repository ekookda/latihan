<?php include 'title.php'; ?>

    <!-- Content -->
    <hr>
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
            <h3 class="text-center">Silahkan Login</h3>
            <form class="form-horizontal" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="user">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user" placeholder="Enter username" name="username">
                        <?php
                        $message = (isset($_GET['message']) ? $_GET['message'] : FALSE);
                        switch ($message) {
                            case 'error':
                                $pesan = '<span class="text-danger">Username atau Password salah</span>';
                                break;
                            case 'unlogin':
                                $pesan = '<span class="text-danger">Anda belum login</span>';
                        }
                        if (isset($pesan))
                            echo $pesan;
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                               name="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-block" name="btn-submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php include 'footer.php'; ?>

<?php
# form proses login
if (isset($_POST['btn-submit'])) {
    session_start();

    $data = array(
        'A' => 'password1',
        'B' => 'password2',
        'C' => 'password3',
        'D' => 'password4',
        'E' => 'password5',
    );

    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach ($data as $user => $pass) {
        if ($username == $user && $password == $pass) {
            $_SESSION['username'] = $username;
            header('Location:link1.php');
            break;
        } else {
            header('Location: tugas1-13.php?message=error');
        }
    }


}
