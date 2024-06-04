<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="" content="">
    <title></title>
</head>
<body>
    <h1>Formulaire de saisie</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="param1">Paramètre 1 :</label>
        <input type="text" id="param1" name="param1"><br>

        <label for="param2">Paramètre 2 :</label>
        <input type="text" id="param2" name="param2"><br>

        <label for="param3">Paramètre 3 :</label>
        <input type="text" id="param3" name="param3"><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Comptez le nombre de paramètres POST non vides
        $nombre_arguments = 0;
        foreach ($_POST as $key => $value) {
            if (!empty($value)) {
                $nombre_arguments++;
            }
        }

        // Affichez le nombre d'arguments
        echo "Nombre d'arguments POST reçus : <strong>$nombre_arguments</strong>";
    }
    ?>
</body>
</html>


