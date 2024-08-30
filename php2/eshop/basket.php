<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Basket</title>
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
<h1>Your basket</h1>
<hr/>
<?php

    global $allItems;
    global $basket;

    include "inc/config.inc.php";
    if(!myBasket())
        echo "Basket is empty, return to <a href='catalog.php'>catalog</a>";
    else {
        echo "Return to <a href='catalog.php'>catalog</a>";
        if(!isset($_POST['allItems']))
             $allItems = myBasket();
        else
            $allItems = unserialize(base64_decode($_POST['allItems']));

        $i = 1;
        $sum = 0;

        echo "<table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year of publication</th>
            <th>Price, USD</th>
            <th>Quantity</th>
            <th>Delete</th>
          </tr>";
        $allItems[$_POST['quantity_id']]['quantity'] = $_POST['quantity'];
        $quantity_id = 0;

        unset($allItems[""]);

        foreach($allItems as $item){
            ?>
            <tr>
                <td><?= $item['title']?></td>
                <td><?= $item['author']?></td>
                <td><?= $item['pubyear']?></td>
                <td><?= $item['price']?></td>
                <td><form method="post" action=""><input type="number" min="1" name="quantity" id="quantity" value="<?= $item['quantity']?>" style="width: 35px"><input type="hidden" name="quantity_id" id="quantity_id" value="<?=$quantity_id?>"><input type="hidden" name="allItems" id="allItems" value="<?=base64_encode(serialize($allItems))?>"><input type="submit" value="set"></form></td>
                <td><a href="delete_from_basket.php?id=<?=$item['id']?>">Delete from basket</a></td>
            </tr>
            <?php
            $sum += $item['price'] * $item['quantity'];
            $i++;
            $quantity_id++;
        }
        echo "</table><br/>";
        echo "Total price = " . $sum . " USD";
        echo '<form method="post" action="orderform.php" style="margin-left: 325px">
                <input type="hidden" name="basket" id="basket" value="' . base64_encode(serialize($allItems)) . '">
                <input type="submit" value="Order">
            </form>';
    }
?>
</body>
</html>