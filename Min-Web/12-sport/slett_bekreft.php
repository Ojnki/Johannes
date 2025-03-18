<?php 

// Kobler til DB
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["slett_medlem"])){

    $m_nr = $_POST["m_nr"];

    $query = "DELETE FROM medlem WHERE m_nr = :m_nr";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":m_nr", $m_nr);
    $stmt->execute();
}
else{
    $stmt = 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Slett Medlem</title>
</head>
<body>
    <?php include "meny.php";?>    
    <main>  
        <header>
            <h1>
                <?php
                    if($stmt){
                        echo "Medlem Ble Slettet!";
                    }
                    else{
                        echo "Error, Medlem Ble Ikke Slettet!";
                    }
                ?>
            </h1>
        </header><br><br>
        <form action="index.php" method="GET">
            <input type="submit" name="tilbake" value="Gå Tilbake">
        </form>
    </main>

</body>
</html>