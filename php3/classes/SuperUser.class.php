<?php
class SuperUser extends User{
    public $role;
    function __construct($name, $login, $password, $role){
        parent::__construct($name, $login, $password);
        $this->role = $role;
        ++self::$SuperUserCount;
        --parent::$UserCount;
    }
    function __clone(){
        ++self::$SuperUserCount;
    }

    function showInfo(){
        parent::showInfo();
        echo "Role: {$this->role} <br>";
    }
    public static $SuperUserCount = 0;
}
