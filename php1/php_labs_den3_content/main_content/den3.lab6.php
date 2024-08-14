<div style="width: 45%; float: left">
    <h1 style="text-align: center;">Web form usage</h1>
    <pre>




        &ltform action="…" method="…"&gt

            Login:
            &ltinput name="login" type="text"&gt

            Password:
            &ltinput name="pwd" type="password"&gt

            &ltinput type="submit"&gt

        &lt/form&gt

        GET /action.php?login=John&pwd=1234 HTTP/1.1 &laquo
        ... &laquo
        &laquo

        POST /action.php HTTP/1.1 &laquo
        ... &laquo
        Referer: http://example.com/page-with-form.html &laquo
        Content-Type: application/x-www-form-urlencoded &laquo
        Content-Length: 19 &laquo
        &laquo
        login=John&pwd=1234
        &laquo
    </pre>
</div>
<div style="width: 45%; float: left">
    <h1 style="text-align: center;">Receiving and processing data</h1>
    <pre>




        // Receiving parameters QueryString
        echo $_GET['name'];
        echo $_GET['age'];

        // Receiving parameters from request body and their filtration
        $name = trim( strip_tags( $_POST['name'] ) );
        $age = (int) $_POST['age'];

        echo "&ltp&gtYour name $name&lt/p&gt";
        echo "&ltp&gtYou are $age years old&lt/p&gt";

        // What is the method of request?
        if( $_SERVER['REQUEST_METHOD'] == 'POST' )
            echo "This data was transfered by POST";
    </pre>
</div>