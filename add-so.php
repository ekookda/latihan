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
    Item Code <input name="itemcode" type="text" onkeyup="autofill()" id="itemcode">
    <br>
    Description <input type="text" name="input" id="desc">
    <br>
    Quantity <input type="text" name="qty" id="qty">
    <br>
    Price <input type="text" name="price" id="price">
    <br>
    <input type="submit" name="btn-submit" value="Tambah">
</form>

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
<?php
if(isset($_SESSION['produk_item'])):
    $subtotal = 0;
    $total = 0;
    foreach ($_SESSION['produk_item'] as $v):
?> 
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
endif;
?>
        <tr>
            <td colspan="4">Total</td>
<?php $total = isset($total)?$total:FALSE; ?>
            <td><?php echo $total; ?></td>
        </tr>
    </tbody>
</table>
<a href="add-so.php?action=hapus">Hapus Data</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function autofill()
    {
        // ambil nilai dari form 
        var itemcode = $('#itemcode').val();
        
        // buat ajax
        $.ajax({
            //buat file untuk memproses query ke database
            url: 'proses.php',
            data:"itemcode="+itemcode, // membuat parameter URL untuk oper nilai itemcode
        }).success(function(data){
            var json = data,
            //ambil data dari database yg telah diparsing ke bentuk json
            obj = JSON.parse(json);
            // masukkan nilai parse json ke form berdasarkan id
            $('#desc').val(obj.desc);
            $('#qty').val(obj.qty);
            $('#price').val(obj.price);
        });
    }
</script>
