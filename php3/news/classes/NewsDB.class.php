<?php
require "INewsDB.class.php";
class NewsDB implements INewsDB{
    public const DB_NAME = '../news.db';
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
        $i=0;
        $array[0] = "No result";
        while (($row = $result->fetchArray(SQLITE3_ASSOC)) !== FALSE) {
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
    function __destruct(){
        unset($this->_db);
    }
}