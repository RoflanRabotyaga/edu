<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Substitution</title>
</head>
<body>
<label for="text">Encrypt/decrypt substitution cypher</label>
<form action="" method="post">
    <br/><textarea name="text" id="text" placeholder="Enter text here" style="width: 450px; height: 150px"></textarea><br/>
    <br/><label for="key">Key: </label>
    <input type="text" name="key" id="key" maxlength="26" minlength="26" style="width: 250px "> &nbsp; &nbsp; &nbsp;
    <input type="hidden" name="cypher" value="substitution">
    <input type="submit" value="encrypt" name="query">  /
    <input type="submit" value="decrypt" name="query"> <br/>
</form><br/>
<?php
//include '../includes/autoloader.inc.php';
include '../classes/Cypher.class.php';
if($_POST) {
    foreach ($_POST as $key => $val)
        $filtered[$key] = strip_tags(trim($val));
    $cypher = new Cypher($filtered['text'], $filtered['key'], $filtered['query'], $filtered['cypher']);
    echo $cypher->result;
}
?>
</body>
