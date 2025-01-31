<?php

$gjettettall = $_GET['gjettettall'];

$tall = rand(1,10);

$result = "";


if ($gjettettall < $tall)
    {
       $result = "$gjettettall er for lite";
    }
elseif ($tall < $gjettettall)
    {
        $result = "$gjettettall er for stort";
    }
else
    {
        $result = "$gjettettall er korrekt";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultatside</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>
<?php
echo $result;

?>
</h2> 
    <form action="index.php" method="get">

        <input type="submit" value="Prøv igjen">
    </form>
</body>
</html>