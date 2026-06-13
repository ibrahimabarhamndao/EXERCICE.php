

 <?php

$livres = [
    [
        "titre" => "Le Petit Prince",
        "auteur" => "Antoine de Saint-Exupéry",
        "disponible" => true
    ],
    [
        "titre" => "1984",
        "auteur" => "George Orwell",
        "disponible" => false
    ],
    [
        "titre" => "L'Étranger",
        "auteur" => "Albert Camus",
        "disponible" => true
    ]
];

$continuer = true; 

while ($continuer) {

    echo "\n ======BIBLIOTHEQUE===== \n";
    echo "\n 1. Afficher tous les livres";
    echo "\n 2. Afficher uniquement les livres disponibles";
    echo "\n 3. Compter le nombre total de livre";
    echo "\n 4. Ajouter un livre au tableau";
    echo "\n 5. Quitter\n";

    
    $choix = readline("Choisissez votre option 1-5: ");

    if ($choix == "5" ) {
        echo "Ba benen yon\n";
        $continuer = false;
        break;
    }

    switch ($choix) {
        case "1":
            echo "\n\n--- Liste de tous les livres ---\n\n";
            foreach($livres as $cle => $livre){
              
                echo "  " . $livre["titre"] . " ecrit par " . $livre["auteur"] . "\n";
            }
            break; 

        case "2":

            $aucundisponible = true;

            echo "\n\n--- Liste des livres disponibles ---\n\n";

            foreach($livres as  $livre){

              if($livre["disponible"] == true){

            echo "  " . $livre["titre"] . " ecrit par " . $livre["auteur"] . "\n";

            $aucundisponible = false;

              }
            } if ($aucundisponible) {
                echo "Aucun livre n'est disponible actuellement.\n";
            }
            break;


             case "3":
            echo "\n\n--- Le nombre total de livres ---\n\n";
            $Total = count($livres);
            echo "\n le nombre total de livre dans la biblioteque est de: ".$Total."\n";
            break; 


             case "4":
            echo "\n\n--- Livre ajouter ---\n\n";
            $livres []= $nouveaulivre;
              $nouveaulivre = [
        "titre" => "Une si longue lettre",
        "auteur" => "Mariama Bâ",
        "disponible" => true
    ];

    echo "\nLe livre  " . $nouveaulivre["titre"] ." ecrit par  ". $nouveaulivre["auteur"] . " a  été ajouté à la bibliothèque !\n";
            break;

            
    }

 }
?>

