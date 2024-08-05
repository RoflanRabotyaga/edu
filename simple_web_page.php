<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 3.1 - 3.4</title>
    <link rel="stylesheet" href="simple_web_page.css">
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
            <p></p>
            <h2>Lab_3.3</h2>
            <p></p>
            <h2>Lab_3.4</h2>
            <p></p>
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