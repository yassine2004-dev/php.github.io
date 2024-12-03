<?php
/*
//Declaration
$etudiant = [
    'nom' => 'Ayman',
    'prenom' => 'Elhafri',
    'matricule' => '042054',
    'note' => 17 // Ajout 'note' pour qst2

];

// Modification de la valeur de 'note'
$etudiant['note'] = 18;

// Affichage du tableau
echo "Informations d'étudiant :<br>";
echo "Nom : " . $etudiant['nom'] . "<br>";
echo "Prenom : " . $etudiant['prenom'] . "<br>";
echo "Matricule : " . $etudiant['matricule'] . "<br>";
echo "Note : " . $etudiant['note'] . "<br>"; // Affichage de la note pour la qst 2

// Declaration d'un tableau des produits
$produits = [
    ['nom' => 'Prod A', 'prix' => 9.5],
    ['nom' => 'Prod B', 'prix' => 20.20],
    ['nom' => 'Prod C', 'prix' => 15.99]
];

// Parcours et affichage des produits
echo " ===========================<br>";
echo "Liste des produits : <br>";
foreach ($produits as $prd) {
    echo "Nom : " . $prd['nom'] . "==> Prix : " . $prd['prix'] . "DH  <br>";
}

// Déclaration d'un tableau associatif pour les scores de 5 étudiants
echo"======================= <br>";

$scores = [
    'Etd 1' => 19,
    'Etd 2' => 17,
    'Etd 3' => 14,
    'Etd 4' => 14,
    'Etd 5' => 10
];

// Calcul de la moyenne et affichage des scores
$total = array_sum($scores);
$moy = $total / count($scores);

echo "Scores des étudiants :<br>";
foreach ($scores as $etudiant => $score) {
    echo $etudiant . " : " . $score . "<br>";
}
echo "Moyenne des scores : " . $moy . "<br>";

echo"======================= <br>";

// Déclaration d'un tableau pour les pays et leurs populations
$pays = [
    'France' => 68550000,
    'Maroc' => 45610000,
    'England' => 12780048,
    'Espagne' => 89650000,
    'Portugal' => 23890000
];

// Tri du tableau par population en ordre decroissant
arsort($pays);

echo "\nListe des pays par population (ordre decroissant) :<br>";
foreach ($pays as $nom => $population) {
    echo $nom . " : " . number_format($population, 0, ',', ' ') . " habitants <br>";
}
    */

    /*
// formulaire avec html 1 +formulaire 2
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $age = $_POST['age'];

    if ($age <= 0) {
        echo "Erreur : L'âge doit être supérieur à 0 et merci!";
    } else {
        echo "Bienvenue, $nom, vous avez $age ans !";
    }
}
    
// 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $couleur =$_POST['couleur'];
    
    echo "Votre couleur préférée est : $couleur";
}
    */

    /*
// formulaire Somme
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET['nombre1'] && $_GET['nombre2']) {
        $nb1 = $_GET['nombre1'];
        $nb2 = $_GET['nombre2'];

        $somme = $nb1 + $nb2;

        echo "La somme de $nb1 et $nb2 est : $somme";
    } 
    else echo " Error ";
}       
    */
    
    /*
//formulaire 3
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $typeCompte =$_POST['typeCompte'];
                if ($typeCompte == "administrateur") {
            echo "Bienvenue, administrateur !";
        } elseif ($typeCompte == "utilisateur") {
            echo "Bienvenue, utilisateur simple !";
        }
    } else {
        echo " Error ";
}
        */
