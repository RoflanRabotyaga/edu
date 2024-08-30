<?php
include "../inc/lib.inc.php";
include "../inc/config.inc.php";
function filter($data):string{
    $data = strip_tags(trim($data));
    return $data;
}
$title = filter($_POST['title']);
$author = filter($_POST['author']);
$pubyear = filter($_POST['pubyear']);
$price = filter($_POST['price']);

if(!addItemToCatalog($title, $author, $pubyear, $price))
    echo 'An error occured while adding item to catalog';
else{
    header("Location: add2cat.php");
    exit;
}
?>