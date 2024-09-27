<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Population</title>
</head>
<body>
<label>Scrabble winner calculation</label>
<form action="scrabble.php" method="post">
    <br/><input type="text" name="player1" placeholder="Player 1"><br/>
    <input type="text" name="player2" placeholder="Player 2"><br/>
    <input type="submit" value="Calculate"><br/><br/>
</form><br/>
<?php
    $points = [
        1, 3, 3, 2, 1, 4, 2, 4, 1, 8, 5, 1, 3, 1, 1, 3, 10, 1, 1, 1, 1, 4, 4, 8, 4, 10
    ];
    function calculate_points($word):int{
        $word = str_split($word);

        global $points;
        $wordpoints = 0;

        foreach ($word as $letter)
            if(ord($letter) >= 97 && ord($letter) <= 122)
                $wordpoints += $points[ord($letter) - 97];

        return $wordpoints;

    }
    if($_POST) {
        foreach ($_POST as $key => $val)
            $filtered[$key] = strtolower(strip_tags(trim($val)));
        $player1 = 0;
        $player2 = 0;
        if(!empty($filtered['player1']))
            $player1 = calculate_points($filtered['player1']);
        if(!empty($filtered['player2']))
            $player2 = calculate_points($filtered['player2']);
        if ($player1 > $player2)
            echo "Player 1 wins!";
        elseif ($player1 < $player2)
            echo "Player 2 wins!";
        else
            echo "Tie!";
    }
?>
</body>
