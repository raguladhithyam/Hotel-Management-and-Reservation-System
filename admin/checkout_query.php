<?php
require_once 'connect.php';
date_default_timezone_set('Asia/Kolkata');
$time = date("H:i:s");
$conn->query("UPDATE `transaction` SET `checkout_time` = '$time', `status` = 'Check Out' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
header("location:checkout.php");

?>