<?php
function myError($errno, $errmsg, $errfile, $errline){
    if($errno == E_USER_ERROR){
        echo "we`re sorry, content will be available soon. \n";
        $error = date("d-m-Y H:i:s") . " - $errmsg in $errfile, line: $errline\n";
        error_log("$error", 3, "error.log");
    }
}
?>
