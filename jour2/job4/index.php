<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <h1>Arguments POST</h1>
    <table border="1">
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
        
        <?php
        foreach ($_POST as $key => $value) {
            echo "<tr>";
            echo "<td><strong>$key</strong></td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
