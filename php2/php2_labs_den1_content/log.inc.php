<?php
    $dt = time();
    $page = $_SERVER['QUERY_STRING'];
    $ref = $_SERVER['HTTP_REFERER'];
    $ref = pathinfo($ref, PATHINFO_EXTENSION);
    $path = date('m/d/Y H:i.s', $dt) . "|&nbsp&nbsp&nbsp $page >>>>> $ref\n";

    $path .= file_get_contents('php2_labs_den1_content/logs/path.log');
    file_put_contents('php2_labs_den1_content/logs/path.log', $path);
?>