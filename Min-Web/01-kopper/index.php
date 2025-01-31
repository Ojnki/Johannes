<?php   

$hvit_kopp = "hvit penn";
$sort_kopp = "sort penn";
$mellomlager = "" ;
"<br>";
//skriv status av koppene til skjerm
echo "innholdet i hvit kopp er:$hvit_kopp <br>";
echo "innholdet i sort kopp er:$sort_kopp <br>";

//her skal vi bytte verdiene i koppene
echo "nå byttes verdiene <br>";
$mellomlager = $hvit_kopp;
$hvit_kopp = $sort_kopp;
$sort_kopp = $mellomlager;
"<br>";

//skriv status av koppene til skjerm
"<br>";
echo "innholdet i hvit kopp er:$hvit_kopp <br>";
echo "innholdet i sort kopp er:$sort_kopp <br>";


?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mine Kopper</title>
</head>
<body>
    <h1>her er mine kopper</h1>
    <p>Her skal jeg bytte vediene i 2 kopper</p>
























    <link rel="stylesheet" href="style.css">
</body>
</html>