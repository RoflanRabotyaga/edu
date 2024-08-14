<?php
//<Lab 1.1>
    $number = 0;
    $number = unserialize(base64_decode($_COOKIE["user"]))[number];
    $number++;
    $cookiearray = ['number' => $number, 'time' => time()];
    $cookie = base64_encode(serialize($cookiearray));
    setcookie('user', $cookie, time()+60);
//</Lab 1.1>

//Different tests
$id = strtolower(strip_tags(trim($_GET['id'])));

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
        <nav>
            <a href='php2_labs_den1.php?id=math'>Math</a>
            <a href='php2_labs_den1.php?id=geography'>Geography</a>
            <a href='php2_labs_den1.php?id=biology'>Biology</a>
        </nav>
		<header>
            <h1><span>Lab 1.3</span> <?= $id ?> test</h1>
            <br/>
            <h2><?= $title ?></h2>
		</header>
		<aside>
            <!-- Menu -->
            <?php
                $leftMenuTitles = [
                    'math' => ['1. 2 + 2 * 2 = ', '2. What number is exactly half-way between these two numbers: 77 and 177?', '3. 999 / 3 is the same as 9 * x. Find x.', '4. x plus 99 is 9 times less than 999. What is 9 less than x ?'],
                    'geography' => ['1. Capital of Greece', '2. Capital of Ireland', '3. Capital of Germany', '4. Capital of Mexico', '5. Capital of Sweden'],
                    'biology' => ['1. DNA exists in the form of ... strands of DNA coiled about each other.',
                        '2. Which of the following represents the largest group of biological classification?',
                        '3. How many chromosomes does an individual human person have?',
                        '4. The bodies of all insects have ... major divisions.',
                        '5. Many animals protect themselves with an exoskeleton. Which of the following is an example of an animal with an exoskeleton?',
                        '6. Which organ system is responsible for producing hormones that regulate various body functions?']
                ];
                echo '<form id="myForm" method="post"><input type="hidden" name="q" value="0"><input type="submit" value="Start"></form><br/><br/>';
                for($i = 1; $i <= count($leftMenuTitles[$id]); $i++)
                    echo '<form id="myForm" method="post"><input type="hidden" name="q" value="' . $i . '"><input type="hidden" name="title" value="' . $leftMenuTitles[$id][$i - 1] . '"><input type="submit" value="Question ' . $i . '"></form><br/><br/>';
                echo '<form id="myForm" method="post"><input type="hidden" name="q" value="999999"><input type="submit" value="Result"></form><br/><br/>';
            ?>
		</aside>
		<main>
            <?php
            // В зависимости от номера вопроса,
            // подключаем соответствующий файл с вопросами
            switch($q){
                case 0:
                    include 'php2_labs_den1_content/' . $id . '/start.php';
                    break;
                case 1:
                    include 'php2_labs_den1_content/' . $id . '/q1.php';
                    break;
                case 2:
                    include 'php2_labs_den1_content/' . $id . '/q2.php';
                    break;
                case 3:
                    include 'php2_labs_den1_content/' . $id . '/q3.php';
                    break;
                case 4:
                    if(file_exists("php2_labs_den1_content/$id/q4.php")) {
                        include 'php2_labs_den1_content/' . $id . '/q4.php';
                        break;
                    }
                case 5:
                    if(file_exists("php2_labs_den1_content/$id/q5.php")) {
                        include 'php2_labs_den1_content/' . $id . '/q5.php';
                        break;
                    }
                case 6:
                    if(file_exists("php2_labs_den1_content/$id/q6.php")) {
                        include 'php2_labs_den1_content/' . $id . '/q6.php';
                        break;
                    }
                default:
                    include 'php2_labs_den1_content/' . $id . '/result.php';
            }
            ?>
		</main>
	</body>
</html>