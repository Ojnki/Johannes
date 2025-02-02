<?php
$tall = $_GET['tall'];
$gange;
$counter;
$resultat;

$resultat = "";
$gange = $tall;
$counter = 0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
</head>
<body>

<h1>Resultat Side</h1>

<h2>
<?php
echo "$tall gangen er";

?>
</h2>
 
</body>
</html>





<?php
echo "$tall <br>";
while ($counter < 9)
    {
    $resultat = $tall + $gange;

    $counter += 1;
    $gange += $tall;
    echo "$resultat <br>";
    }


// Lærer: Denne løsningen fungerer fint!    
?>



