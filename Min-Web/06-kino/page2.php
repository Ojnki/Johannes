<?php

$barn = $_GET['barn'];
$ungdom = $_GET['ungdom'];
$voksen = $_GET['voksen'];

$barnpris = 80;
$ungdompris = 100;
$voksenpris = 120;

$totalpris = "";
$totalbarnpris = "";
$totalungdompris = "";
$totalvoksenpris = "";


if ($barn == "")
{
 $barn = 0;
}

if ($ungdom == "")
{
 $ungdom = 0;
}

if ($voksen == "")
{
 $voksen = 0;
}



$totalbarnpris = $barn * $barnpris;
$totalungdompris = $ungdom * $ungdompris;
$totalvoksenpris = $voksen * $voksenpris;
$totalpris = $totalbarnpris + $totalungdompris + $totalvoksenpris;


if ($barn != 0)
{
 echo "prisen for barna er $totalbarnpris kr <br>";
}

if ($ungdom != 0)
{
 echo "prisen for ungdommene er $totalungdompris kr <br>";
}

 if ($voksen != 0)
{
 echo "prisen for de voksne er $totalvoksenpris kr <br>";
}

echo "prisen for alle sammen er $totalpris kr";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Priser</title>
</head>
<body>
    <form action="index.php" method="get">

        <input type="submit" value="Ny gruppe?">
    </form>
</body>
</html>

<!-- Lærer: Bra løsning, Johannes! -->