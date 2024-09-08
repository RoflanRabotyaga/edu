<?php
class User{
    public $name, $login, $password;
    public static $UserCount = 0;
    function __construct($name, $login, $password){
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        ++self::$UserCount;
    }
    function __clone(){
        ++self::$UserCount;
    }
    function showInfo(){
        echo "Name: {$this->name} <br>
        Login: {$this->login} <br>
        Password: {$this->password} <br>";
    }
    function __destruct(){
        echo "User {$this->login} deleted <br>";
    }
}
