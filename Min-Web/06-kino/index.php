<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hovedside</title>
</head>
<body>

    <form action="page2.php" method="get">
        <label for="barn">hvor mange barn 2-12</label>
        <input type="number" name = "barn">
        <br>
        <label for="ungdom">hvor mange ungdommer 13-17</label>
        <input type="number" name = "ungdom">
        <br>
        <label for="voksen">hvor mange voksne over 18</label>
        <input type="number" name = "voksen">
        <br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>