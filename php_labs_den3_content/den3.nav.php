<?php
function verticalmenu($menu, bool $vertical=true){
    if(!is_array($menu)){
        return false;
    }
    $n=count($menu);
    for ($i=0; $i<$n; $i++){
        if ($vertical)
            echo "<br/><div><br/>&nbsp &nbsp $menu[$i]</div>";
        else
            echo "<div style='float: left'><br/>&nbsp &nbsp$menu[$i]</div> ";
    }
    return true;
}


$leftMenu = [
    "<a href='php_labs_den3_content/den3.lab5.php?id=lab5' target='content'>Lab five</a>",
    "<a href='php_labs_den3_content/den3.lab6.php?id=lab6' target='content'>Lab six</a>",
    "<a href='info.php?id=info' target='content'>PHP configuration</a>",
    "<a href='php_labs_den1.php?id=den1' target='content'>Our project 1</a>",
    "<a href='php_labs_den2.php?id=den2' target='content'>Our project 2</a>",
    "Hotels",
    "Restaurants  & Bars"
];
if(!verticalmenu($leftMenu, true))
    trigger_error("Menu is not found", E_USER_ERROR);
?>
