<?php
include "lib.inc.php";
const DB_HOST = 'localhost';
const DB_LOGIN = 'root';
const DB_PASSWORD = '$ionic11';
const DB_NAME = 'eshop';
const ORDERS_LOG = 'orders.log';

$basket = [];
$count = 0;

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error());

basketInit();
?>