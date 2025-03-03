<?php
//kobler til database
include "connect.php";

//prosedyre for å lese
$query = "SELECT regnr, merke, type, farge, aar FROM biler";
$stmt = $pdo->prepare($query);
$stmt ->execute();
$biler = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Mine Biler</title>
</head>
<body>
    <header>
        <p>VIS ALLE BILER</p>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>regnr</th>
                    <th>merke</th>
                    <th>type</th>
                    <th>farge</th>
                    <th>År</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($biler as $bil) { ?>
                    <tr>
                        <td> <?php echo $bil['regnr']; ?> </td>
                        <td> <?php echo $bil['merke']; ?> </td>
                        <td> <?php echo $bil['type']; ?> </td>
                        <td> <?php echo $bil['farge']; ?> </td>
                        <td> <?php echo $bil['aar']; ?> </td>
                    </tr>
                    <?php } ?>

            </tbody>
        </table>
    </main>
</body>
</html>