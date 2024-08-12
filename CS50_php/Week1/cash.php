<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cash</title>
</head>
<body>
<label>please enter the change you need to give</label>
<form action="" method="get">
    <br/><input type="number" name="var" id="val1"><br/>
</form><br/>
<?php
    $change = htmlentities($_GET['var']);
    $coins = 0;
    while($change > 0){
        if($change >= 25)
            $change -= 25;
        elseif($change >= 10)
            $change -= 10;
        elseif($change >= 5)
            $change -= 5;
        else
            $change -=1;
        $coins++;
    }
    echo "$coins";
?>
</body>
