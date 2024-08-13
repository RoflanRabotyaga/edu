<form id="submit" method="post">
    <input type='hidden' name='q' value='<?= ++$q ?>'>
    <input type='hidden' name='title' value='999 / 3 is the same as 9 * x. Find x.'>
    <input type="radio" name="answer" id="2a" value="2a"><label for="2a">a. 100 </label><br/><br/>
    <input type="radio" name="answer" id="2b" value="2b"><label for="2b">b. 127 </label><br/><br/>
    <input type="radio" name="answer" id="2c" value="2c"><label for="2c">c. 122 </label><br/><br/>
    <input type="submit" value="Submit">
</form>