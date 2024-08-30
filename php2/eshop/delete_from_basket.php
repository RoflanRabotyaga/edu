<?php
    include "inc/config.inc.php";
    $id = strip_tags(trim($_GET['id']));
    deleteItemFromBasket($id);
    header('Location: basket.php');
?>