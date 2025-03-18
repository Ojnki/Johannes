<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registerer Ny Medlem</title>
</head>
<body>
    
    <main>
        <header>
            <h1>Registerer Ny Medlem</h1>
        </header>
        <form action="ny_bekreft.php" method="POST"><br><br>
            <label for="m_nr">M_nr</label><br>
            <input type="number" name="m_nr"  required><br><br>

            <label for="fornavn">Fornavn</label><br>
            <input type="text" name="fornavn"  required><br><br>

            <label for="etternavn">Etternavn</label><br>
            <input type="text" name="etternavn"  required><br><br>

            <label for="adresse">Adresse</label><br>
            <input type="text" name="adresse"  required><br><br>

            <label for="postnr">Postnr</label><br>
            <input type="number" name="postnr"  required><br><br>

            <label for="poststed">Poststed</label><br>
            <input type="text" name="poststed"  required><br><br>

            <label for="fodt">Fødselsdato</label><br>
            <input type="birthdate" name="fodt"  required><br><br>

            <label for="telefon">Telefon</label><br>
            <input type="number" name="telefon"  required><br><br>

            <label for="mail">Mail</label><br>
            <input type="email" name="mail"  required><br><br>

            <label for="betalt">Betalt</label><br><br>
            <select id="betalt" name="betalt">
                <option value="Ja">Ja</option>
                <option value="Nei">Nei</option>
            </select><br><br>

            <input type="submit" name="ny_medlem" value="Registerer Ny medlem">
        </form><br>
        <form action="index.php" method="GET">
            <input type="submit" name="tilbake" value="Gå Tilbake">
        </form>
    </main>
</body>
</html>