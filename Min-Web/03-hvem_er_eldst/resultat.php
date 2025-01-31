<?php

$fornavn = $_GET['fornavn'];
$alder = $_GET['alder'];

$fornavn2 = $_GET['fornavn2'];
$alder2 = $_GET['alder2'];

$result = "";

if ($alder > $alder2)
    {
        $alderdiff = $alder - $alder2;
    }
elseif ($alder2 > $alder)
    {
        $alderdiff = $alder2 - $alder;
    }



if ($alder < $alder2)
    {
       $result = "$fornavn2 er $alderdiff år eldre enn $fornavn";
    }
elseif ($alder2 < $alder)
    {
        $result = "$fornavn er $alderdiff år eldre enn $fornavn2";
    }
else
    {
        $result = "$fornavn er like gammel som $fornavn2";
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
echo $result;

?>
</h2> 
</body>
</html>