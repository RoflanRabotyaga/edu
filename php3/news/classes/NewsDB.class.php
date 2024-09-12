<?php
require "INewsDB.class.php";
class NewsDB implements INewsDB{
    public const DB_NAME = '../news.db';
    public const RSS_NAME = 'rss.xml';
    public const RSS_TITLE= 'Last news';
    public const RSS_LINK = 'http://localhost/edu/php3/news/news.php';
    private $_db;
    function __construct() {
        if(!file_exists(self::DB_NAME)){
            $this->_db = new sqlite3(self::DB_NAME);
            $sql = "CREATE TABLE msgs(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                title TEXT,
                category INTEGER,
                description TEXT,
                source TEXT,
                datetime INTEGER
            );
            CREATE TABLE category(
                id INTEGER,
                name TEXT        
            );
            INSERT INTO category(id, name)
                SELECT 1 AS id, 'Politics' AS name
                UNION SELECT 2 AS id, 'Culture' AS name
                UNION SELECT 3 AS id, 'Sports' AS name";
            $this->_db->exec($sql) or die("$this->_db->lastErrorMsg()");
        }
        else
            $this->_db = new sqlite3(self::DB_NAME);

    }
    function __get($name){
        switch($name){
            case '_db': return $this->_db;
            default: throw new Exception('Unknown DB property!');
        }
    }
    function __set($name, $value){
        throw new Exception('Unknown DB property!');
    }
    function saveNews($title, $category, $description, $source){
        $dt = time();
        $sql = "INSERT INTO msgs (title, category, description, source, datetime)
        VALUES (:title, :category, :description, :source, :datetime)";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':source', $source);
        $stmt->bindParam(':datetime', $dt);
        $result = $stmt->execute();
        $stmt->close();

        /*$sql = "INSERT INTO msgs (title, category, description, source, datetime)
        SELECT '" . $title . "' AS title, $category AS category, '" . $description . "' AS description, '" . $source . "' AS source, $dt AS datetime";
        $result = $this->_db->exec($sql);*/
        //echo $this->_db->lastErrorMsg() . "<br />";
        //echo $sql;

        self::createRss();
        return $result;
    }
    function getNews(){
        $sql = "SELECT msgs.id as id, title, category.name as category,
            description, source, datetime
            FROM msgs, category
            WHERE category.id = msgs.category
            ORDER BY msgs.id DESC";
        $result = $this->_db->query($sql);
        //$row = $result->fetchArray(SQLITE3_ASSOC);
        return $this->db2Arr($result);
    }
    function db2Arr($result){
        $i=0;
        $array[0] = "No result";
        while (($row = $result->fetchArray(SQLITE3_ASSOC))/* !== FALSE*/) {
            $array[$i] = $row;
            $i++;
        }
        return $array;
    }
    function deleteNews($id){
        $sql = "DELETE FROM msgs WHERE id = $id";
        $result = $this->_db->exec($sql);
        return $result;
    }

    function createRss(){
        $dom = new DomDocument("1.0", "utf-8");
        $dom->formatOutput = true;
        $dom->preserveWhiteSpace = false;

        $rss = $dom->createElement("rss");

        $dom->appendChild($rss);
        $version = $dom->createAttribute("version");
        $version->value = '2.0';
        $rss->appendChild($version);

        $rss->appendChild($channel = $dom->createElement("channel"));
        $title = $dom->createElement("title", self::RSS_TITLE);
        $channel->appendChild($title);
        $link = $dom->createElement("link", self::RSS_LINK);
        $channel->appendChild($link);

        $data = $this->getNews();
        if(!$data)
            return false;
        foreach($data as $news){
            $item = $dom->createElement("item");

            $title = $dom->createElement("title");
            $title->appendChild($dom->createTextNode($news["title"]));
            $item->appendChild($title);

            $link = $dom->createElement("link");
            $link->appendChild($dom->createTextNode($news["source"]));
            $item->appendChild($link);

            $description = $dom->createElement("description");
            $description->appendChild($dom->createCDATASection($news["description"]));
            $item->appendChild($description);

            $pubDate = $dom->createElement("pubDate");
            $pubDate->appendChild($dom->createTextNode($news["datetime"]));
            $item->appendChild($pubDate);

            $category = $dom->createElement("category");
            $category->appendChild($dom->createTextNode($news["category"]));
            $item->appendChild($category);

            $channel->appendChild($item);
        }
        $dom->save(self::RSS_NAME);
    }

    function __destruct(){
        unset($this->_db);
    }
}