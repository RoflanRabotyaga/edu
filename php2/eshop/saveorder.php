<?php
    include "inc/config.inc.php";
    $name = strip_tags(trim($_POST['name']));
    $email = strip_tags(trim($_POST['email']));
    $phone = strip_tags(trim($_POST['phone']));
    $address = strip_tags(trim($_POST['address']));
    $basket =  unserialize(base64_decode($_COOKIE['basket']));
    $dt = time();
    $order = "$name|$email|$phone|$address|$basket[orderid]|$dt \n";
    $orders_log = "./admin/" . ORDERS_LOG;
    file_put_contents($orders_log, $order, FILE_APPEND);

    saveOrder($dt, $_POST['basket']);
    unset($_COOKIE['basket']);
    unset($basket);
?>
<span>You order accepted</span><br/><br/>
<a href="catalog.php">Return to catalog</a>

