<?php
// Boucle pour afficher les nombres de 0 à 100
for ($i = 0; $i <= 100; $i++) {
    // Vérification si le nombre est 42
    if ($i == 42) {
        // Si le nombre est 42, afficher "La Plateforme_"
        echo "La Plateforme_<br>";
    } elseif ($i >= 0 && $i <= 20) {
        // Si le nombre est entre 0 et 20, l'afficher en italique
        echo "<i>$i</i><br>";
    } elseif ($i >= 25 && $i <= 50) {
        // Si le nombre est entre 25 et 50, le souligner
        echo "<u>$i</u><br>";
    } else {
        // Sinon, afficher le nombre normalement
        echo "$i<br>";
    }
}
?>

