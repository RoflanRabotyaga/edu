<?php
//function my_autoloader($name){
    //include "classes/" . $name . ".class.php";
//}
//spl_autoload_register('my_autoloader');

require "classes/NewsDB.class.php";
$news = new NewsDB();
$errMsg = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
    include "save_news.inc.php";
if(isset($_GET['del']))
    include "delete_news.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>News</title>
    <meta charset="utf8"/>
    <style>
        *{
            margin: 5px;
        }
    </style>
</head>
<script>
    // Stop the form resubmission on page refresh
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<body>
    <h1>Last news</h1>
    <?php
    if($errMsg != "")
        echo "<p>" . $errMsg . "</p>";
    ?>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        Heading:<br />
        <input type="text" name="title" /><br />
        Category:<br />
        <select name="category">
            <option value="1">Politics</option>
            <option value="2">Culture</option>
            <option value="3">Sports</option>
        </select>
        <br />
        Paragraph:<br />
        <textarea name="description" cols="50" rows="5"></textarea><br />
        Source:<br />
        <input type="text" name="source" /><br />
        <br />
        <input type="submit" value="Add">
    </form>
    <?php
        include "get_news.inc.php"
    ?>
</body>
</html>