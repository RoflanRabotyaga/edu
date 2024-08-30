<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Admin</title>
</head>
<body>
<h1>Add to catalog</h1>
<hr/>
<a href="index.php">Back</a><br/>
<p></p>
<form action="save2cat.php" method="post">
    <label for="title" >Title: </label>
    <input type="text" name="title" id="title" style="width: 500px"><br/><br/>
    <label for="author">Author: </label>
    <input type="text" name="author" id="author" style="width: 300px"><br/><br/>
    <label for="pubyear">Year of publication: </label>
    <input type="text" name="pubyear" id="pubyear" style="width: 50px"><br/><br/>
    <label for="price">Price: </label>
    <input type="text" name="price" id="price" style="width: 50px"> USD <br/><br/>
    <input type="submit">
</form>
</body>