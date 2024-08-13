<?php
//<Lab 1.1>
    $number = 0;
    $number = unserialize(base64_decode($_COOKIE["user"]))[number];
    $number++;
    $cookiearray = ['number' => $number, 'time' => time()];
    $cookie = base64_encode(serialize($cookiearray));
    setcookie('user', $cookie, time()+60);
//</Lab 1.1>

//<Lab 1.3>
    session_start();
    if (!isset($_SESSION['test']) and !isset($_POST['q'])){
        // Если первый запуск теста, то инициализируем переменные
        $q = 0; // Номер текущего вопроса
        $title = 'Start the test';
    }
    else{
        // Создаем сессионную переменную test, содержащую массив ответов
        if ($_POST['q'] != '1')
            $_SESSION['test'][] = $_POST['answer'];
        $q = $_POST['q'];
        $title = $_POST['title'];
    }
//</Lab 1.3>
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>php2_lab1.1-lab.1.3</title>
		<link rel="stylesheet" href="php2_labs_den1_content/php2_labs_den1.css">
        <style>
            input, label{
                float: left;
            }
            input[type=submit]{
                float: none;
            }
        </style>
	</head>
	<body>
        <div style="height=200px">
            <h3 style="text-align: right">
                <span>Lab1.1: </span>
                <!-- <Lab 1.1> -->
                    <?php
                        $array = unserialize(base64_decode($_COOKIE["user"]));
                        if($array[number] == null)
                            echo "Welcome!";
                        else
                            echo "You`re here " . ($array[number] + 1) . " time, last time was: " . date('m/d/Y H:i.s', $array[time]);
                    ?>
                <!-- </Lab 1.1> -->
            </h3>
        </div>
		<header>
            <h1><span>Lab 1.3</span>Math test</h1>
            <br/>
            <h2><?= $title ?></h2>
		</header>
		<nav>
            <!-- Menu -->
            <?php
                $leftMenuTitles = [
                    '2 + 2 * 2 = ',
                    'What number is exactly half-way between these two numbers: 77 and 177?',
                    '999 / 3 is the same as 9 * x. Find x.',
                    'x plus 99 is 9 times less than 999. What is 9 less than x ?'
                ];
                echo '<form id="myForm" method="post"><input type="hidden" name="q" value="0"><input type="submit" value="Start"></form><br/><br/>';
                for($i = 1; $i <= 4; $i++)
                    echo '<form id="myForm" method="post"><input type="hidden" name="q" value="' . $i . '"><input type="hidden" name="title" value="' . $leftMenuTitles[$i - 1] . '"><input type="submit" value="Question ' . $i . '"></form><br/><br/>';
                echo '<form id="myForm" method="post"><input type="hidden" name="q" value="999999"><input type="submit" value="Result"></form><br/><br/>';
            ?>
		</nav>
		<main>
            <?php
            // В зависимости от номера вопроса,
            // подключаем соответствующий файл с вопросами
            switch($q){
                case 0:
                    include 'php2_labs_den1_content/start.php';
                    break;
                case 1:
                    include 'php2_labs_den1_content/q1.php';
                    break;
                case 2:
                    include 'php2_labs_den1_content/q2.php';
                    break;
                case 3:
                    include 'php2_labs_den1_content/q3.php';
                    break;
                case 4:
                    include 'php2_labs_den1_content/q4.php';
                    break;
                default:
                    include 'php2_labs_den1_content/result.php';
            }
            ?>
		</main>
	</body>
</html>