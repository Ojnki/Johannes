<?php 

// Kobler til DB
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nymed"])){

    $m_nr = $_POST["m_nr"];
    $fornavn = $_POST["fornavn"];
    $etternavn = $_POST["etternavn"];
    $adresse = $_POST["adresse"];
    $postnr = $_POST["postnr"];
    $poststed = $_POST["poststed"];
    $fodt = $_POST["fodt"];
    $telefon = $_POST["telefon"];
    $mail = $_POST["mail"];
    $betalt = $_POST["betalt"];


    $query = "UPDATE medlem SET fornavn = :fornavn, etternavn = :etternavn, adresse = :adresse, 
    postnr = :postnr, poststed = :poststed, fodt = :fodt, telefon = :telefon, 
    mail = :mail, betalt = :betalt WHERE m_nr = :m_nr";


    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":m_nr", $m_nr);
    $stmt->bindParam(":fornavn", $fornavn);
    $stmt->bindParam(":etternavn", $etternavn);
    $stmt->bindParam(":adresse", $adresse);
    $stmt->bindParam(":postnr", $postnr);
    $stmt->bindParam(":poststed", $poststed);
    $stmt->bindParam(":fodt", $fodt);
    $stmt->bindParam(":telefon", $telefon);
    $stmt->bindParam(":mail", $mail);
    $stmt->bindParam(":betalt", $betalt);

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
    <title>Oppdater Medlem</title>
</head>
<body>
    <?php include "meny.php";?>
    <main>  
        <header>
            <h1>
                <?php
                    if($stmt){
                        echo "Medlem Ble Oppdatert!";
                    }
                    else{
                        echo "Error, Medlem Ble Ikke Oppdatert!";
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