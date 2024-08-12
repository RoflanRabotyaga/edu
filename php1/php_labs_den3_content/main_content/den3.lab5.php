
<h1 style="text-align: center">The principle of file connection</h1>
<img src="php_labs_den3_content/images/file_connection.png" alt="visualisation" style="float: right; margin: 50px; height: 400px; width: 550px">
<pre>





    // File vars.php
    $lt?php
        $color = 'green';
        fruit = 'apple';
    ?&gt

    // File test.php
    &lt?php
        echo "A $color $fruit"; // A
        include 'vars.php';
        echo "A $color $fruit"; // A green apple
    ?&gt

    include 'vars.php';
    require 'vars.php';
    include_once 'vars.php';
    require_once 'vars.php';
</pre>
