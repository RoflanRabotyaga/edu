<?php
$result = 0; // Переменная для суммы ответов
if(isset($_SESSION['test'])){
// Зачитываем ответы из ini-файла в массив
    $answers = parse_ini_file("php2_labs_den1_content/$id/answers.ini");
// Проходим по ответам и смотрим, есть ли среди них правильные
foreach($_SESSION['test'] as $value){
    if(array_key_exists($value, $answers))
// Суммируем правильные ответы
        $result += (int)$answers[$value];
}
// Очищаем данные сессии
session_destroy();
}
echo '<h2>Your result: ' . $result . '/' . count($leftMenuTitles[$id]) . '</h2>';
?>
