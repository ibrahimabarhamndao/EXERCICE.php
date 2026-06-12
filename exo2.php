<?php

$etudiants = [
    ["nom" => "Fatou", "note" => 14],
    ["nom" => "Boubacar", "note" => 8],
    ["nom" => "Mariama", "note" => 16],
    ["nom" => "Ousmane", "note" => 11],
    ["nom" => "Ibrahima", "note" => 9]
];




echo "1. Liste des étudiants et leurs notes :\n";
foreach ($etudiants as $etudiant) {
    echo " " . $etudiant["nom"] . " : " . $etudiant["note"] ."/20\n";
}
echo "\n";

$sommeNotes = 0;
foreach ($etudiants as $etudiant) {
    $sommeNotes += $etudiant["note"]; 
}
$moyenne = $sommeNotes / count($etudiants);
echo "2. La moyenne générale de la classe est : " . $moyenne . "/20\n\n";

$meilleureNote = $etudiants[0]["note"];
$meilleurEtudiant = $etudiants[0]["nom"];

foreach ($etudiants as $etudiant) {
    if ($etudiant["note"] > $meilleureNote) {
        $meilleureNote = $etudiant["note"];
        $meilleurEtudiant = $etudiant["nom"];
    }
}
echo "3. Le meilleur étudiant est " . $meilleurEtudiant . " avec une note de " . $meilleureNote . "/20\n\n";

echo "4. Étudiants ayant la moyenne (>= 10) :\n";
foreach ($etudiants as $etudiant) {
    if ($etudiant["note"] >= 10) {
        echo " " . $etudiant["nom"] . " (Admis)\n";
    }
}
?>