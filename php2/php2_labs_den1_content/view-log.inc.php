<?php
    if( file_exists("php2_labs_den1_content/logs/path.log")) {
        $lines = file("php2_labs_den1_content/logs/path.log");
        foreach ($lines as $line)
            echo $line . '<br/>';
    }else
        echo "Error: cannot find log file";
?>