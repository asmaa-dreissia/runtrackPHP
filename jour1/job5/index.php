<?php
// Boucle pour afficher les nombres de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {
    // Vérification si le nombre est différent de 26, 37, 88 ou 1111
    if ($i != 26 && $i != 37 && $i != 88 && $i != 1111) {
        // Afficher le nombre avec un retour à la ligne
        echo $i . "<br>";
    }
}
?>
