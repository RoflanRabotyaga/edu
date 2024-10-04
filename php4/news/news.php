<?php
include 'NewsDB.class.php';
$news = new NewsDB;
$errMsg = '';
if($_SERVER['REQUEST_METHOD']=='POST')
  include 'save_news.inc.php';
if(isset($_GET['del']) && is_numeric($_GET['del'])){
  include "delete_news.inc.php";
}
?>

<!DOCTYPE html>

<html>
<head>
	<title>News</title>
	<meta charset="utf-8" />
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
if($errMsg)
  echo $errMsg;
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Title:<br />
<input type="text" name="title" /><br />
Category:<br />
<select name="category">
    <?php
        foreach ($news as $value => $name)
            echo '<option value="' . $value . '">' . $name . '</option>';
    ?>
</select>
<br />
Paragraph:<br />
<textarea name="description" cols="50" rows="5"></textarea><br />
Source:<br />
<input type="text" name="source" /><br />
<br />
<input type="submit" value="Add" />

</form>

<?php
  include "get_news.inc.php";
?>

</body>
</html>