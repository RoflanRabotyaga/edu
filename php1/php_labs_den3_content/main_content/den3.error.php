
<h1 style="text-align: center">Error processing</h1>
<img src="php_labs_den3_content/images/travel.webp" alt="girl on a boat on see with cliffs around" style="float: right; margin: 75px; height:300px; width: 450px">
<pre>





    // Error interception function
    function myError($errno, $errmsg, $errfile, $errline){

        // Logging user errors
        switch ($errno) {
            case E_USER_ERROR:
            case E_USER_WARNING:
            case E_USER_NOTICE:
                error_log("$errmsg\n", 3, "error.log");
        }
    }

    // Setting error interceptor
    set_error_handler("myError");

    // Catching errors
    if ($error)
        trigger_error("Что-то случилось", E_USER_ERROR);
</pre>
