<?php
if(!empty($_POST['title']) && !empty($_POST['category']) && !empty($_POST['description']) && !empty($_POST['source'])){
    $title = strip_tags(trim($_POST['title']));
    $category = abs((int)($_POST['category']));
    $description = strip_tags(trim($_POST['description']));
    $source = strip_tags(trim($_POST['source']));
    $return = $news->saveNews($title, $category, $description, $source);
    if(!$return)
        $errMsg = "Error while adding news";
}elseif(isset($_POST['title']) || isset($_POST['description']) || isset($_POST['source']))
    $errMsg = "All fields are required";
$_POST = array();
unset($_POST);