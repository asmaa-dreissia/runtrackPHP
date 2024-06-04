<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <h1> Vérification de Parité</h1>
    <form action="" method="GET">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <button type="submit">Vérifier</button>
    </form>

    <?php
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        
        if (is_numeric($nombre)) {
            if ($nombre % 2 == 0) {
                echo "<p>Nombre pair</p>";
            } else {
                echo "<p>Nombre impair</p>";
            }
        } else {
            echo "<p>Veuillez entrer un nombre valide.</p>";
        }
    }
    ?>

    
</body>
</html>

