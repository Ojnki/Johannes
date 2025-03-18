<?php 
// Kobler til DB
include "connect.php";

// Prosedyre for å lese
$query = "SELECT m_nr, fornavn, etternavn, adresse, postnr, poststed, fodt, telefon, mail, betalt from medlem";
$stmt = $pdo->prepare($query);
$stmt ->execute();
$sporter = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mine Biler</title>
</head>
<body>
    <header>
        <p>Vis Alle Biler</p>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>M_nr</th>
                    <th>Fornavn</th>
                    <th>Etternavn</th>
                    <th>Adresse</th>
                    <th>Postnr</th>
                    <th>Poststed</th>
                    <th>Fødselsdato</th>
                    <th>Telefon</th>
                    <th>Mail</th>
                    <th>Betalt</th>
                    <th>Rediger</th>
                    <th>Slett</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($sporter as $sport) {  ?>
                    <tr>
                        <td><?php echo $sport["m_nr"]; ?></td>
                        <td><?php echo $sport["fornavn"]; ?></td>
                        <td><?php echo $sport["etternavn"]; ?></td>
                        <td><?php echo $sport["adresse"]; ?></td>
                        <td><?php echo $sport["postnr"]; ?></td>
                        <td><?php echo $sport["poststed"]; ?></td>
                        <td><?php echo $sport["fodt"]; ?></td>
                        <td><?php echo $sport["telefon"]; ?></td>
                        <td><?php echo $sport["mail"]; ?></td>
                        <td><?php echo $sport["betalt"]; ?></td>
                        <td><a href="rediger.php?m_nr=<?php echo $sport['m_nr'];?>">Rediger</a></td>
                        <td><a href="slett.php?m_nr=<?php echo $sport['m_nr'];?>" id="slett">Slett</a></td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table><br>
        <form action="Ny.php" method="GET">
            <input type="submit" value="Registerer Ny Medlem">
        </form>
    </main>
    
</body>
</html>