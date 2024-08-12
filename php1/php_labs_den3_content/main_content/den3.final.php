<?php
    $user_error_messages = [
        null,
        "One of the fields is empty",
        "One of the numbers isn`t an integer",
        "Wrong operator",
        "Division by zero"
    ];

    // if returns 0 - no errors, if returns any positive integer - it`s the number of error
    function user_error_check(array $arr):int
    {
        if(strlen($arr['first_int']) == 0 || strlen($arr['operator']) == 0 || strlen($arr['second_int']) == 0)
            return 1;
        elseif (strlen($arr['first_int']) != strlen(intval($arr['first_int'])) || strlen($arr['second_int']) != strlen(intval($arr['second_int'])))
            return 2;
        elseif ($arr['operator'] != "+" && $arr['operator'] != "-" && $arr['operator'] != "*" && $arr['operator'] != "/")
            return 3;
        elseif ($arr['operator'] == "/" && $arr['second_int'] == "0")
            return 4;
        else
            return 0;
    }

    // returns calculated value
    function calculation(array $arr)
    {
        switch ($arr['operator']) :
            case "+":
                return $arr['first_int'] + $arr['second_int'];
            case "-":
                return $arr['first_int'] - $arr['second_int'];
            case "*":
                return $arr['first_int'] * $arr['second_int'];
            case "/":
                return $arr['first_int'] / $arr['second_int'];
            default:
                return null;
        endswitch;
    }
?>

<?php // list of errors
echo "<div style='float:right; margin: 5% 20% 0 0'>";

    echo "<h4>&nbspUser errors list:</h4><br/> <ul style='list-style-type:none; color: red;'>";
    foreach ($user_error_messages as $i)
        echo "<li>$i</li>";
    echo "</ul>";

echo "</div>";
?>

<?php echo "<div style='float: left; margin: 5%'>" ?>

<!-- getting and sending variables with <form> element -->
<form action="php_labs_den3.php?id=final" method="post"">
    <label for="first_int">First integer:</label><br/>
    <input type="text" id="first_int" name="first_int"><br/>

    <label for="operator">Operator (only + - * /):</label><br/>
    <input type="text" id="operator" name="operator"><br/>

    <label for="second_int">Second integer:</label><br/>
    <input type="text" id="second_int" name="second_int"><br/>

    <br/><input type="submit" value="Solve">
</form>

<?php
    echo "<br/>";
    // filtering variables
    foreach($_POST as $key => $val) {
        $filtered[$key] = strip_tags(trim($val));
    }

    // generating respond
    $error_status = user_error_check($filtered);
    if ($error_status == 0)
        echo "<span>Your answer is: " . calculation($filtered) . "<br/></span>";
    elseif ($error_status >= 1 && $error_status <= 4)
        echo "<em style='color: red'> Error: $user_error_messages[$error_status] </em>";
    else
        echo "<em style='color: red'> Warning: Unknown error occurred </em>";
?>

<?php echo "</div>" ?>

