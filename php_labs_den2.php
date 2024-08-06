<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 3.1 - 3.4</title>
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
            <h1>Labs</h1>
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
                    $i=0;
                    $len = strlen($var);
                    while($i < $len)
                        echo $var[$i++]."<br>";
                ?>
            </p>
            <h2>Lab_3.3</h2>
            <p>
                <?php
                    $rows=32;
                    $cols=32;
                    echo "<table>";
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
                ?>
            </p>
            <h2>Lab_3.4</h2>
            <p>

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