<?php
function my_autoloader($name){
    include "classes/" . $name . ".class.php";
}
spl_autoload_register('my_autoloader');

$user1 = new User("Valera", "Valik228", "Valera20041128");
$user2 = new User("Vasya", "Genius", "qwertyuiop1234567890");
$user3 = new User("Petya", "Nagibator", "V$6*gFGn69&af3gFA9");

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user = new SuperUser("Vitalyi", "GigaBYTE", "&inform22", "Administrator");
$user->showInfo();

$user4 = clone $user3;

echo 'Total User count: ' . User::$UserCount . "<br/>";
echo 'Total SuperUser count: ' . SuperUser::$SuperUserCount . "<br/>";