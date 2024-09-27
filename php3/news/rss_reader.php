<?php

const RSS_URL = "http://localhost/edu/php3/news/rss.xml";
const FILE_NAME = "news.xml";
const RSS_TTL = 12 * 3600;
function download(){
    $sxml = simplexml_load_file(RSS_URL);
    $xml = $sxml->asXML();
    file_put_contents(FILE_NAME, $xml);
}

if(!is_file(FILE_NAME)){
    download();
}
if(time() - filemtime(FILE_NAME) > RSS_TTL)
    download();
?>
<!DOCTYPE html>
<html>
<head>
    <title>News</title>
    <meta charset="utf-8" />
</head>
<body>
    <h1>Last news</h1><hr />
    <?php
    $document = simplexml_load_file(FILE_NAME);
    foreach($document->channel->item as $item){
        echo "<span style='float: left'>$item->category</span>";
        echo "<span style='float: right'>" . date('F j, Y.  g:i a', (int)$item->pubDate) . "</span>";
        echo "<h2 style='clear: both'>$item->title</h2>";
        echo "<p>$item->description</p>";
        echo "<span>Source: <a href='https://www.$item->link' target='_blank'>$item->link</a></span><br /><hr />";
    }
    ?>
</body>
</html>
