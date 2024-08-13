<form method="post" style="position: absolute; width: 200px; height: 200px; overflow: auto; margin: auto; top: 0; left: 0; bottom: 0; right: 0">
    <input type='hidden' name='q' value='<?= ++$q ?>'>
    <input type='hidden' name='title' value='x plus 99 is 9 times less than 999. What is 9 less than x ?'>
    <input type="radio" name="answer" id="3a" value="3a"><label for="3a">a. x = 33 </label><br/><br/>
    <input type="radio" name="answer" id="3b" value="3b"><label for="3b">b. x = 35 </label><br/><br/>
    <input type="radio" name="answer" id="3c" value="3c"><label for="3c">c. x = 37 </label><br/><br/>
    <input type="submit" value="Submit">
</form>