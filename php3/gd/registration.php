<!DOCTYPE html>
<meta charset="utf-8">
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <form action="" method="post">
        <label for="login">Login:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="text" name="login" id="login"/><br/>
        <label for="password">Password:&nbsp</label>
        <input type="password" name="password" id="password"/><br/><br/>
        <label for="captcha">Captcha</label><br/>
        <img src="noise-picture.php" alt="Captcha"/><br/>
        <input type="text" name="captcha" id="captcha"/><br/>
        <input type="submit" value="Check"/><br/><br/>
    </form>
    <?php
    session_start();
    if(isset($_POST['captcha'])){
        if ($_SESSION['string'] == $_POST['captcha'])
            echo "Right<br/>";
        else
            echo "Wrong<br/>";
    }
    /*echo $_SESSION['string'] . '<br/>';
    echo $_POST['captcha'] . '<br/>';*/

    ?>
</body>
</html>