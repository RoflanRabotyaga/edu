<!-- Lab 4.1 -->
<?php
function drawTable($cols="10", $rows="10", $color="white"){
    echo "<table style='background-color: $color'>";
    for($tr=1; $tr<=$rows; $tr++):
        echo "<tr>";
        for($td=1; $td<=$cols; $td++):
            if($tr==1 || $td==1)
                echo "<td><strong>" . $tr*$td . "</strong></td>";
            else
                echo "<td>" . $tr*$td . "</td>";
        endfor;
        echo "</tr>";
    endfor;
    echo "</table>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 3.1 - 4.2</title>
    <link rel="stylesheet" href="php_labs_den2.css">
</head>
<body>
    <header>
        <div><h2>HOME</h2></div>
        <div><h2>OUR TEAM</h2></div>
        <div><h2>PROJECTS</h2></div>
        <div><h2>CONTACT</h2></div>
        <div>
            <form action="">
                <input type="text"
                       id="search_query"
                       placeholder="Search query"
                />
                <label for="search_query"></label>
                <input
                       type="reset"
                       value="Go!"
                />
            </form>
        </div>
    </header>
    <section>
        <article>
            <h1>Labs Module 3</h1>
            <h2>Lab_3.1</h2>
            <p>
                <?php
                    for($i=0; $i<=50; $i++)
                        if($i%2==1)
                            echo $i."<br>";
                ?>
            </p>
            <h2>Lab_3.2</h2>
            <form action="" method="get">
                <input type="text" name="var" id="val1"><br/>
            </form>
            <p>
                <?php
                    $var = htmlentities($_GET['var']);
                    if(strlen($var)==0)
                        $var="Type some text above";
                    $i=0;
                    $len = strlen($var);
                    while($i < $len)
                        echo $var[$i++]."<br>";
                ?>
            </p>
            <h2>Lab_3.3</h2>
            <div>
                <?php
                    drawTable(32, 32, yellow);
                ?>
            </div>
            <h2>Lab_3.4</h2>
            <div>
                <?php
                $leftMenu = [
                    ['link'=>'PHP configuration info', 'href'=>'info.php'],
                    ['link'=>'Our project', 'href'=>'php_labs_den1.php'],
                    ['link'=>'PHP documentation', 'href'=>'https://www.php.net/docs.php'],
                    ['link'=>'HTML documentation', 'href'=>'https://www.w3schools.com/html/html_intro.asp'],
                    ['link'=>'CSS documentation', 'href'=>'https://www.w3schools.com/css/default.asp'],
                    ['link'=>'Java script documentation', 'href'=>'https://www.w3schools.com/js/default.asp'],
                ];
                ?>
                <?php
                    foreach ($leftMenu as $val)
                        echo "<a href='$val[href]' target='_blank'>$val[link]</a><br/><br/>";
                ?>
            </div>
            <h1>Labs Module 4</h1>
            <h2>Lab_4.1</h2>
            <p>
                <?php
                    drawTable(20);
                ?>
            </p>
        </article>
        <nav>
            <h1>Related</h1>
            <ul>
                <li><a href="http://localhost">Oh i do like to be beside the seaside</a></li>
                <li><a href="http://localhost">Oh i do like to be beside the sea</a></li>
                <li><a href="http://localhost">Although in th North of England</a></li>
                <li><a href="http://localhost">It never stops raining</a></li>
                <li><a href="http://localhost">Oh well...</a></li>
            </ul>
        </nav>
    </section>
    <footer>
        <div>
            <p id="footer_p">&copy;Copyright 2050 by nobody.All rights reserved.</p>
        </div>
    </footer>
</body>
</html>