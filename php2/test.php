<?php
    $f = fopen("file.txt", "a");
    fputs($f, "Hello world!");
    fclose($f);

    $f = fopen("read.txt", "r");
    $file = fread($f, filesize("read.txt"));
    fclose($f);
    echo $file;


?>
