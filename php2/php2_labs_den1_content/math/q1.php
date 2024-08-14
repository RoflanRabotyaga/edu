<form id="submit" method="post">
    <input type='hidden' name='q' value='<?= ++$q ?>'>
    <input type='hidden' name='title' value='2. What number is exactly half-way between these two numbers: 77 and 177?'>
    <input type="radio" name="answer" id="1a" value="1a"><label for="1a">a. 6 </label><br/><br/>
    <input type="radio" name="answer" id="1b" value="1b"><label for="1b">b. 16 </label><br/><br/>
    <input type="radio" name="answer" id="1c" value="1c"><label for="1c">c. 8 </label><br/><br/>
    <input type="submit" value="Submit">
</form>