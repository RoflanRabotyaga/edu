<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mario</title>
</head>
<body>
<label>please enter the height of a mario pyramid </label>
<form action="" method="get">
    <br/><input type="number" name="var" id="val1"><br/>
</form><br/>
<?php

    $n = htmlentities($_GET['var']);

    $g = 1;
    $c = ($n - 1);


    for($i = 0; $i < $n; $i++){
        for($h = 0; $h < $c; $h++)
            echo "&nbsp&nbsp";

        for($j = 0; $j < 2; $j++)
        {
            for($p = 0; $p < $g; $p++)
                echo "#";
            if ($j % 2 == 0)
                echo "&nbsp&nbsp&nbsp";
        }
        echo"<br/>";
        $g++;
        $c--;
    }
?>
</body>
