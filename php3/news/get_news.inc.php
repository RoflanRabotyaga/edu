<?php
$news_array = $news->getNews();
if(empty($news_array)){
   $errMsg = "Error occured while loading news.";
}else{
    foreach($news_array as $news_item){
        echo "<hr />";
        echo $news_item['category'];
        echo "<h2>".$news_item['title']."</h2>";
        echo "<p>".$news_item['description']."</p><br />";
        echo date('F j, Y.  g:i a', $news_item['datetime']) . "<br />";
        echo "<a href='news.php?del=" . $news_item['id'] . "' style='float: right'>Delete</a><br /><br />";
    }
}