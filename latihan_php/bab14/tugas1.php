<?php
if (isset($_COOKIE['mycookie'])) {
    header('Location: test.php');
}

include 'title.php'; 
?>

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
                        $message = (isset($_GET['message']) ? $_GET['message'] : false);
                        switch ($message) {
                            case 'error':
                                $pesan = '<span class="text-danger">Username atau Password salah</span>';
                                break;
                            case 'unlogin':
                                $pesan = '<span class="text-danger">Anda belum login</span>';
                        }
                        if (isset($pesan)) {
                            echo $pesan;
                        }
                        ?>
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
if (isset($_POST['btn-submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $user = $_POST['username'];
    $waktu= date("F j, Y, g:i a");;

    setcookie('mycookie', $user, time()+300);
    setcookie('tglCookie', $waktu, time()+300);
    
    header('Location: test.php');
}
