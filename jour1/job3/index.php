<?php
// variables avec différents types de données primitif
$stringVar = "Hello";
$intVar = 42;
$floatVar = 3.14;
$boolVar = true;
$arrayVar = array(1, 2, 3);
$nullVar = null;

// Création du tableau HTML
echo "<table border='1'>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>";

function addRow($type, $name, $value) {
    echo "<tr>
            <td>$type</td>
            <td>$name</td>
            <td>$value</td>
          </tr>";
}

addRow(gettype($stringVar), "stringVar", $stringVar);
addRow(gettype($intVar), "intVar", $intVar);
addRow(gettype($floatVar), "floatVar", $floatVar);
addRow(gettype($boolVar), "boolVar", $boolVar);
addRow(gettype($arrayVar), "arrayVar", print_r($arrayVar, true));
addRow(gettype($nullVar), "nullVar", $nullVar);

echo "</tbody>
    </table>";
?>
