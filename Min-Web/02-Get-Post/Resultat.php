<?php

$fornavn = $_GET['fornavn_get'];
$respons = "";

if ($fornavn == "test")
    {
        $respons = "hei $fornavn velkommen tilbake";
    }
else
    {
        $respons = "hei $fornavn hvem er du";
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
<h1>Resultat Side</h1>

<h2>
<?php
echo $respons;

?>
</h2> 
</body>
</html>