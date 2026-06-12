<?php

$personnes = [
    ["nom" => "Ali", "age" => 25,],
    ["nom" => "Fatou", "age" => 22,],
    ["nom" => "Moussa", "age" => 30,]
];


echo "1. Liste des noms des personnes :\n";
foreach ($personnes as $personne) {
    echo " " . $personne["nom"] . "\n";
}
echo "\n";

$ageMax = $personnes[0]["age"]; 
$personnePlusAgee = $personnes[0];

foreach ($personnes as $personne) {
    if ($personne["age"] > $ageMax) {
        $ageMax = $personne["age"];
        $personnePlusAgee = $personne;
    }
}
echo "2. La personne la plus âgée est " . $personnePlusAgee["nom"] . "\n\n";

$totalPersonnes = count($personnes);
echo "3. Le nombre total de personnes dans le tableau est : " . $totalPersonnes . "\n";
?>