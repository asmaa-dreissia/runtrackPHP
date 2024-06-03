<?php
// Boucle pour afficher les nombres de 1 à 100
for ($i = 1; $i <= 100; $i++) {
    // Vérification si le nombre est un multiple de 3 et de 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    }
    // Vérification si le nombre est un multiple de 3
    elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    }
    // Vérification si le nombre est un multiple de 5
    elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    }
    // Sinon, afficher le nombre normalement
    else {
        echo "$i<br>";
    }
}
?>