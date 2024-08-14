<?php
function verticalmenu($menu, bool $vertical=true):bool{
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
    "<a href='php_labs_den3.php?id=lab5'>Lab five</a>",
    "<a href='php_labs_den3.php?id=lab6'>Lab six</a>",
    "<a href='php_labs_den3.php?id=final'>Final task (calculator)</a>",
    "<a href='php_labs_den3.php?id=error'>Error handling</a>",
    "Flight tickets",
    "Hotels",
    "Restaurants  & Bars"
];
if(!verticalmenu($leftMenu, true))
    trigger_error("Menu is not found", E_USER_ERROR);
?>
