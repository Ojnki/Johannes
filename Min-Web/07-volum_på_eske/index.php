<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beregning av eskevolum</title>
</head>
<body>
    <h1>Finn største volum på eske</h1>
    <form method="post">
        <label for="bredde">Bredde på arket (i cm):</label><br>
        <input type="number" id="bredde" name="bredde" step="0.1" required><br><br>
        <label for="lengde">Lengde på arket (i cm):</label><br>
        <input type="number" id="lengde" name="lengde" step="0.1" required><br><br>
        <button type="submit">Beregn</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Hent brukerinput fra skjemaet
        $bredde = (float)$_POST['bredde'];
        $lengde = (float)$_POST['lengde'];

        // Funksjon for å beregne volumet av esken
        function beregnVolum($h, $bredde, $lengde) {
            if ($h * 2 > $bredde || $h * 2 > $lengde) {
                return 0;
            }
            $nyBredde = $bredde - 2 * $h;
            $nyLengde = $lengde - 2 * $h;
            return $nyBredde * $nyLengde * $h;
        }

        $maksVolum = 0;
        $optimalH = 0;

        // Løp gjennom mulige høyder for esken
        for ($h = 1; $h <= min($bredde, $lengde) / 2; $h++) {
            $volum = beregnVolum($h, $bredde, $lengde);
            if ($volum > $maksVolum) {
                $maksVolum = $volum;
                $optimalH = $h;
            }
        }

        // Vis resultatet
        echo "<h2>Resultat:</h2>";
        echo "<p>Optimal høyde: {$optimalH} cm</p>";
        echo "<p>Største volum: {$maksVolum} cm³</p>";
    }
    ?>
</body>
</html>
