<form method="post" style="position: absolute; width: 200px; height: 200px; overflow: auto; margin: auto; top: 0; left: 0; bottom: 0; right: 0">
    <input type='hidden' name='q' value='<?= ++$q ?>'>
    <input type='hidden' name='title' value='What number is exactly half-way between these two numbers: 77 and 177?'>
    <input type="radio" name="answer" id="1a" value="1a"><label for="1a">a. 6 </label><br/><br/>
    <input type="radio" name="answer" id="1b" value="1b"><label for="1b">b. 16 </label><br/><br/>
    <input type="radio" name="answer" id="1c" value="1c"><label for="1c">c. 8 </label><br/><br/>
    <input type="submit" value="Submit">
</form>