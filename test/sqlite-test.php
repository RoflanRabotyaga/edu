<?php
class Database{
    private $db;
    private $items = [];
    public function __construct(){
        $this->db = new SQLite3("test.db");
        $this->getAgeName();
    }
    protected function db2Arr(SQLite3Result $data){
        $arr = [];
        while($row = $data->fetchArray(SQLITE3_ASSOC))
            $arr[] = $row;
        return $arr;
    }
    private function getAgeName(){
        $sql = "SELECT name, age FROM users";
        $result = $this->db->query($sql);
        $result = $this->db2Arr($result);
        foreach ($result as $user)
            $this->items[$user['age']] = $user['name'];
    }
    public function get($query){
        switch($query) {
            case 'items':
                return $this->items;
                break;
            default:
                return false;
        }
    }
}
$test = new Database();
echo "<pre>";
print_r($test->get('items'));
//var_dump($test->getAgeName());
echo "</pre>";
