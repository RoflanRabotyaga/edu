<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Order form</title>
    <style>
        input{
            width: 300px
        }
        #address{
            width: 600px;
        }
        input:last-child{
            width: 75px;
        }
    </style>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
-->
</head>
<body>
<h1>Order form</h1>
<hr/>
<a href="basket.php">Back to basket</a><br/>
<p></p>
<form method="post" action="saveorder.php" >
    <label for="name" >Name: </label>
    <input type="text" name="name" id="name" required><br/><br/>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email" required><br/><br/>
    <label for="phone">Phone number: </label>
    <input type="tel" name="phone" id="phone" required><br/><br/>
    <label for="address">Address: </label>
    <input type="text" name="address" id="address" required><br/><br/>
    <input type="hidden" name="basket" id="basket" value="<?= $_POST['basket'] ?>">
    <input type="submit" value="Order">
</form>
</body>
