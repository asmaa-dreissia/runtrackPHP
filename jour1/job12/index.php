<?php

function calcule($nombre1, $operateur, $nombre2) {
    switch ($operateur) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            return $nombre1 / $nombre2;
        case '%':
            return $nombre1 % $nombre2;
        default:
            return "Opérateur invalide!";
    }
}

// Exemples d'appels de la fonction calcule()
echo calcule(5, '+', 3);  
echo "<br>";
echo calcule(10, '/', 2); 
echo "<br>";
echo calcule(7, '*', 4); 

?>
