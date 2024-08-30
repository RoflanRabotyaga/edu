<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Orders</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td, th{
            border: 2px solid gray;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php
include "../inc/config.inc.php";
$orders = getOrders();
$lines = file(ORDERS_LOG, FILE_IGNORE_NEW_LINES);
echo "<h1>Orders received: " . count($lines) . "</h1>";
?>
    <hr/>
    <a href="index.php">Back</a>
<?php
if(isset($_GET['del'])){
    unset($lines[$_GET['del']]);
    file_put_contents(ORDERS_LOG, implode(PHP_EOL, $lines));
        //unset($_GET['del']);
    header("Location: orders.php");
}

if (!$orders)
    echo "<p>Empty</p>";
else{
    $orderNumber = 0;
    foreach($orders as $order){?>
        <h2><b>Order # </b> <?= $order["orderid"] ?></h2>
        <p><b>Customer </b>: <?= $order["name"] ?></p>
        <p><b>Email </b>: <?= $order["email"] ?></p>
        <p><b>Phone number </b>: <?= $order["phone"] ?></p>
        <p><b>Address: </b> <?= $order["address"] ?></p>
        <p><b>Date of order </b>: <?= date('Y-m-d H:i',$order["date"]) ?></p>
        <p><b>Items ordered </b>:</p>
<?php
        echo "<table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year of publication</th>
            <th>Price, USD</th>
            <th>Quantity</th>
          </tr>";
        $allItems = $order["goods"];
        foreach($allItems as $item){
            ?>
            <tr>
                <td><?= $item['title']?></td>
                <td><?= $item['author']?></td>
                <td><?= $item['pubyear']?></td>
                <td><?= $item['price']?></td>
                <td><?= $item['quantity']?></td>
            </tr>
            <?php
            $sum += $item['price'] * $item['quantity'];
            $i++;
        }
        echo "</table><br/>";
        echo "Total price = " . $sum . " USD<br/>";
        echo '<a href="orders.php?del=' . $orderNumber . '">Mark as ordered and delete from the list</a>';
        $sum = 0;
        $orderNumber++;
        echo '<hr/>';
    }
}
?>
</body>
</html>
