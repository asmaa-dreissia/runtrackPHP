<?php
function leetSpeak(string $str): string {
    $leetDict = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];

    $leetStr = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        $leetStr .= $leetDict[$char] ?? $char;
    }

    return $leetStr;
}

// Exemple d'utilisation
$texte = "Salut, comment ça va ?";
echo leetSpeak($texte); // Affiche: 541u7, comm3n7 ç4 v4 ?
?>
