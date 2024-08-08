
<?php
include "php_labs_den3_content/den3.lib.php";
set_error_handler("myError");

$title = 'Calculator';
$header = 'Calculator';
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
    case 'final':
        //$title = 'Calculator';
        //$header = 'Calculator';
        break;
    case 'error':
        $title = 'Error handling';
        $header = 'Error handling';
        break;
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title?></title>
    <style>
        <?php
            include "php_labs_den3_content/php_labs_den3.css";
         ?>
    </style>
    <!--<link rel="stylesheet" href="php_labs_den3_content/php_labs_den3.css">-->
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
