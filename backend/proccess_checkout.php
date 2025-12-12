<?php
session_start();

$name    = $_POST['name'];
$address = $_POST['address'];
$phone   = $_POST['phone'];
$payment = $_POST['payment'];

$order = "ORDER:\nName: $name\nAddress: $address\nPhone: $phone\nPayment: $payment\n\n";

file_put_contents("orders.txt", $order, FILE_APPEND);

header("Location: /order/thankyou.html");
exit;
