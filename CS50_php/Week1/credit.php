<?php
// returns sum of Luhn`s algorithm
function checksum(int $n):int{
    $checksum = 0;
    $numarray = str_split((string)$n);
    $intlen = strlen((string)$n);

    for($i = $intlen - 2; $i >= 0; $i -= 2)
        foreach(str_split((string)($numarray[$i] * 2)) as $digit)
            $checksum += $digit;

    for($i = $intlen - 1; $i >= 0; $i -= 2)
        $checksum += (int)$numarray[$i];

    return $checksum;
}

//returns cardholder name or UNKNOWN
function card_bank($n):string{
    $numarray = str_split((string)$n);
    $intlen = strlen((string)$n);
    //defining the cardholder
    switch($numarray[0] . $numarray[1]) :
        case 34:
        case 37:
            $unchecked = "AMEX";
            break;
        case 51:
        case 52:
        case 53:
        case 54:
        case 55:
            $unchecked = "MASTERCARD";
            break;
        default:
            if($numarray[0] == 4)
                $unchecked =  "VISA";
    endswitch;
    //checking for wrong-digits number
    switch ($unchecked) :
        case "AMEX":
            if ($intlen == 15)
                $checked = $unchecked;
            break;
        case "MASTERCARD":
            if ($intlen == 16)
                $checked = $unchecked;
            break;
        case "VISA":
            if ($intlen == 16 || $intlen == 13)
                $checked = $unchecked;
            break;
    endswitch;
    //returning value
    if(strlen($checked) > 0)
        return "$checked";
    else
        return "UNKNOWN";
}
?>

<label>please enter your card number to check your bank<br/></label>
<form action="" method="get">
    <br/><input type="number" name="var" id="val1"><br/>
</form><br/>

<?php
$n = htmlentities($_GET['var']);
    if(checksum($n) % 10 != 0)
        echo "INVALID<br/>";
    elseif(card_bank($n) )
        echo card_bank($n) . "<br/>";
?>
