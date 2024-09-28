<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Readability</title>
</head>
<body>
<form action="" method="post">
    <br/>
    <label for="paragraph">Calculate the reading level of a text </label><br/>
    <textarea name="paragraph" placeholder="Enter text here" rows="6" cols="75"></textarea><br/>
    <input type="submit" value="Calculate"><br/><br/>
</form><br/>
<?php
include '../includes/autoloader.inc.php';
if(!empty($_POST['paragraph'])) {
    $paragraph = new Text($_POST['paragraph']);
    echo $paragraph->calculateReadability();
}
?>
</body>
</html>