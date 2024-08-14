<?php
    $dt = time();
    $page = $_SERVER['REQUEST_URI'];
    $ref = $_SERVER['HTTP_REFERER'];
    $path = date('m/d/Y H:i.s', $dt) . "| $page >>> $ref\n";
    file_put_contents("path.log", $path, FILE_APPEND);
?>