<?php

//Koble til databasen
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['ny_bil']))
    {
    $regnr = $_POST['regnr'];
    $merke = $_POST['merke'];
    $type = $_POST['type'];
    $farge = $_POST['farge'];
    $aar = $_POST['aar'];

    $query = "INSERT INTO biler (regnr,merke,type,farge,aar) VALUE
    (:regnr,:merke,:type,:farge,:aar)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":regnr",$regnr);
    $stmt->bindParam(":merke",$merke);
    $stmt->bindParam(":type",$type);
    $stmt->bindParam(":farge",$farge);
    $stmt->bindParam(":aar",$aar);
    $stmt->execute();
    }
    else
    {
        $stmt = 0;
    }
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="./CSS/style.css">
            <title>Min_Bil</title>
        </head>
        <body>
        <header>
        <p>register ny bil</p>
        </header>
            <main>
            <?php
            if($stmt)
            {
                echo "Bilen er blitt lagt til";
            }
            else
            {
                echo "det oppstod en feil";
            }
            ?>
            </main>
        </body>
        </html>


