
<?php
include "php_labs_den3_content/den3.lib.php";
set_error_handler("myError");

$title = 'Lab 5 - 6';
$header = 'Lab 5 - 6';
$id = strtolower(strip_tags(trim($_GET['id'])));
switch($id){
    case 'lab5':
        $title = 'Lab #5';
        $header = 'Lab #5';
        break;
    case 'lab6':
        $title = 'Lab #6';
        $header = 'Lab #6';
        break;
    case 'info':
        $title = 'PHP configuration info';
        $header = 'PHP configuration info';
        break;
    case 'den1':
        $title = 'Labs 2.1 - 2.6';
        $header = 'Labs 2.1 - 2.6';
        break;
    case 'den2':
        $title = 'Labs 3.1 - 4.2';
        $header = 'Labs 3.1 - 4.2';
        break;
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="php_labs_den3_content/php_labs_den3.css">
</head>
<body>
    <?php
        require_once "php_labs_den3_content/den3.basics.php";
    ?>
    <nav>
        <?php
            include_once "php_labs_den3_content/den3.nav.php";
        ?>
    </nav>
    <main>
        <?php
            include_once "php_labs_den3_content/den3.main.php";
        ?>
    </main>
</body>
