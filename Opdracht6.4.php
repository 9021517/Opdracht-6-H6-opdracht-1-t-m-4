<?php
function cirkelBerekeningen($straal) {
    $pi = 3.14;
    $omtrek = 2 * $pi * $straal;
    $oppervlakte = $pi * pow($straal, 2);
    return [
        "omtrek" => $omtrek,
        "oppervlakte" => $oppervlakte
    ];
}

$straal = 5; // Bijvoorbeeld
$resultaat = cirkelBerekeningen($straal);

echo "Voor een cirkel met straal $straal:<br>";
echo "Omtrek: " . $resultaat["omtrek"] . "<br>";
echo "Oppervlakte: " . $resultaat["oppervlakte"] . "<br>";
?>
