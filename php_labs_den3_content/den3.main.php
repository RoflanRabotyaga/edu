<?php
switch($id){
    case 'lab5':
        include 'php_labs_den3_content/main_content/den3.lab5.php';
        break;
    case 'lab6':
        include 'php_labs_den3_content/main_content/den3.lab6.php';
        break;
    case 'final':
        include 'php_labs_den3_content/main_content/den3.final.php';
        break;
    case 'error':
        include 'php_labs_den3_content/main_content/den3.error.php';
        break;
    default:
        include 'php_labs_den3_content/main_content/den3.final.php';
}
?>
