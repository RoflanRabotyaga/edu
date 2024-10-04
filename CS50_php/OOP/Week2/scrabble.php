<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scrabble</title>
</head>
<body>
<label>Scrabble winner calculation</label>
<form action="" method="post">
    <br/><input type="text" name="player1" placeholder="Player 1"><br/>
    <input type="text" name="player2" placeholder="Player 2"><br/>
    <input type="submit" value="Calculate"><br/><br/>
</form><br/>
<?php
include '../includes/autoloader.inc.php';
if($_POST) {
    foreach ($_POST as $key => $val)
        $filtered[$key] = strtolower(strip_tags(trim($val)));
    $player1 = new Player($filtered['player1']);
    $player2 = new Player($filtered['player2']);
    echo Player::result($player1, $player2);
}
?>
</body>
</html>
