<?php 

// Kobler til DB
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["m_nr"])){

    $m_nr = $_GET["m_nr"];


    $query = "SELECT m_nr, fornavn, etternavn, adresse, postnr, poststed, fodt, telefon, mail, betalt from medlem where m_nr = :m_nr";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":m_nr", $m_nr);
    $stmt ->execute();
    $sport = $stmt->fetch(PDO::FETCH_ASSOC);

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
    <title>Rediger Medlem</title>
</head>
<body>
    <main>
        <header>
            <h1>Rediger Medlem</h1>
        </header>
        <form action="rediger_bekreft.php" method="POST"><br><br>
            <label for="m_nr">M_nr</label><br>
            <input type="text" name="m_nr" placeholder="Medlemsnummer" value="<?php echo $sport['m_nr']; ?>" readonly required><br><br>

            <label for="fornavn">Fornavn</label><br>
            <input type="text" name="fornavn" placeholder="Fornavn" value="<?php echo $sport['fornavn']; ?>" required><br><br>

            <label for="etternavn">Etternavn</label><br>
            <input type="text" name="etternavn" placeholder="Etternavn" value="<?php echo $sport['etternavn']; ?>" required><br><br>

            <label for="adresse">Adresse</label><br>
            <input type="text" name="adresse" placeholder="Adresse" value="<?php echo $sport['adresse']; ?>" required><br><br>

            <label for="postnr">Postnummer</label><br>
            <input type="text" name="postnr" placeholder="Postnummer" value="<?php echo $sport['postnr']; ?>" required><br><br>

            <label for="poststed">Poststed</label><br>
            <input type="text" name="poststed" placeholder="Poststed" value="<?php echo $sport['poststed']; ?>" required><br><br>

            <label for="fodt">Fødselsdato</label><br>
            <input type="text" name="fodt" placeholder="Fødselsdato (f.eks. 01.01.1990)" value="<?php echo $sport['fodt']; ?>" required><br><br>

            <label for="telefon">Telefon</label><br>
            <input type="text" name="telefon" placeholder="Telefonnummer" value="<?php echo $sport['telefon']; ?>" required><br><br>

            <label for="mail">E-post</label><br>
            <input type="email" name="mail" placeholder="E-post" value="<?php echo $sport['mail']; ?>" required><br><br>

            <label for="betalt">Betalt</label><br>
            <select id="betalt" name="betalt">
                <option value="Ja" <?php if ($sport['betalt'] == "Ja") echo "selected"; ?>>Ja</option>
                <option value="Nei" <?php if ($sport['betalt'] == "Nei") echo "selected"; ?>>Nei</option>
            </select><br><br>


            <input type="submit" name="nymed" value="Rediger Medlem">
        </form><br>
        <form action="index.php" method="GET">
            <input type="submit" name="tilbake" value="Gå Tilbake">
        </form>
    </main>

</body>
</html>