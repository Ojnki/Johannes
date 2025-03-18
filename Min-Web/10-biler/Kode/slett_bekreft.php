<?php

//Koble til databasen
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['Slett_bil']))
    {
    $regnr = $_POST['regnr'];


    $query = "DELETE FROM biler WHERE regnr = :regnr";
    
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":regnr",$regnr);
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
            <title>Slett bil</title>
        </head>
        <body>
            <?php include "meny.php";?>
        <header>
        <p>Slett bil</p>
        </header>
            <main>
            <?php
            if($stmt)
            {
                echo "Bilen er blitt Slettet";
            }
            else
            {
                echo "FEIL Bilen er ikke Slettet";
            }
            ?>
            </main>
        </body>
        </html>


