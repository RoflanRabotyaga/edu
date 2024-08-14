<form id="submit" method="post">
    <input type='hidden' name='q' value='<?= ++$q ?>'>
    <input type='hidden' name='title' value=''>
    <input type="radio" name="answer" id="5a" value="5a"><label for="5a">a. Stockholm </label><br/><br/>
    <input type="radio" name="answer" id="5b" value="5b"><label for="5b">b. Burn </label><br/><br/>
    <input type="radio" name="answer" id="5c" value="5c"><label for="5c">c. Copenhagen </label><br/><br/>
    <input type="radio" name="answer" id="5d" value="5d"><label for="5d">d. Helsinki </label><br/><br/>
    <input type="submit" value="Submit">
</form>
