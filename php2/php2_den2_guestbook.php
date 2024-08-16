<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Our guest book</title>
</head>
<body>
    <!-- Get input -->
    <h1>Please, leave a note in our guest book</h1>
    <form action="" method="post">
        <input id="time" name="time" type="hidden" value="<?= time() ?>">
        <label for="name">Name: </label><br/>
        <input id="name" name="name" type="text"><br/><br/>
        <label for="email">Email: </label><br/>
        <input id="email" name="email" type="email"><br/><br/>
        <label for="msg">Message: </label><br/>
        <textarea id="msg" name="msg" rows="4" cols="50"></textarea><br/><br/>
        <input type="submit" value="Send"><br/>
    </form>
    <?php
        const DEV_ERROR = "something went wrong...";
        //Task 2
        const DB_HOST = 'localhost';
        const DB_LOGIN = 'root';
        const DB_PASSWORD = '$ionic11';
        const DB_NAME = 'gbook';

        $link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
        if( !$link )
            echo 'Error: ' . mysqli_connect_error();

        //Task 3

        $name = strip_tags(trim($_POST['name']));
        $email = strip_tags(trim($_POST['email']));
        $msg = strip_tags(trim($_POST['msg']));
        $time = strip_tags(trim(date('m/d/Y H:i.s', $_POST['time'])));

        if (strlen($name) != 0 && strlen($msg) != 0) {
            $name = mysqli_real_escape_string($link, $name);
            $email = mysqli_real_escape_string($link, $email);
            $msg = mysqli_real_escape_string($link, $msg);
            $time = mysqli_real_escape_string($link, $time);

            $query = "INSERT INTO msgs (time, name, email, msg) VALUES ('$time', '$name', '$email', '$msg')";
            $insert_result = mysqli_query($link, $query);
                if(!$insert_result)
                  echo DEV_ERROR;
        }

        //Task 5
        if(isset($_GET['del'])){
            $del = strip_tags(trim($_GET['del']));
            $query = "DELETE FROM msgs WHERE id = $del";
            $del_result = mysqli_query($link, $query);
                if(!$del_result)
                    echo DEV_ERROR;
        }

        //Task 4
        $query = 'SELECT id, time, name, email, msg FROM msgs ORDER BY id  DESC';
        $getdata = mysqli_query($link, $query);
        $data_array = mysqli_fetch_all($getdata, MYSQLI_ASSOC);
        mysqli_close($link);

        echo '<p>Total number of notes:' . count($data_array) . '</p>';
        foreach ($data_array as $row) {
            foreach ($row as $column)
                echo $column . "&nbsp&nbsp";
            echo '<a href="php2_den2_guestbook.php?del=' . $row['id'] . '">Delete</a>';
            echo "<br/>";
        }
    ?>


</body>
</html>
