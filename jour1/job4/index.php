<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="">
    <title>Nombres de 0 à 1337</title>
</head>
<body>
    <?php
    // Boucle pour afficher les nombres de 0 à 1337
    for ($i = 0; $i <= 1337; $i++) {
        // Vérification si le nombre est 42
        if ($i == 42) {
            echo "<b><u>$i</u></b><br>";
        } else {
            echo "$i<br>";
        }
    }
    ?>
</body>
</html>
