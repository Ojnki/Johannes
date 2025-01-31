<?php
session_start();



$_SESSION['start'] = 100;
echo $_SESSION['start'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>
<body>
    <h1>Page1</h1>
    <a href="page2.php">Gå til Page2</a>
</body>
</html>