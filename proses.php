<?php
$conn = new mysqli('localhost','root',123456,'titan');

$itemcode = $_GET['itemcode'];
$query    = "SELECT * FROM www_stock WHERE ItemCode='$itemcode'";
$exec     = $conn->query($query);
$fetch    = $exec->fetch_array();

$data = array(
    'desc'  => $fetch['Description'],
    'qty'   => $fetch['Quantity'],
    'price' => $fetch['Price']
);

$data_json = json_encode($data);
echo $data_json;
?>
