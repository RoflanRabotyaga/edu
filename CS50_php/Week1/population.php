<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Population</title>
</head>
<body>
<label>Calculate lama population growth time</label>
<form action="population.php" method="post">
    <br/><input type="number" name="start" placeholder="Start with"><br/>
    <input type="number" name="end" placeholder="End with"><br/>
    <input type="submit" value="Calculate"><br/><br/>
</form><br/>
<?php
    $user_error_messages = [
        "One of the fields is empty",
        "If starting size is less than 9 the population of llamas will quickly become stagnant!",
        "Ending point is less than starting, we want lamas to grow!"
    ];

    foreach($_POST as $key => $val) {
        $filtered[$key] = strip_tags(trim($val));
    }
    if(strlen($filtered[start]) == 0 || strlen($filtered[end]) == 0)
        echo "$user_error_messages[0]";
    elseif($filtered[start] < 9)
        echo "$user_error_messages[1]";
    elseif($filtered[end] < $filtered[start])
        echo "$user_error_messages[2]";
    else
        $lamas = $filtered[start];
        for($year = 0; $lamas < $filtered[end]; $year++){
            $born = $lamas / 3;
            $dead = $lamas / 4;
            $lamas += $born - $dead;
        }
        echo "The end point will be reached in $year years <br/>"
?>
</body>
