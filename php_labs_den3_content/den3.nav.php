<?php
function verticalmenu(array $menu, bool $vertical=true){
    $n=count($menu);
    for ($i=0; $i<$n; $i++){
        if ($vertical)
            echo "<br/><div><br/>&nbsp &nbsp $menu[$i]</div>";
        else
            echo "<div style='float: left'><br/>&nbsp &nbsp$menu[$i]</div> ";
    }
}

$leftMenu = [
    "<a href='php_labs_den3_content/den3.lab5.php' target='content'>Lab five</a>",
    "<a href='php_labs_den3_content/den3.lab6.php' target='content'>Lab six</a>",
    "<a href='info.php' target='content'>PHP configuration</a>",
    "Avia tickets",
    "Hotels",
    "Restaurants  & Bars",
    "Spa & Fitness"
];
verticalmenu($leftMenu, true);
?>
