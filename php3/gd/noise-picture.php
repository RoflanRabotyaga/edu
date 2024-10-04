<?php

function RandomString(int $lenght)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < $lenght; $i++) {
        $randstring[$i] = $characters[rand(0, strlen($characters) - 1)];
    }
    return $randstring;
}

$img = imageCreateFromJpeg("images/noise.jpg");

$red = imagecolorallocate($img, 255, 0, 0);
$green = imagecolorallocate($img, 0, 255, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
$pink = imagecolorallocate($img, 255, 0, 255);
$yellow = imagecolorallocate($img, 255, 255, 0);
$cyan = imagecolorallocate($img, 0, 255, 255);
$colors = [$red, $green, $blue, $cyan, $yellow, $pink];

imageAntiAlias($img, true);


$up = 0;
$left = 0;
$right = 360;
$down = 120;

imageSetThickness($img, rand(3, 5));
imageLine($img, rand($left, $right), rand($up, $down), rand($left, $right), rand($up, $down), $colors[rand(0, count($colors) - 1)]);

imageSetThickness($img, rand(3, 5));
imageArc($img, rand($left, $right), rand($up, $down), rand($left, $right), rand($up, $down), rand(0, 180), rand(0, 180), $colors[rand(0, count($colors) - 1)]);

$points = [rand($left, $right), rand($up, $down),
        rand($left, $right), rand($up, $down),
        rand($left, $right), rand($up, $down),
        rand($left, $right), rand($up, $down),
        rand($left, $right), rand($up, $down)];
imageSetThickness($img, rand(3, 5));
imagePolygon($img, $points, rand(3, 5), $colors[rand(0, count($colors) - 1)]);

$string = RandomString(6);

$fonts = scandir("fonts");

$j = 15;
for($i = 0; $i < strlen($string); $i++){
    imageTtfText($img, rand(34, 42), rand(-20, 20), rand(15, 25) + $j, rand(80, 90),
        $colors[rand(0, count($colors) - 1)],
        'fonts/' . $fonts[rand(2, count($fonts) - 1)], $string[$i]);
    $j += 50;
}

session_start();
$_SESSION['string'] = $string;

header('Content-Type: image/jpg');
imageJpeg($img, null, 25);