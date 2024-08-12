<?php
    //<Lab 1.1>
    $number = 0;
    $number = unserialize(base64_decode($_COOKIE["user"]))[number];
    $number++;
    $cookiearray = ['number' => $number, 'time' => time()];
    $cookie = base64_encode(serialize($cookiearray));
    setcookie('user', $cookie, time()+60);
    //</Lab 1.1>
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>php2_lab1.1</title>
		<link rel="stylesheet" href="php2_labs_den1.css">
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
            <h1></h1>
		</header>
		<nav>
            <?php
                $leftMenu = [
                    ['link'=>'php configuration info', 'href'=>'info.php'],
                    ['link'=>'Our project', 'href'=>'php_labs_den2.php'],
                    ['link'=>'Requiem', 'href'=>''],
                ];
                for($i = 0; $i < count($leftMenu); $i++)
                    echo '<a href="' . $leftMenu[$i][href] . '" target="_blank">' . $leftMenu[$i][link] . '</a><br/><br/>';
            ?>
		</nav>
		<main>

		</main>
	</body>
</html>