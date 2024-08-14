<form id="submit" method="post">
    <input type='hidden' name='q' value='<?= ++$q ?>'>
    <input type='hidden' name='title' value='1. 2 + 2 * 2 = '>
    <label id="start"><br/><br/>Can you pass my <?= count($leftMenuTitles[$id]) ?> questions  math test?<br/></label>
    <input type="submit" value="&nbsp Lets try &nbsp">
</form>