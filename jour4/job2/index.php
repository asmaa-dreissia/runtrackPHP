<?php
// Nom du cookie
$cookieName = 'nbVisites';

// Vérifier si le cookie existe, sinon l'initialiser à 0
if (!isset($_COOKIE[$cookieName])) {
    $nbVisites = 0;
} else {
    $nbVisites = (int)$_COOKIE[$cookieName];
}

// Incrémenter le compteur de visites
$nbVisites++;

// Mettre à jour le cookie avec une expiration de 30 jours
setcookie($cookieName, $nbVisites, time() + (86400 * 30), "/");

// Réinitialiser le compteur si le bouton "reset" est cliqué
if (isset($_POST['reset'])) {
    $nbVisites = 0;
    setcookie($cookieName, $nbVisites, time() + (86400 * 30), "/");
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
            font-family: Arial, sans-serif;
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
