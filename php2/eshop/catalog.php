<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Catalog</title>
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
<h1>Catalog</h1>
<hr/>
<?php
include "inc/config.inc.php";
$goods = selectAllItems();

$basket = myBasket();

echo '<span>Items in the <a href="basket.php">basket</a>: ' . $count . '</span>';
echo "<table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year of publication</th>
            <th>Price, USD</th>
            <th>Add to basket</th>
          </tr>";
foreach($goods as $item){
    ?>
    <tr>
        <td><?= $item['title']?></td>
        <td><?= $item['author']?></td>
        <td><?= $item['pubyear']?></td>
        <td><?= $item['price']?></td>
        <td>
                <?php
                    $already_in = false;
                    if($basket != null)
                        foreach ($basket as $basketitem)
                            if ($item['id'] == $basketitem['id'])
                                $already_in = true;
                    if($already_in)
                        echo 'Already in <a href="basket.php">basket</a>';
                    else
                        echo '<a href="add2basket.php?id=' . $item['id'] . '">Add to basket</a>';
                ?>
            </td>
    </tr>
    <?php
}
echo "</table>";
?>
</body>