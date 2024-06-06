<?php
session_start();

// Chemin vers le fichier de stockage du compteur de visites
$file = 'compteur_visites.txt';

if (!isset($_SESSION['nbVisites'])) {
    if (file_exists($file)) {
        $nbVisites = (int)file_get_contents($file);
    } else {
        $nbVisites = 0;
    }
    $_SESSION['nbVisites'] = $nbVisites;
}

// Incrémenter le compteur de visites
$_SESSION['nbVisites']++;
$nbVisites = $_SESSION['nbVisites'];

// Enregistrer le nouveau nombre de visites dans le fichier
file_put_contents($file, $nbVisites);

// Réinitialiser le compteur si le bouton "reset" est cliqué
if (isset($_POST['reset'])) {
    $nbVisites = 0;
    $_SESSION['nbVisites'] = $nbVisites;
    file_put_contents($file, $nbVisites);
    header("Location: " . $_SERVER['PHP_SELF']); // Redirection pour éviter la resoumission du formulaire
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
    <style>
        body {
            text-align: center;
            margin-top: 50px;
        }
        .counter {
            font-size: 2em;
            margin-bottom: 20px;
        }
        .reset-button {
            font-size: 1em;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="counter">Nombre de visites : <span id="nbVisites"><?php echo $nbVisites; ?></span></div>
    <form method="post" action="">
        <button class="reset-button" type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>
