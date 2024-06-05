<?php
function occurrences($str, $char) {
    $occurrences = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $occurrences++;
        }
    }

    return $occurrences;
}

$str = "Bonjour";
$char = "o";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char); // Affiche : Le nombre d'occurrences de 'o' dans 'Bonjour' est : 2
?>
