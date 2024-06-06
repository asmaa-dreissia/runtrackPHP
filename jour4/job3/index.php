<?php
// Démarrer la session
session_start();

// Initialiser la liste des prénoms si elle n'existe pas
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Ajouter un prénom à la liste si le formulaire est soumis
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']); // Sécuriser l'entrée utilisateur
    $_SESSION['prenoms'][] = $prenom;
}

// Réinitialiser la liste des prénoms si le bouton "reset" est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
    header("Location: " . $_SERVER['PHP_SELF']); // Redirection pour éviter la resoumission du formulaire
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des prénoms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .prenoms {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .reset-button, .add-button {
            font-size: 1em;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
        }
        .form-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="prenoms">
        <?php
        if (!empty($_SESSION['prenoms'])) {
            echo "Liste des prénoms : <ul>";
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>" . $prenom . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Aucun prénom ajouté.";
        }
        ?>
    </div>
    <div class="form-container">
        <form method="post" action="">
            <input type="text" name="prenom" placeholder="Entrez un prénom" required>
            <button class="add-button" type="submit">Ajouter</button>
        </form>
    </div>
    <form method="post" action="">
        <button class="reset-button" type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>
