<?php
    //include "inc/lib.inc.php";
    include "inc/config.inc.php";
    $id = strip_tags(trim($_GET['id']));

    add2Basket($id);

    header('Location: catalog.php');
?>
