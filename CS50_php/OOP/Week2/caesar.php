<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Caesar</title>
</head>
<body>
<label for="text">Encrypt/decrypt caesar cypher</label>
<form action="" method="post">
    <br/><textarea name="text" id="text" placeholder="Enter text here" style="width: 450px; height: 150px"></textarea><br/>
    <br/><label for="key">Key: </label>
    <input type="number" name="key" id="key" min="1" step="1" style="width: 40px"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <input type="submit" value="encrypt" name="prompt">  /
    <input type="submit" value="decrypt" name="prompt"> <br/>
</form><br/>
<?php
//include '../includes/autoloader.inc.php';
include '../classes/Cypher.class.php';
if($_POST) {
    foreach ($_POST as $key => $val)
        $filtered[$key] = strip_tags(trim($val));
    $cypher = new Cypher($filtered['text'], $filtered['key'], $filtered['prompt']);
    echo $cypher->result;
}
?>
</body>
