<?php
$del = abs((int)$_GET['del']);
if(is_int($del)) {
    $result = $news->deleteNews($del);
    if ($result)
        header("Location: news.php");
    else
        $errMsg = "An error occured while deleting the news";
}
else
    header("Location: news.php");
