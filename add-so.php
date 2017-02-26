<?php
session_start();

if(!empty($_GET['action'])): 
    $action = $_GET['action'];
    switch($action):
        case "add":
            if (empty($_POST['input']) || empty($_POST['qty']) || empty($_POST['price']) || empty($_POST['itemcode'])) {
                // Jika form masih kosong, notifikasi error
                header('Location:add-so.php?notif=error'); 
            } else {
                // Form sudah diisi semua
                $itemcode = $_POST['itemcode'];
                $descrips = $_POST['input'];
                $qty      = $_POST['qty'];
                $price    = $_POST['price'];
        
                // masukkan nilai form ke array
                $itemArray = array(
                    $itemcode => array(
                        'itemcode' => $itemcode,
                        'desc'     => $descrips,
                        'qty'      => $qty,
                        'price'    => $price
                    )
                );
    /*
        echo "<pre>";
        print_r($itemArray);
        echo "</pre>";
        echo $itemArray['kode']['itemcode'];
        die();
    */
                if (!empty($_SESSION['produk_item'])) {
                    // jika session produk sudah pernah disimpan
                    $_SESSION['produk_item'] = array_merge($_SESSION['produk_item'], $itemArray);
                } else {
                    // jika session produk belum ada
                    $_SESSION['produk_item'] = $itemArray;
                }
            }
        break;

        case "hapus":
            unset($_SESSION['produk_item']);
        break;
    endswitch;
endif;

/* Menu Form */

$notif = isset($_GET['notif'])?"Form tidak boleh kosong<hr>":FALSE;
echo $notif;

?>

<form method="post" action="add-so.php?action=add">
    Item Code <input name="itemcode" type="text">
    <br>
    Description <input type="text" name="input">
    <br>
    Quantity <input type="text" name="qty">
    <br>
    Price <input type="text" name="price">
    <br>
    <input type="submit" name="btn-submit" value="Tambah">
</form>

<?php
if(isset($_SESSION['produk_item'])):
    $subtotal = 0;
    $total = 0;
?>

<table border="1">
    <thead>
        <tr>
            <td>Item Code</td>
            <td>Description</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>Subtotal</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($_SESSION['produk_item'] as $v): ?> 
        <tr>
            <td><?php echo $v['itemcode']; ?></td>
            <td><?php echo $v['desc']; ?></td>
            <td><?php echo $v['qty']; ?></td>
            <td><?php echo $v['price']; ?></td>
            <td><?php echo $subtotal = $v['qty']*$v['price']; ?></td>
        </tr>
    <?php 
        $total += $subtotal;
    endforeach; 
    ?>
        <tr>
            <td colspan="4">Total</td>
            <td><?php echo $total; ?></td>
        </tr>
    </tbody>
</table>
<a href="add-so.php?action=hapus">Hapus Data</a>

<?php endif; ?>
